@php
    $noSidebar = true;
@endphp

@extends('components.layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-12 px-4">
    <div class="bg-[#1e525b] shadow-xl rounded-2xl p-10 border border-gray-600">

        <h2 class="text-3xl font-extrabold text-teal-100 mb-6 text-center">
            Add a New Review
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

        <form action="{{ route('reviews.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            {{-- Title --}}
            <div>
                <label class="block text-sm font-semibold text-teal-100 mb-2">Title</label>
                <input type="text" name="title" placeholder="Enter review title"
                    class="w-full px-4 py-3 border border-gray-500 bg-[#2c6a74] text-white placeholder-gray-300 rounded-xl focus:ring-2 focus:ring-[#4fd1c5] focus:outline-none transition duration-200" required>
            </div>

            {{-- Image Upload --}}
            <div>
                <label class="block text-sm font-semibold text-teal-100 mb-2">Cover Image (.jpg, .jpeg)</label>
                <input type="file" name="image" accept=".jpg,.jpeg"
                    class="w-full text-sm file:mr-3 file:py-2 file:px-4 file:rounded-full file:border-0
                    file:bg-gradient-to-r file:from-[#38b2ac] file:to-[#319795]
                    file:text-white hover:file:opacity-90 cursor-pointer text-gray-200" required>
            </div>

            {{-- Category Dropdown --}}
            <div>
                <label for="category_id" class="block text-sm font-medium text-teal-100 mb-2">Category</label>
                <select name="category_id" id="category_id"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm bg-white text-gray-800" required>
                    <option value="">Select a category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            {{-- Subcategory Dropdown --}}
            <div>
                <label for="subcategory_id" class="block text-sm font-medium text-teal-100 mb-2">Subcategory</label>
                <select name="subcategory_id" id="subcategory_id"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm bg-white text-gray-800" required>
                    <option value="">Select a subcategory</option>
                    @foreach($subcategories as $subcategory)
                        <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                    @endforeach
                </select>
            </div>

            {{-- Review Text --}}
            <div>
                <label class="block text-sm font-semibold text-teal-100 mb-2">Review Content</label>
                <textarea name="excerpt" rows="8" maxlength="1200" placeholder="Write your review here..."
                    class="w-full px-4 py-3 border border-gray-500 bg-[#2c6a74] text-white placeholder-gray-300 rounded-xl focus:ring-2 focus:ring-[#4fd1c5] focus:outline-none transition duration-200 resize-none" required></textarea>
                <div class="text-xs text-teal-200 mt-1">Maximum 1200 words allowed.</div>
            </div>

            {{-- Submit Button --}}
            <div class="pt-4 text-center">
                <button type="submit"
                    class="w-full bg-gradient-to-r from-[#4fd1c5] to-[#2c7a7b] text-[#0f2c2e] font-semibold py-3 rounded-xl shadow-md hover:shadow-lg hover:scale-[1.02] transform transition duration-200">
                    Save Review
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
