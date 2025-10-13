<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Review;

class ReviewList extends Component
{
    public $reviews = [];
    public $category = null;
    public $subcategory = null;

    protected $listeners = ['filterReviews'];

    public function mount()
    {
        $this->reviews = Review::latest()->take(10)->get();
    }

    public function filterReviews($category, $subcategory)
    {
        $this->category = $category;
        $this->subcategory = $subcategory;

        $this->reviews = Review::where('category', 'like', "%{$category}%")
                               ->where('subcategory', 'like', "%{$subcategory}%")
                               ->get();
    }

    public function render()
    {
        return view('livewire.review-list');
    }
}
