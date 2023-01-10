<?php

namespace App\Http\Livewire;

use App\Models\Team;
use Livewire\Component;

class About extends Component
{
    public \App\Models\About $about ;

    public $teams = [];

    public function mount() {
        $this->about = \App\Models\About::first();
        $this->teams = Team::all()->groupBy('priority')->toArray();
    }

    public function render()
    {
        return view('livewire.about')
            ->extends('layouts.app')
            ->section('content');
    }
}
