<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Review;

class ReviewList extends Component
{
    public $reviews = [];
    public $subcategory = null;

    protected $listeners = ['filterBySidebar'];

    public function mount()
    {
        $this->reviews = Review::latest()->get();
    }


public function filterBySidebar($subcategoryName)
{
    $subcategory = Subcategory::where('name', $subcategoryName)->first();

    if ($subcategory) {
        $this->subcategory = $subcategory->name;
        $this->reviews = Review::where('subcategory_id', $subcategory->id)->latest()->get();
    }
}
    public function render()
    {
        return view('livewire.review-list');
    }
}
