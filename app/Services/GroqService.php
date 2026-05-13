<?php

namespace App\Services;

use App\Models\Properties;
use App\Models\Team;
use App\Models\testimonials as TestimonialsModel;
use App\Models\WebsiteContent;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class GroqService
{
    protected string $apiKey;
    protected string $model = 'llama-3.1-8b-instant';
    protected string $baseUrl = 'https://api.groq.com/openai/v1/chat/completions';
    protected int $historyLimit = 6;
    protected array $companyFacts = [
        'company' => 'MIOYM is a vertically integrated real estate firm founded in 2008 by CEO Marc Cox and headquartered in Purchase, New York. We are trusted by over 2,000+ happy clients.',
        'services' => 'Services include Fix & Flip Investment Programs, First-Time Homeowner Program, Foreclosure Prevention, Property Management, and Commercial Real Estate Investment.',
        'investor' => 'MIOYM serves 38 states and emphasizes capital preservation and long-term total return. Our fund offers 15% Preferred Returns, 0% Management Fees, and a 12-Month Minimum Lock-up Period.',
        'ira_investment' => 'Investors can use Self-Directed IRAs (SDIRA) to invest with MIOYM for asset diversification, tax advantages, and high-yield fixed income. MIOYM has partnered with the Entrust Group for SDIRA investments.',
        'team_leadership' => 'Key leadership includes Marc Cox (CEO & Founder), Robert Costomiris (President MIOYM Equities), and EA Kratzman (VP Investor Relations).',
        'contact' => 'Phone: 914-566-9050 | Email: info@mioym.com | Office: 2900 Westchester Ave., Ste. 302, Purchase, NY 10577',
    ];

    public function __construct()
    {
        $this->apiKey = config('services.groq.key');
    }

    public function chat(string $userMessage, array $history = []): string
    {
        $intent = $this->detectIntent($userMessage);
        $context = $this->collectRelevantContext($userMessage, $intent);

        if ($this->shouldForceHandoff($intent, $context)) {
            return $this->getFallbackResponse($userMessage, $intent, $context);
        }

        $systemPrompt = $this->buildSystemPrompt($intent);
        $messages = $this->buildMessages(
            $systemPrompt,
            $this->limitHistory($history),
            $userMessage,
            $context
        );

        try {
            $response = Http::timeout(60)->withHeaders([
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
            ])->post($this->baseUrl, [
                'model' => $this->model,
                'messages' => $messages,
                'temperature' => 0.7,
                'max_tokens' => 2048,
            ]);

            if ($response->failed()) {
                \Log::error('Groq API Error: ' . $response->body());
                return $this->getFallbackResponse($userMessage, $intent, $context);
            }

            $data = $response->json();

            return trim($data['choices'][0]['message']['content'] ?? '')
                ?: $this->getFallbackResponse($userMessage, $intent, $context);
        } catch (\Exception $e) {
            \Log::error('Groq Exception: ' . $e->getMessage());
            return $this->getFallbackResponse($userMessage, $intent, $context);
        }
    }

    protected function buildSystemPrompt(string $intent): string
    {
        return <<<PROMPT
You are the official AI assistant for MIOYM Real Estate.

ROLE:
- Answer only MIOYM-related questions using the verified context that will be provided.
- Current user intent category: {$intent}

STRICT RULES:
1. Use only the verified context provided in the conversation.
2. Do not invent, assume, or infer missing facts.
3. If the verified context is not enough, say that you do not have verified information and offer the phone, email, or "Talk to a Human".
4. Do not answer unrelated general-knowledge questions. Explain that you can only help with MIOYM, properties, team, services, testimonials, office/contact details, and real-estate inquiries tied to MIOYM.
5. Keep responses concise, professional, and easy to scan.
6. Do not use markdown bold or asterisks.
7. When listing properties, use this exact structure:
   Property: [Address]
   Price: $[amount] | Beds: [num] | Bath: [num] | Sqft: [num]
   Status: [status] | Type: [type]
8. If no property, page, team, or testimonial data matches the request, do not dump unrelated data.
9. When helpful, end with one short offer to continue helping.

VERIFIED BUSINESS FACTS:
- {$this->companyFacts['company']}
- {$this->companyFacts['services']}
- {$this->companyFacts['investor']}
- {$this->companyFacts['contact']}
PROMPT;
    }

    protected function buildMessages(string $systemPrompt, array $history, string $userMessage, array $context): array
    {
        $messages = [
            ['role' => 'system', 'content' => $systemPrompt]
        ];

        foreach ($history as $message) {
            $messages[] = [
                'role' => $message['role'] === 'assistant' ? 'assistant' : 'user',
                'content' => $message['content']
            ];
        }

        $messages[] = [
            'role' => 'user',
            'content' => $this->buildUserPrompt($userMessage, $context)
        ];

        return $messages;
    }

    protected function buildUserPrompt(string $userMessage, array $context): string
    {
        $sections = [];

        if (!empty($context['company_facts'])) {
            $sections[] = "COMPANY FACTS:\n" . implode("\n", array_map(fn ($item) => "- {$item}", $context['company_facts']));
        }

        if (!empty($context['website_content'])) {
            $sections[] = "RELEVANT WEBSITE CONTENT:\n" . implode("\n", array_map(fn ($item) => "- {$item}", $context['website_content']));
        }

        if (!empty($context['properties'])) {
            $sections[] = "MATCHING PROPERTIES:\n" . implode("\n\n", array_map(function ($property) {
                return "Property: {$property['address']}\nPrice: $" . number_format((float) $property['list_price']) . " | Beds: {$property['beds']} | Bath: {$property['bath']} | Sqft: {$property['sqft']}\nStatus: {$property['status']} | Type: {$property['prop_type']}";
            }, $context['properties']));
        }

        if (!empty($context['team'])) {
            $sections[] = "MATCHING TEAM:\n" . implode("\n", array_map(fn ($member) => "- {$member['fullname']} - {$member['position']}", $context['team']));
        }

        if (!empty($context['testimonials'])) {
            $sections[] = "MATCHING TESTIMONIALS:\n" . implode("\n", array_map(function ($testimonial) {
                return "- {$testimonial['name']}: \"{$testimonial['description']}\" (Rating: {$testimonial['rating']}/5)";
            }, $context['testimonials']));
        }

        $contextBlock = implode("\n\n", $sections);

        return <<<PROMPT
Verified MIOYM context:
{$contextBlock}

User question:
{$userMessage}
PROMPT;
    }

    protected function detectIntent(string $userMessage): string
    {
        $message = strtolower($userMessage);

        if (preg_match('/\b(hi|hello|hey|good morning|good afternoon)\b/', $message)) {
            return 'greeting';
        }

        if (preg_match('/\b(phone|email|contact|office|location|address|reach)\b/', $message)) {
            return 'contact';
        }

        if (preg_match('/\b(team|staff|leadership|ceo|marc cox)\b/', $message)) {
            return 'team';
        }

        if (preg_match('/\b(testimonial|review|rating|client)\b/', $message)) {
            return 'testimonial';
        }

        if (preg_match('/\b(service|program|invest|investor|flip|foreclosure|management|commercial|homeowner|states|operate|coverage|fund|ira|sdira|returns|yield|fees|lock-up)\b/', $message)) {
            return 'service';
        }

        if (preg_match('/\b(property|properties|house|home|listing|listings|available|bed|bath|sqft|price|budget|under \$?|near|location of property|address of property)\b/', $message)) {
            return 'property';
        }

        if (preg_match('/\b(mioym|company|about|who are you|what do you do)\b/', $message)) {
            return 'company';
        }

        return 'unsupported';
    }

    protected function collectRelevantContext(string $userMessage, string $intent): array
    {
        $context = [
            'company_facts' => $this->getCoreFactsForIntent($intent),
            'website_content' => [],
            'properties' => [],
            'team' => [],
            'testimonials' => [],
        ];

        if (in_array($intent, ['company', 'service', 'team', 'property'], true)) {
            $context['website_content'] = $this->findRelevantWebsiteContent($userMessage);
        }

        if ($intent === 'property') {
            $context['properties'] = $this->findRelevantProperties($userMessage);
        }

        if (in_array($intent, ['team', 'company'], true)) {
            $context['team'] = $this->findRelevantTeam($userMessage);
        }

        if ($intent === 'testimonial') {
            $context['testimonials'] = $this->findRelevantTestimonials($userMessage);
        }

        return $context;
    }

    protected function getCoreFactsForIntent(string $intent): array
    {
        return match ($intent) {
            'contact' => [$this->companyFacts['contact']],
            'service' => [$this->companyFacts['company'], $this->companyFacts['services'], $this->companyFacts['investor'], $this->companyFacts['ira_investment'], $this->companyFacts['contact']],
            'company' => [$this->companyFacts['company'], $this->companyFacts['services'], $this->companyFacts['investor'], $this->companyFacts['team_leadership'], $this->companyFacts['contact']],
            'team' => [$this->companyFacts['company'], $this->companyFacts['team_leadership'], $this->companyFacts['contact']],
            'property' => [$this->companyFacts['company'], $this->companyFacts['contact']],
            'testimonial' => [$this->companyFacts['company'], $this->companyFacts['contact']],
            'greeting' => [$this->companyFacts['company'], $this->companyFacts['contact']],
            default => [],
        };
    }

    protected function findRelevantWebsiteContent(string $userMessage, int $limit = 6): array
    {
        return collect(WebsiteContent::findRelevant($userMessage, $limit))
            ->pluck('content')
            ->filter()
            ->map(fn ($content) => trim($content))
            ->unique()
            ->take($limit)
            ->values()
            ->all();
    }

    protected function findRelevantProperties(string $userMessage, int $limit = 5): array
    {
        $message = strtolower($userMessage);
        $query = Properties::query();
        $hasScopedFilter = false;

        if (preg_match('/under\s*\$?\s*(\d+(?:,\d{3})*(?:\.\d+)?)\s*(k|m|million)?/i', $userMessage, $matches)) {
            $maxPrice = $this->normalizePriceAmount($matches[1], $matches[2] ?? null);
            $query->where('list_price', '<=', $maxPrice);
            $hasScopedFilter = true;
        }

        if (str_contains($message, 'available')) {
            $query->where(function ($builder) {
                $builder->where('status', 'Available')
                    ->orWhere('is_available', true);
            });
            $hasScopedFilter = true;
        }

        $terms = collect(preg_split('/\s+/', $message))
            ->filter(fn ($term) => strlen($term) >= 3)
            ->reject(fn ($term) => in_array($term, ['the', 'and', 'for', 'with', 'property', 'properties', 'house', 'home', 'listing', 'listings'], true))
            ->take(6)
            ->values();

        if ($terms->isNotEmpty()) {
            $query->where(function ($builder) use ($terms) {
                foreach ($terms as $term) {
                    $builder->orWhere('address', 'LIKE', "%{$term}%")
                        ->orWhere('status', 'LIKE', "%{$term}%")
                        ->orWhere('prop_type', 'LIKE', "%{$term}%");
                }
            });
            $hasScopedFilter = true;
        }

        if (!$hasScopedFilter) {
            return [];
        }

        return $query->limit($limit)->get([
            'address',
            'list_price',
            'beds',
            'bath',
            'sqft',
            'status',
            'prop_type',
        ])->toArray();
    }

    protected function findRelevantTeam(string $userMessage, int $limit = 5): array
    {
        $message = strtolower($userMessage);
        $query = Team::query();
        $hasScopedFilter = false;

        $terms = collect(preg_split('/\s+/', $message))
            ->filter(fn ($term) => strlen($term) >= 3)
            ->reject(fn ($term) => in_array($term, ['team', 'staff', 'leadership', 'about', 'company'], true))
            ->take(5)
            ->values();

        if ($terms->isNotEmpty()) {
            $query->where(function ($builder) use ($terms) {
                foreach ($terms as $term) {
                    $builder->orWhere('fullname', 'LIKE', "%{$term}%")
                        ->orWhere('position', 'LIKE', "%{$term}%");
                }
            });
            $hasScopedFilter = true;
        }

        if (!$hasScopedFilter && preg_match('/\b(team|staff|leadership|ceo|marc cox)\b/', $message)) {
            return $query->limit($limit)->get(['fullname', 'position'])->toArray();
        }

        if (!$hasScopedFilter) {
            return [];
        }

        return $query->limit($limit)->get(['fullname', 'position'])->toArray();
    }

    protected function findRelevantTestimonials(string $userMessage, int $limit = 3): array
    {
        $message = strtolower($userMessage);
        $query = TestimonialsModel::query();

        $terms = collect(preg_split('/\s+/', $message))
            ->filter(fn ($term) => strlen($term) >= 3)
            ->reject(fn ($term) => in_array($term, ['testimonial', 'testimonials', 'review', 'reviews', 'client'], true))
            ->take(4)
            ->values();

        if ($terms->isNotEmpty()) {
            $query->where(function ($builder) use ($terms) {
                foreach ($terms as $term) {
                    $builder->orWhere('name', 'LIKE', "%{$term}%")
                        ->orWhere('subject', 'LIKE', "%{$term}%")
                        ->orWhere('description', 'LIKE', "%{$term}%");
                }
            });
        }

        return $query->limit($limit)->get(['name', 'description', 'rating'])->toArray();
    }

    protected function shouldForceHandoff(string $intent, array $context): bool
    {
        if ($intent === 'unsupported') {
            return true;
        }

        if (in_array($intent, ['contact', 'greeting'], true)) {
            return false;
        }

        return empty($context['company_facts'])
            && empty($context['website_content'])
            && empty($context['properties'])
            && empty($context['team'])
            && empty($context['testimonials']);
    }

    protected function limitHistory(array $history): array
    {
        return collect($history)
            ->filter(function ($message) {
                return isset($message['role'], $message['content'])
                    && in_array($message['role'], ['user', 'assistant'], true)
                    && trim($message['content']) !== '';
            })
            ->take(-$this->historyLimit)
            ->values()
            ->all();
    }

    protected function getFallbackResponse(string $userMessage, ?string $intent = null, ?array $context = null): string
    {
        $intent ??= $this->detectIntent($userMessage);
        $context ??= $this->collectRelevantContext($userMessage, $intent);
        $userMessage = strtolower($userMessage);

        if ($intent === 'greeting') {
            return "Hello! Welcome to MIOYM Real Estate. I can help with MIOYM properties, team information, services, testimonials, and contact details. How can I help you today?";
        }

        if ($intent === 'contact' || preg_match('/\b(office|location|address|exact location|where is your)\b/', $userMessage)) {
            return "Our office is located at 2900 Westchester Ave., Ste. 302, Purchase, NY 10577. You can reach us at 914-566-9050 or info@mioym.com. If you prefer, you can also use Talk to a Human for direct assistance.";
        }

        if ($intent === 'service' && preg_match('/\b(states?|operate|coverage|service area|where do you)\b/', $userMessage)) {
            return "MIOYM serves 38 states across the United States. If you want to confirm a specific market, please use Talk to a Human or contact us at 914-566-9050.";
        }

        if ($intent === 'property') {
            $properties = collect($context['properties'] ?? []);

            if ($properties->isEmpty()) {
                return "I do not have verified property information that matches your request right now. Please try a more specific property question or use Talk to a Human for direct assistance.";
            }

            $list = $this->formatPropertyList($properties);

            if (preg_match('/under\s*\$?\s*(\d+(?:,\d{3})*(?:\.\d+)?)\s*(k|m|million)?/i', $userMessage, $matches)) {
                $maxPrice = $this->normalizePriceAmount($matches[1], $matches[2] ?? null);
                return "Here are the verified properties under $" . number_format($maxPrice) . ":\n\n{$list}\n\nIf you want more options, please use Talk to a Human.";
            }

            if (str_contains($userMessage, 'available')) {
                return "Here are the verified available properties I found:\n\n{$list}\n\nIf you want more details, please use Talk to a Human.";
            }

            return "Here is the verified property information I found:\n\n{$list}\n\nIf you want more details, please use Talk to a Human.";
        }

        if ($intent === 'team' && !empty($context['team'])) {
            $team = collect($context['team'])
                ->map(fn ($member) => "- {$member['fullname']} - {$member['position']}")
                ->implode("\n");

            return "Here is the verified team information I found:\n{$team}\n\nIf you want to connect with someone directly, please use Talk to a Human.";
        }

        if ($intent === 'testimonial' && !empty($context['testimonials'])) {
            $testimonials = collect($context['testimonials'])
                ->map(fn ($item) => "- {$item['name']}: \"{$item['description']}\" (Rating: {$item['rating']}/5)")
                ->implode("\n");

            return "Here are verified client testimonials:\n{$testimonials}\n\nIf you want to learn more about working with MIOYM, please use Talk to a Human.";
        }

        if (in_array($intent, ['company', 'service', 'team', 'testimonial', 'unsupported'], true)) {
            return "I do not have enough verified information to answer that accurately. I can help with MIOYM properties, team, services, testimonials, and contact details. For anything more specific, please use Talk to a Human or contact us at 914-566-9050 or info@mioym.com.";
        }

        return "I do not have enough verified information to answer that accurately. Please use Talk to a Human or contact us at 914-566-9050 or info@mioym.com.";
    }

    protected function formatPropertyList(Collection $properties): string
    {
        return $properties->map(function ($property) {
            return "Property: {$property['address']}\nPrice: $" . number_format((float) $property['list_price']) . " | Beds: {$property['beds']} | Bath: {$property['bath']} | Sqft: {$property['sqft']}\nStatus: {$property['status']} | Type: {$property['prop_type']}";
        })->implode("\n\n");
    }

    protected function normalizePriceAmount(string $rawAmount, ?string $suffix = null): float
    {
        $amount = (float) str_replace(',', '', $rawAmount);
        $suffix = strtolower((string) $suffix);

        return match ($suffix) {
            'k' => $amount * 1000,
            'm', 'million' => $amount * 1000000,
            default => $amount,
        };
    }
}
