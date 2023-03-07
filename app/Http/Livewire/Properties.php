<?php

namespace App\Http\Livewire;

use App\Models\Property;
use Livewire\Component;
use Livewire\WithPagination;

class Properties extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $properties = Property::query()->paginate();
        return view('livewire.properties', compact('properties'));
    }
}
