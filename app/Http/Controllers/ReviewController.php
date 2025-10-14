<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Review;
use App\Models\Category;
use App\Models\Subcategory;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index(Request $request, $categorySlug = null, $subcategorySlug = null)
{
    $categories = Category::with('subcategories')->get();
    $reviews = Review::query();
    $category = null;
    $subcategory = null;

    if ($categorySlug && $subcategorySlug) {
        $categoryName = Str::title(str_replace('-', ' ', $categorySlug));
        $subcategoryName = Str::title(str_replace('-', ' ', $subcategorySlug));

        $subcategory = Subcategory::with('category')
            ->where('name', $subcategoryName)
            ->first();

        if ($subcategory) {
            $category = $subcategory->category->name ?? $categoryName;
            $reviews->where('subcategory_id', $subcategory->id);
        }
    }

    $reviews = $reviews->latest()->paginate(12);

    return view('admin.index', compact('reviews', 'categories', 'category', 'subcategory', 'categorySlug', 'subcategorySlug'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $categories = Category::all();
    $subcategories = Subcategory::all();

    return view('admin.create', compact('categories', 'subcategories'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg|max:2048',
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'required|exists:subcategories,id',
            'excerpt' => [
                'required',
                'string',
                function ($attribute, $value, $fail) {
                    if (str_word_count($value) > 1200) {
                        $fail('The '.$attribute.' may not be greater than 1200 words.');
                    }
                },
            ],
        ]);

        $imagePath = $request->file('image')->store('reviews', 'public');

        Review::create([
            'title' => $validated['title'],
            'image' => $imagePath,
            'excerpt' => $validated['excerpt'],
            'category_id' => $validated['category_id'],
            'subcategory_id' => $validated['subcategory_id'],
        ]);

        return redirect()->route('reviews.index')->with('success', 'Review created!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $review = Review::findOrFail($id);
        $categories = Category::with('subcategories')->get();
        return view('admin.edit', compact('review', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg|max:2048',
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'required|exists:subcategories,id',
            'excerpt' => [
                'required',
                'string',
                function ($attribute, $value, $fail) {
                    if (str_word_count($value) > 1200) {
                        $fail('The '.$attribute.' may not be greater than 1200 words.');
                    }
                },
            ],
        ]);

        $review = Review::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($review->image && Storage::disk('public')->exists($review->image)) {
                Storage::disk('public')->delete($review->image);
            }
            $imagePath = $request->file('image')->store('reviews', 'public');
            $review->image = $imagePath;
        }

        $review->update([
            'title' => $validated['title'],
            'excerpt' => $validated['excerpt'],
            'category_id' => $validated['category_id'],
            'subcategory_id' => $validated['subcategory_id'],
            'image' => $review->image,
        ]);

        return redirect()->route('reviews.index')->with('success', 'Review updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $review = Review::findOrFail($id);

        if ($review->image && Storage::disk('public')->exists($review->image)) {
            Storage::disk('public')->delete($review->image);
        }

        $review->delete();

        return redirect()->route('reviews.index')->with('success', 'Review deleted!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $review = Review::findOrFail($id);
        return view('admin.show', compact('review'));
    }

    /**
     * Filter reviews by category and subcategory.
     */
public function filter($categorySlug, $subcategorySlug)
{
    $categoryName = Str::title(str_replace('-', ' ', $categorySlug));
    $subcategoryName = Str::title(str_replace('-', ' ', $subcategorySlug));

    $subcategory = Subcategory::with('category')
        ->where('name', $subcategoryName)
        ->firstOrFail();

    $reviews = Review::where('subcategory_id', $subcategory->id)
        ->latest()
        ->paginate(12);

    $category = $subcategory->category->name ?? $categoryName;
    $categories = \App\Models\Category::with('subcategories')->get();

    return view('admin.index', compact('reviews', 'category', 'subcategory', 'categories'));
}

}
