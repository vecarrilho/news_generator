<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class SearchCategory extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.search-category',[
            'categories' => Category::where('name', 'like', '%' . $this->search . '%')->get()
        ]);
    }
}
