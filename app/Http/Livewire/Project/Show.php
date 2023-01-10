<?php

namespace App\Http\Livewire\Project;

use App\Models\Project;
use Livewire\Component;

class Show extends Component
{
    public Project $project;

    public function render()
    {
        return view('livewire.project.show')->extends('layouts.app')->section('content');
    }
}
