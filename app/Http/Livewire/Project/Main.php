<?php

namespace App\Http\Livewire\Project;

use App\Models\Project;
use Illuminate\Http\Client\Request;
use Livewire\Component;

class Main extends Component
{
    public $projects = [];
    public $status = 0;

    public function mount($status = null) {
        $this->status = $status;
        $query = Project::query();

        if($status !== null) {
            $query = $query->where('status', $this->status);
        }

        $this->projects = $query->get();
    }

    public function render()
    {
        return view('livewire.project.main')->extends('layouts.app')->section('content');
    }
}
