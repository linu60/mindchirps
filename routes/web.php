<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Models\Review;

// Home page (Blade view, not Livewire)
Route::get('/', function () {
    $reviews = Review::latest()->paginate(6); // ✅ This enables pagination
    return view('home-page', compact('reviews'));
});


// Admin reviews index
Route::get('/admin/reviews', [ReviewController::class, 'index'])->name('admin.reviews.index');

// Review CRUD routes (all views are under resources/views/admin/)
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');
Route::get('/reviews/create', [ReviewController::class, 'create'])->name('reviews.create');
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::get('/reviews/{review}/edit', [ReviewController::class, 'edit'])->name('reviews.edit');
Route::put('/reviews/{review}', [ReviewController::class, 'update'])->name('reviews.update');
Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])->name('reviews.destroy');
Route::get('/reviews/{review}', [ReviewController::class, 'show'])->name('reviews.show');
