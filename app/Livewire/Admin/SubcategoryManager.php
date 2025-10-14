<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Subcategory;

class SubcategoryManager extends Component
{
    public $name;
    public $category_id;
    public $categories;       // ✅ This is the missing line
    public $subcategories;

    public function mount()
    {
        $this->loadData();
    }

    public function loadData()
    {
        $this->categories = Category::orderBy('name')->get();
        $this->subcategories = Subcategory::with('category')->orderBy('name')->get();
    }

    public function addSubcategory()
    {
        $this->validate([
            'name' => 'required|string|max:255|unique:subcategories,name',
            'category_id' => 'required|exists:categories,id',
        ]);

        Subcategory::create([
            'name' => $this->name,
            'category_id' => $this->category_id,
        ]);

        $this->name = '';
        $this->category_id = '';
        $this->loadData();
        session()->flash('success', 'Subcategory added successfully.');
    }

    public function deleteSubcategory($id)
    {
        Subcategory::findOrFail($id)->delete();
        $this->loadData();
        session()->flash('success', 'Subcategory deleted.');
    }

    public function render()
    {
        return view('livewire.admin.subcategory-manager', [
            'categories' => $this->categories,
            'subcategories' => $this->subcategories,
        ]);
    }
}
