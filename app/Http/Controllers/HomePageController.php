<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Routing\Controller;

class HomePageController extends Controller
{
    public function index()
    {
        // Fetch latest reviews
        $reviews = Review::latest()->paginate(5);

        // Fetch categories and subcategories
        $categories = Category::all();
        $subcategories = Subcategory::all();

        // Pass all to the view
        return view('home-page', compact('reviews', 'categories', 'subcategories'));
    }
}
