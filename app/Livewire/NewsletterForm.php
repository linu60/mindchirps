<?php
namespace App\Livewire;

use Livewire\Component;

class NewsletterForm extends Component
{
    public $email = '';

    protected $rules = [
        'email' => 'required|email',
    ];

    public function subscribe()
    {
        $this->validate();

        // You can store the email or trigger a service here
        // For now, we'll just reset and show a success message
        session()->flash('success', 'Thanks for subscribing to MindChirps!');

        $this->reset('email');
    }

    public function render()
    {
        return view('livewire.newsletter-form');
    }
}
