@php
    $noSidebar = true;
@endphp

@extends('components.layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-12 px-4">
    <div class="bg-[#1e525b] shadow-xl rounded-2xl p-10 border border-gray-600">

        <h2 class="text-3xl font-extrabold text-white mb-6 text-center">
            Edit Review
        </h2>

        {{-- Error Messages --}}
        @if ($errors->any())
            <div class="mb-6 p-4 bg-red-200/20 border border-red-300 text-red-100 rounded-lg shadow-sm">
                <ul class="list-disc pl-5 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('reviews.update', $review->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            {{-- Title --}}
            <div>
                <label class="block text-sm font-semibold text-gray-100 mb-2">Title</label>
                <input type="text" name="title" value="{{ old('title', $review->title) }}" placeholder="Enter review title"
                    class="w-full px-4 py-3 border border-gray-500 bg-[#2c6a74] text-white placeholder-gray-300 rounded-xl focus:ring-2 focus:ring-blue-300 focus:outline-none transition duration-200" required>
            </div>

            {{-- Category --}}
            <div>
                <label class="block text-sm font-semibold text-gray-100 mb-2">Category</label>
                <select name="category"
                    class="w-full px-4 py-3 border border-gray-500 bg-[#2c6a74] text-white rounded-xl focus:ring-2 focus:ring-blue-300 focus:outline-none transition duration-200" required>
                    <option value="" class="text-gray-400 bg-[#1e525b]">Select Category</option>
                    <option value="Book" {{ old('category', $review->category) == 'Book' ? 'selected' : '' }} class="text-gray-900">Book</option>
                    <option value="Movie" {{ old('category', $review->category) == 'Movie' ? 'selected' : '' }} class="text-gray-900">Movie</option>
                    <option value="TV Series" {{ old('category', $review->category) == 'TV Series' ? 'selected' : '' }} class="text-gray-900">TV Series</option>
                </select>
            </div>

            {{-- Subcategory --}}
            <div>
                <label class="block text-sm font-semibold text-gray-100 mb-2">Subcategory (optional)</label>
                <input type="text" name="subcategory" value="{{ old('subcategory', $review->subcategory) }}" placeholder="E.g., Sci-Fi, Romance, Drama"
                    class="w-full px-4 py-3 border border-gray-500 bg-[#2c6a74] text-white placeholder-gray-300 rounded-xl focus:ring-2 focus:ring-blue-300 focus:outline-none transition duration-200">
            </div>

            {{-- Review Content --}}
            <div>
                <label class="block text-sm font-semibold text-gray-100 mb-2">Review Content</label>
                <textarea name="excerpt" rows="8" maxlength="1200" placeholder="Write your review here..."
                    class="w-full px-4 py-3 border border-gray-500 bg-[#2c6a74] text-white placeholder-gray-300 rounded-xl focus:ring-2 focus:ring-blue-300 focus:outline-none transition duration-200 resize-none" required>{{ old('excerpt', $review->excerpt) }}</textarea>
                <div class="text-xs text-gray-300 mt-1">Maximum 1200 words allowed.</div>
            </div>

            {{-- Image Upload --}}
            <div>
                <label class="block text-sm font-semibold text-gray-100 mb-2">Cover Image (.jpg, .jpeg)</label>
                <input type="file" name="image" accept=".jpg,.jpeg"
                    class="w-full text-sm file:mr-3 file:py-2 file:px-4 file:rounded-full file:border-0 file:bg-gradient-to-r file:from-blue-500 file:to-indigo-500 file:text-white hover:file:opacity-90 cursor-pointer text-gray-200">

                @if ($review->image)
                    <div class="mt-4 flex justify-center">
                        <img src="{{ asset('storage/' . $review->image) }}" alt="Current Image" class="w-40 h-56 object-cover rounded-xl border border-gray-500 shadow-md">
                    </div>
                @endif
            </div>

            {{-- Submit Button --}}
            <div class="pt-4 text-center">
                <button type="submit"
                    class="w-full bg-gradient-to-r from-blue-500 to-indigo-500 text-white font-semibold py-3 rounded-xl shadow-md hover:shadow-lg hover:scale-[1.02] transform transition duration-200">
                    Update Review
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
