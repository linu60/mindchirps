<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Review;

class ReviewList extends Component
{
    public $reviews = [];
    public $subcategory = null;

    protected $listeners = ['filterReviewsBySubcategory'];

    public function mount()
    {
        $this->reviews = Review::latest()->get();
    }

    public function filterReviewsBySubcategory($subcategory)
    {
        $this->subcategory = $subcategory;
        $this->reviews = Review::where('subcategory', $subcategory)->latest()->get();
    }

    public function render()
    {
        return view('livewire.review-list');
    }
}
