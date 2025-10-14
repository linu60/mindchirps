<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
            // Convert slugs to title case for matching
            $categoryName = Str::title(str_replace('-', ' ', $categorySlug));
            $subcategoryName = Str::title(str_replace('-', ' ', $subcategorySlug));

            // Find subcategory and eager-load its category
            $subcategory = Subcategory::with('category')
                ->where('name', $subcategoryName)
                ->first();

            if ($subcategory) {
                $category = $subcategory->category->name ?? $categoryName;
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
