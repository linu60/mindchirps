<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class SidebarCategories extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = Category::with('subcategories.reviews')->get();
    }

    public function render()
    {
        return view('livewire.sidebar-categories');
    }
}

