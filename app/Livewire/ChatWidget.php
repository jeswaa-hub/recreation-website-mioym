<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\GroqService;
use App\Models\ChatInquiry;
use Illuminate\Support\Facades\Mail;

class ChatWidget extends Component
{
    protected int $historyLimit = 6;

    public bool $isOpen = false;
    public string $message = '';
    public array $messages = [];
    public bool $isLoading = false;
    public bool $showContactForm = false;
    
    public string $contactName = '';
    public string $contactEmail = '';
    public string $contactPhone = '';
    public string $contactMessage = '';
    public bool $inquirySent = false;

    protected $listeners = ['showContact'];

    public function mount()
    {
        $this->messages = [
            ['role' => 'assistant', 'content' => 'Hello! Welcome to Mioym Real Estate. I can help with MIOYM properties, team information, services, testimonials, and contact details. How can I assist you today?']
        ];
    }

    public function toggleChat()
    {
        $this->isOpen = !$this->isOpen;
        if (!$this->isOpen) {
            $this->showContactForm = false;
            $this->inquirySent = false;
        }
    }

    public function sendMessage()
    {
        if (trim($this->message) === '') {
            return;
        }

        $userMessage = trim($this->message);
        
        $this->messages[] = ['role' => 'user', 'content' => $userMessage];
        $this->message = '';
        $this->isLoading = true;
        $this->dispatch('clearMessageInput');

        try {
            $history = array_slice($this->messages, -($this->historyLimit + 1), $this->historyLimit);
            $groq = new GroqService();
            $response = $groq->chat($userMessage, $history);
            $this->messages[] = ['role' => 'assistant', 'content' => $response];
        } catch (\Exception $e) {
            $this->messages[] = ['role' => 'assistant', 'content' => 'Sorry, I encountered an error. Please try again.'];
        }

        $this->isLoading = false;
        $this->dispatch('scrollToBottom');
    }

    public function showContactForm()
    {
        $this->showContactForm = true;
    }

    public function showHuman()
    {
        $this->showContactForm = true;
    }

    public function cancelContactForm()
    {
        $this->showContactForm = false;
        $this->contactName = '';
        $this->contactEmail = '';
        $this->contactPhone = '';
        $this->contactMessage = '';
    }

    public function resetChat()
    {
        $this->inquirySent = false;
        $this->showContactForm = false;
        $this->contactName = '';
        $this->contactEmail = '';
        $this->contactPhone = '';
        $this->contactMessage = '';
    }

    public function showContact()
    {
        $this->showContactForm = true;
    }

    public function sendInquiry()
    {
        $this->validate([
            'contactName' => 'required|min:2',
            'contactEmail' => 'required|email',
            'contactMessage' => 'required|min:5',
        ]);

        $inquiry = ChatInquiry::create([
            'name' => $this->contactName,
            'email' => $this->contactEmail,
            'phone' => $this->contactPhone ?: null,
            'message' => $this->contactMessage,
            'status' => 'new',
        ]);

        try {
            Mail::to('jeswaa1810@gmail.com')->send(new \App\Mail\NewInquiryNotification($inquiry));
        } catch (\Exception $e) {
            \Log::error('Email error: ' . $e->getMessage());
        }

        $this->inquirySent = true;
        $this->messages[] = ['role' => 'assistant', 'content' => 'Thank you for reaching out. Our team has received your message and will contact you shortly. If you still need verified MIOYM information, I can continue helping here as well.'];
    }

    public function render()
    {
        return view('livewire.chat-widget');
    }
}
