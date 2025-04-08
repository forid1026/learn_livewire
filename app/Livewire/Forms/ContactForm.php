<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ContactForm extends Form
{
    #[Rule('required|min:3|max:255')]
    public $name;

    #[Rule('required|email|max:255')]
    public $email;


    #[Rule('required|min:5|max:255')]
    public $message;


    public function sendingMail(){
        // sleep();
    }
}
