<?php

namespace App\Livewire;

use App\Livewire\Forms\ContactForm;
use Livewire\Attributes\Rule;
use Livewire\Component;

class ContactPage extends Component
{

    public ContactForm $form;
    public function submit()
    {
        $this->form->validate();

        // sending mail
        $this->form->sendingMail();
        
        session()->flash('success', 'Your message has been sent.');
        $this->form->reset();
    }

    public function render()
    {
        return view('livewire.contact-page');
    }
}
