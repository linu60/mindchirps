<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::latest()->paginate(6); // This returns a LengthAwarePaginator

        return view('admin.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg|max:2048',
            'category' => 'required|in:Book,Movie,TV Series',
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
            'image' => $imagePath, // Store only the relative path
            'category' => $validated['category'],
            'excerpt' => $validated['excerpt'],
        ]);

        return redirect()->route('reviews.index')->with('success', 'Review created!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $review = Review::findOrFail($id);
        return view('admin.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg|max:2048',
            'category' => 'required|in:Book,Movie,TV Series',
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
            // Optionally delete the old image
            if ($review->image && Storage::disk('public')->exists($review->image)) {
                Storage::disk('public')->delete($review->image);
            }
            $imagePath = $request->file('image')->store('reviews', 'public');
            $review->image = $imagePath;
        }

        $review->update([
            'title' => $validated['title'],
            'category' => $validated['category'],
            'excerpt' => $validated['excerpt'],
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

        // Optionally delete the image file
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
}
