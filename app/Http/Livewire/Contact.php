<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public \App\Models\Contact $contact;

    public function mount() {
        $this->contact = \App\Models\Contact::first();
    }

    public function render()
    {
        return view('livewire.contact')->extends('layouts.app')->section('content');
    }
}
