<?php

namespace App\Mail;

use App\Models\ChatInquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewInquiryNotification extends Mailable
{
    use Queueable, SerializesModels;

    public ChatInquiry $inquiry;

    public function __construct(ChatInquiry $inquiry)
    {
        $this->inquiry = $inquiry;
    }

    public function build()
    {
        return $this->subject('New Chat Inquiry - ' . $this->inquiry->name)
            ->view('emails.new-inquiry');
    }
}