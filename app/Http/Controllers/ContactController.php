<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactController
{
    public function submit(Request $request)
    {
        // 1. Honeypot Check (Anti-Bot)
        // Bots tend to fill out all fields. If 'website_url' is filled, it's a bot.
        if (!empty($request->website_url)) {
            // Silently reject the bot without letting it know it failed
            return back()->with('success', 'Message sent successfully.');
        }

        // 2. Strict Input Validation
        $validated = $request->validate([
            'name' => 'required|string|max:100|regex:/^[a-zA-Z\s]+$/', // Letters and spaces only
            'email' => 'required|email:rfc,dns|max:100', // Strict email format checking
            'phone' => ['required', 'string', 'regex:/^\+1 \([2-9]\d{2}\) \d{3}-\d{4}$/'], 
            'message' => 'required|string|max:1000', // Prevent super long messages
            'consent_marketing' => 'required|accepted',
            'sms_consent' => 'required|accepted',
            'terms' => 'required|accepted',
            'email_consent' => 'required|accepted',
            'g-recaptcha-response' => 'required', // reCAPTCHA required
        ], [
            'name.regex' => 'Name may only contain letters and spaces.',
            'phone.regex' => 'Please provide a valid US phone number',
            'message.max' => 'Your message is too long.',
            'consent_marketing.accepted' => 'You must provide consent for marketing communications.',
            'sms_consent.accepted' => 'You must agree to receive SMS texts.',
            'terms.accepted' => 'You must accept the terms & conditions.',
            'email_consent.accepted' => 'You must agree to receive emails.',
            'g-recaptcha-response.required' => 'Please complete the reCAPTCHA verification to prove you are human.',
        ]);

        // 3. Google reCAPTCHA v2 Verification
        $recaptchaResponse = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip()
        ]);

        if (!$recaptchaResponse->json('success')) {
            return back()->withErrors(['g-recaptcha-response' => 'reCAPTCHA verification failed. Please try again.'])->withInput();
        }

        // 4. (Optional Future Enhancement) Send Email Logic Here
        // Mail::to('info@mioym.com')->send(new ContactFormMail($validated));

        // 5. Return Success Response
        return back()->with('success', 'Thank you! Your message has been sent successfully.');
    }
}
