<?php

namespace Tests\Feature;

use App\Models\Properties;
use App\Models\Team;
use App\Models\WebsiteContent;
use App\Services\GroqService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class GroqServiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_sends_only_relevant_website_content_for_service_queries(): void
    {
        WebsiteContent::create([
            'page_name' => 'Landing Page',
            'section_name' => 'Services',
            'content' => 'Our First-Time Homeowner Program helps buyers navigate homeownership with guidance and support.',
            'keywords' => 'first-time homeowner, buyers, guidance',
            'file_path' => 'resources/views/landingPage.blade.php',
            'content_type' => 'paragraph',
            'priority' => 10,
        ]);

        WebsiteContent::create([
            'page_name' => 'About Us',
            'section_name' => 'General',
            'content' => 'Our company mission focuses on long-term value creation.',
            'keywords' => 'mission, value, company',
            'file_path' => 'resources/views/aboutUs.blade.php',
            'content_type' => 'paragraph',
            'priority' => 2,
        ]);

        Http::fake([
            '*' => Http::response([
                'choices' => [
                    ['message' => ['content' => 'Verified response']]
                ]
            ], 200),
        ]);

        $service = new GroqService();
        $service->chat('Tell me about your First-Time Homeowner Program');

        Http::assertSent(function ($request) {
            $payload = $request->data();
            $userPrompt = collect($payload['messages'] ?? [])->last()['content'] ?? '';

            return str_contains($userPrompt, 'First-Time Homeowner Program')
                && !str_contains($userPrompt, 'long-term value creation');
        });
    }

    public function test_it_returns_unknown_plus_handoff_for_unsupported_questions_without_calling_groq(): void
    {
        Http::fake();

        $service = new GroqService();
        $response = $service->chat('Who won the world cup in 2014?');

        $this->assertStringContainsString('do not have enough verified information', strtolower($response));
        $this->assertStringContainsString('Talk to a Human', $response);
        Http::assertNothingSent();
    }

    public function test_it_uses_filtered_property_context_for_fallback_when_api_fails(): void
    {
        Properties::create([
            'address' => '123 Miami Ave, Miami, FL',
            'slug' => '123-miami-ave',
            'list_price' => 450000,
            'beds' => 3,
            'bath' => 2,
            'sqft' => 1800,
            'status' => 'Available',
            'prop_type' => 'Single Family',
        ]);

        Properties::create([
            'address' => '999 Dallas Rd, Dallas, TX',
            'slug' => '999-dallas-rd',
            'list_price' => 850000,
            'beds' => 4,
            'bath' => 3,
            'sqft' => 2400,
            'status' => 'Sold',
            'prop_type' => 'Single Family',
            'is_available' => false,
        ]);

        Http::fake([
            '*' => Http::response(['error' => 'upstream failure'], 500),
        ]);

        $service = new GroqService();
        $response = $service->chat('Show me available properties under $500k in Miami');

        $this->assertStringContainsString('123 Miami Ave, Miami, FL', $response);
        $this->assertStringNotContainsString('999 Dallas Rd, Dallas, TX', $response);
        $this->assertStringContainsString('Talk to a Human', $response);
    }

    public function test_it_returns_verified_team_information_for_team_queries(): void
    {
        Team::create([
            'fullname' => 'Marc Cox',
            'position' => 'Chief Executive Officer',
            'profile_pic' => 'marc.png',
        ]);

        Http::fake([
            '*' => Http::response([
                'choices' => [
                    ['message' => ['content' => 'Verified team response']]
                ]
            ], 200),
        ]);

        $service = new GroqService();
        $service->chat('Who is Marc Cox?');

        Http::assertSent(function ($request) {
            $payload = $request->data();
            $userPrompt = collect($payload['messages'] ?? [])->last()['content'] ?? '';

            return str_contains($userPrompt, 'Marc Cox')
                && str_contains($userPrompt, 'Chief Executive Officer');
        });
    }
}
