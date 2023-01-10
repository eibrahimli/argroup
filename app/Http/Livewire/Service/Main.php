<?php

namespace App\Http\Livewire\Service;

use App\Models\Service;
use App\Models\ServiceCategory;
use Livewire\Component;

class Main extends Component
{
    public $services = [], $categories = [], $filter = null,$current_category = [];

    protected $listeners = ['service-changed' => 'changeFilter'];

    public function mount($category = 'all') {
        $this->categories = ServiceCategory::all();
        $this->filter = $category;
        $query = Service::query();

        if($category === 'all'):
            $this->services = $query->get();
        else:
            $this->current_category = ServiceCategory::find($category);
            $this->services = $query->where('service_category_id', $category)->get();
        endif;
    }

    public function changeFilter($id) {

        return redirect()->route('service.main', $id);

    }

    public function render()
    {
        return view('livewire.service.main')
            ->extends('layouts.app')
            ->slot('content');
    }
}
