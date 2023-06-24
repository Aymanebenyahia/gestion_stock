<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SubCategoryListComponent extends Component
{
    public function render()
    {
        return view('livewire.sub-category-list-component')->layout('layouts.app');
    }
}
