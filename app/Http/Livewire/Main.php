<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\Client;
use App\Models\Link;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Slider;
use Carbon\Carbon;
use Livewire\Component;

class Main extends Component
{
    public $projects = [], $partners = [], $sliders = [] ,$clients = [], $blogs = [], $link = false;

    public function mount($key = false) {
        $this->projects = Project::take(20)->get();
        $this->partners = Partner::take(20)->get();
        $this->clients = Client::take(20)->get();
        $this->blogs = Blog::take(20)->get();
        $this->sliders = Slider::all();

        if($key):
            $this->link = Link::where('created_at', Carbon::createFromTimestamp($key)->toDateTime())->first();
        endif;

        if(session()->get('link')):
            session()->put('link',$this->link);
        else:
            session()->push('link',$this->link);
        endif;
    }

    public function render()
    {
        return view('livewire.main')->extends('layouts.app')->section('content');
    }
}
