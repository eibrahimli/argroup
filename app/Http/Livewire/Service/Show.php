<?php

namespace App\Http\Livewire\Service;

use App\Models\Service;
use Livewire\Component;

class Show extends Component
{
    public Service $service;

    public function render()
    {
        return view('livewire.service.show')->extends('layouts.app')->section('content');
    }
}
