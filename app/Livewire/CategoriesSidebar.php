<?php

namespace App\Livewire;

use Livewire\Component;

class CategoriesSidebar extends Component
{
    public $categories = [
        ['id' => 'cat1', 'label' => 'Book Reviews', 'count' => 18, 'items' => ['Self Help', 'Psychology', 'Drama', 'Science', 'Fiction', 'Technology']],
        ['id' => 'cat2', 'label' => 'Movie Reviews', 'count' => 12, 'items' => ['Drama', 'Comedy', 'Fiction', 'Romantic Thriller', 'Science Fiction']],
        ['id' => 'cat3', 'label' => 'My Experiences', 'count' => 2, 'items' => ['Self Help']],
        ['id' => 'cat4', 'label' => 'Interesting Facts', 'count' => 2, 'items' => ['Animals']],
        ['id' => 'cat5', 'label' => 'TV Series Reviews', 'count' => 8, 'items' => ['Romance']],
        ['id' => 'cat6', 'label' => 'Book Experts', 'count' => 12, 'items' => ['Self Help', 'Non-fiction', 'Yoga', 'Drama']],
    ];

    public function render()
    {
        return view('livewire.categories-sidebar');
    }
}
