<?php

namespace App\Services;

use App\Models\Properties;
use App\Models\Team;
use App\Models\testimonials;
use Illuminate\Support\Facades\Http;

class GeminiService
{
    protected string $apiKey;
    protected string $model = 'gemini-2.5-flash-lite';
    protected string $baseUrl = 'https://generativelanguage.googleapis.com/v1/models';

    public function __construct()
    {
        $this->apiKey = config('services.gemini.key');
    }

    public function chat(string $userMessage, array $history = []): string
    {
        $systemPrompt = $this->buildSystemPrompt();

        $contents = $this->buildContents($systemPrompt, $history, $userMessage);

        try {
            $response = Http::timeout(30)->post("{$this->baseUrl}/{$this->model}:generateContent?key={$this->apiKey}", [
                'contents' => $contents,
                'generationConfig' => [
                    'temperature' => 0.7,
                    'maxOutputTokens' => 2048,
                ],
            ]);

            if ($response->failed()) {
                $errorData = $response->json();
                $errorMessage = $errorData['error']['message'] ?? 'Unknown error';
                
                \Log::error('Gemini API Error: ' . $response->body());
                
                if (str_contains($errorMessage, 'high demand') || str_contains($errorMessage, 'UNAVAILABLE') || str_contains($errorMessage, 'quota')) {
                    return $this->getFallbackResponse($userMessage);
                }
                
                return 'I\'m having trouble connecting right now. Please try again in a moment, or click "Talk to a Human" to speak with our team directly.';
            }

            $data = $response->json();

            if (empty($data['candidates'])) {
                \Log::error('Gemini Empty Response: ' . json_encode($data));
                return 'I apologize, but I could not generate a response.';
            }

            return $data['candidates'][0]['content']['parts'][0]['text'] ?? 'I apologize, but I could not generate a response.';
        } catch (\Exception $e) {
            \Log::error('Gemini Exception: ' . $e->getMessage());
            return 'I\'m having trouble connecting right now. Please try again in a moment, or click "Talk to a Human" to speak with our team directly.';
        }
    }

    protected function getFallbackResponse(string $userMessage): string
    {
        $userMessage = strtolower($userMessage);
        
        if (str_contains($userMessage, 'property') || str_contains($userMessage, 'available') || str_contains($userMessage, 'list') || str_contains($userMessage, 'under') || str_contains($userMessage, 'price')) {
            $properties = Properties::all();
            
            if ($properties->isEmpty()) {
                return "We currently have no properties in our system. Please try again later or contact us directly.";
            }
            
            if (preg_match('/under\s*\$?(\d+(?:,\d{3})*(?:\.\d+)?)\s*(m|million)?/i', $userMessage, $matches)) {
                $priceStr = str_replace(',', '', $matches[1]);
                $maxPrice = floatval($priceStr);
                if (!empty($matches[3])) {
                    $maxPrice = $maxPrice * 1000000;
                } elseif (isset($matches[2]) && in_array(strtolower($matches[2]), ['k'])) {
                    $maxPrice = $maxPrice * 1000;
                }
                
                if ($maxPrice > 10000000) {
                    return "Based on our current listings, our properties range from \$" . number_format($properties->min('list_price')) . " to \$" . number_format($properties->max('list_price')) . ". Our lowest priced property is at \$" . number_format($properties->min('list_price')) . ". Would you like to see properties within a specific budget? Try asking 'properties under \$500k' or click 'Talk to a Human' for more options.";
                }
                
                $filtered = $properties->filter(function($p) use ($maxPrice) {
                    return $p->list_price <= $maxPrice;
                });
                
                if ($filtered->isEmpty()) {
                    return "Based on our current listings, we don't have any properties under \$" . number_format($maxPrice) . ". Our lowest priced property is at \$" . number_format($properties->min('list_price')) . ". Would you like to see properties within a different budget? Click 'Talk to a Human' for more options.";
                }
                
                $list = $filtered->map(function($p) {
                    return "Property: {$p->address}\nPrice: \$" . number_format($p->list_price) . " | {$p->beds} Bed | {$p->bath} Bath | {$p->sqft} sqft | Status: {$p->status}";
                })->implode("\n\n");
                
                return "Here are the properties under \$" . number_format($maxPrice) . ":\n\n{$list}\n\nClick 'Talk to a Human' for more details or if you'd like to see more options.";
            }
            
            if (str_contains($userMessage, 'available')) {
                $available = $properties->where('status', 'Available');
                if ($available->isEmpty()) {
                    return "We currently have no properties marked as 'Available'. Some properties are under construction or sold. Click 'Talk to a Human' to get the latest updates.";
                }
                
                $list = $available->map(function($p) {
                    return "Property: {$p->address}\nPrice: \$" . number_format($p->list_price) . " | {$p->beds} Bed | {$p->bath} Bath | {$p->sqft} sqft";
                })->implode("\n\n");
                
                return "Here are our currently available properties:\n\n{$list}\n\nClick 'Talk to a Human' for more details.";
            }
            
            $list = $properties->map(function($p) {
                return "Property: {$p->address}\nPrice: \$" . number_format($p->list_price) . " | {$p->beds} Bed | {$p->bath} Bath | {$p->sqft} sqft | Status: {$p->status}";
            })->implode("\n\n");
            
            return "Here are our current properties:\n\n{$list}\n\nWould you like to see properties within a specific budget? Click 'Talk to a Human' for more options.";
        }
        
        return "Our AI assistant is experiencing high demand right now. Please try again in a moment, or click 'Talk to a Human' to speak with our team directly.";
    }

    protected function buildSystemPrompt(): string
    {
        $properties = Properties::all();
        $team = Team::all();
        $testimonials = testimonials::all();

        $propertyList = $properties->map(function ($p) {
            return "{$p->address}\nPrice: \$" . number_format($p->list_price) . " | Beds: {$p->beds} | Bath: {$p->bath} | Sqft: {$p->sqft} | Status: {$p->status} | Type: {$p->prop_type}";
        })->implode("\n\n");

        $teamList = $team->map(function ($t) {
            return "- {$t->fullname} - {$t->position}";
        })->implode("\n");

        $testimonialList = $testimonials->map(function ($t) {
            return "- {$t->name}: \"{$t->description}\" (Rating: {$t->rating}/5)";
        })->implode("\n");

        return <<<PROMPT
You are a smart, helpful AI assistant powered by Gemini. You are helpful for Mioym Real Estate website visitors.

Your knowledge cutoff is 2025-06, so you have general world knowledge up to that point.

GUIDELINES:
1. Be friendly, professional, and helpful - write like a real person, not a bot
2. You can answer ANY question the user asks - general knowledge, math, science, history, tech, etc.
3. If the question is about properties, real estate, the company Mioym, or related topics, use the specific data below
4. For non-property questions, answer naturally using your general knowledge
5. If you don't know something, be honest about it
6. Keep responses concise but informative
7. Always offer to help more if needed
8. IMPORTANT: When listing properties, format them nicely like this example:
   Property: 123 Ocean Drive, Miami, FL
   Price: $450,000 | 3 Bed | 2 Bath | 1,800 sqft
   
   Use line breaks between different properties. Don't use pipe symbols excessively.

DATA ABOUT MIOYM (use when relevant):
- Mioym Real Estate - A distressed asset equity firm

AVAILABLE PROPERTIES:
{$propertyList}

TEAM MEMBERS:
{$teamList}

TESTIMONIALS:
{$testimonialList}

If a user asks about properties, reference specific properties from the list above.
If a user wants to contact the company, suggest they use the contact form or call the office.
PROMPT;
    }

    protected function buildContents(string $systemPrompt, array $history, string $userMessage): array
    {
        $contents = [];

        $contents[] = [
            'role' => 'user',
            'parts' => [
                ['text' => $systemPrompt]
            ]
        ];

        foreach ($history as $message) {
            $role = $message['role'] === 'assistant' ? 'model' : 'user';
            $contents[] = [
                'role' => $role,
                'parts' => [
                    ['text' => $message['content']]
                ]
            ];
        }

        $contents[] = [
            'role' => 'user',
            'parts' => [
                ['text' => $userMessage]
            ]
        ];

        return $contents;
    }
}