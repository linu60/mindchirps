<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Review;
use App\Models\Category;
use App\Models\Subcategory;

class HomeController extends Controller
{
    public function index($categorySlug = null, $subcategorySlug = null)
    {

        $categories = Category::with('subcategories')->get();
        $reviewsQuery = Review::query();
        $category = null;
        $subcategory = null;

        if ($categorySlug && $subcategorySlug) {
            $subcategory = Subcategory::with('category')
                ->where('slug', $subcategorySlug)
                ->first();

            // ✅ Place this inside the method, not outside
            

            if ($subcategory) {
                $category = $subcategory->category->name ?? null;
                $reviewsQuery->where('subcategory_id', $subcategory->id);
            }
        }

        $reviews = $reviewsQuery->latest()->paginate(12);

        return view('home.index', compact(
            'reviews',
            'categories',
            'category',
            'subcategory',
            'categorySlug',
            'subcategorySlug'
        ));
    }
}
