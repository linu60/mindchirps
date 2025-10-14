<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoriesSidebar extends Component
{
    public function render()
    {
        $categories = Category::with('subcategories')->get(); // ✅ returns Eloquent objects

        return view('livewire.categories-sidebar', [
            'categories' => $categories
        ]);
    }
}
