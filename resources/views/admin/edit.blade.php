@extends('components.layouts.app')

@if ($errors->any())
    <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
        <ul class="list-disc pl-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@section('content')
<div class="max-w-3xl mx-auto mt-10">
    <div class="bg-white p-8 rounded shadow">
        <h2 class="text-2xl font-bold mb-6">Edit Review</h2>

        <form action="{{ route('reviews.update', $review->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label class="block font-semibold mb-1">Title</label>
                <input type="text" name="title" value="{{ old('title', $review->title) }}" class="w-full border rounded px-4 py-2" required>
            </div>

            <div>
                <label class="block font-semibold mb-1">Category</label>
                <select name="category" required class="w-full border rounded px-4 py-2">
                    <option value="">Select Category</option>
                    <option value="Book" {{ old('category', $review->category) == 'Book' ? 'selected' : '' }}>Book Review</option>
                    <option value="Movie" {{ old('category', $review->category) == 'Movie' ? 'selected' : '' }}>Movie Review</option>
                    <option value="TV Series" {{ old('category', $review->category) == 'TV Series' ? 'selected' : '' }}>TV Series Review</option>
                </select>
            </div>

            <div>
                <label class="block font-semibold mb-1">Excerpt</label>
                <textarea name="excerpt" rows="8" placeholder="Write your review (max 1200 words)" required class="w-full border rounded px-4 py-2">{{ old('excerpt', $review->excerpt) }}</textarea>
                <div class="text-xs text-gray-500 mt-1">Maximum 1200 words allowed.</div>
            </div>

            <div>
                <label class="block font-semibold mb-1">Image</label>
                <input type="file" name="image" accept=".jpg,.jpeg" class="w-full">
                @if ($review->image)
                    <img src="{{ asset('storage/' . $review->image) }}" alt="Current Image" class="mt-2 w-32 h-48 object-cover rounded">
                @endif
            </div>

            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Update Review</button>
        </form>
    </div>
</div>
@endsection
