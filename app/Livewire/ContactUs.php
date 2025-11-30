<?php

namespace App\Livewire;

use App\Mail\ContactUsMessageSent;
use App\Models\ContactUsMessage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Livewire\Component;
use Spatie\Honeypot\Http\Livewire\Concerns\HoneypotData;
use Spatie\Honeypot\Http\Livewire\Concerns\UsesSpamProtection;

class ContactUs extends Component
{
    use UsesSpamProtection;

    public string $customer_name = '';
    public string $company_name = '';
    public string $email = '';
    public string $phone = '';
    public string $question = '';
    public bool $terms = false;
    public bool $newsletter = false;
    public HoneypotData $extraFields;

    public function submit(): void
    {
        $this->protectAgainstSpam();
        $this->validateForm();
        try {
            ContactUsMessage::create($this->except('extraFields'));
            Mail::to('linards@slmedia.lv')->send(new ContactUsMessageSent($this->except('extraFields')));
            $this->isFormVisible = false;
            $this->reset();
            session()->flash('success',
                'Your message has been sent successfully and we will get back to you as soon as possible.');
        } catch (\Exception $e) {
            session()->flash('error', 'Something went wrong. Please try again later.');
            Log::error('Contact form error: '.$e->getMessage());
        }
        $this->dispatch('scrollToTop');
    }

    public function render(): View
    {
        return view('livewire.contact-us');
    }

    public function mount(): void
    {
        $this->extraFields = new HoneypotData();
    }

    private function validateForm(): void
    {
        $this->validate([
            'customer_name' => 'required|string|max:255',
            'company_name'  => 'nullable|string|max:255',
            'email'         => 'required|email',
            'phone'         => 'nullable|string|max:20',
            'question'      => 'required|string|max:1000',
            'terms'         => 'accepted',
        ],
            [
                'customer_name.required' => 'Please enter your name.',
                'customer_name.string'   => 'Please enter a valid name.',
                'customer_name.max'      => 'Name must not be greater than 255 characters.',
                'company_name.max'       => 'Company name must not be greater than 255 characters.',
                'company_name.string'    => 'Please enter a valid company name.',
                'email.required'         => 'Please enter your email address.',
                'email.email'            => 'Please enter a valid email address.',
                'phone.max'              => 'Phone number must not be greater than 20 characters.',
                'question.required'      => 'Please enter your question.',
                'question.string'        => 'Please enter a valid question.',
                'question.max'           => 'Question must not be greater than 1000 characters.',
                'terms.accepted'         => 'Please accept our terms and conditions.',
            ]
        );
    }
}
