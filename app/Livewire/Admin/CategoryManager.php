<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;

class CategoryManager extends Component
{
    public $name;
    public $categories;

    public function mount()
    {
        $this->loadCategories();
    }

    public function loadCategories()
    {
        $this->categories = Category::orderBy('name')->get();
    }

    public function addCategory()
    {
        $this->validate([
            'name' => 'required|string|max:255|unique:categories,name',
        ]);

        Category::create(['name' => $this->name]);

        $this->name = '';
        $this->loadCategories();
        session()->flash('success', 'Category added successfully.');
    }

    public function deleteCategory($id)
    {
        Category::findOrFail($id)->delete();
        $this->loadCategories();
        session()->flash('success', 'Category deleted.');
    }

    public function render()
    {
        return view('livewire.admin.category-manager');
    }
}
