<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Review;

class HomePage extends Component
{
    public function render()
    {
        $reviews = Review::paginate(6);
        return view('livewire.home-page', compact('reviews'));
    }
}
