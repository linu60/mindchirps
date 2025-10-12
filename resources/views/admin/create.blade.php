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
<div class="max-w-xl mx-auto mt-10">
    <div class="bg-white p-8 rounded shadow">
        <h2 class="text-2xl font-bold mb-6">Add New Review</h2>

        <form action="{{ route('reviews.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <input type="text" name="title" placeholder="Title" required class="w-full px-4 py-2 border rounded" />

            <input type="file" name="image" accept=".jpg,.jpeg" required class="w-full px-4 py-2 border rounded" />

            <select name="category" required class="w-full px-4 py-2 border rounded">
                <option value="">Select Category</option>
                <option value="Book">Book</option>
                <option value="Movie">Movie</option>
                <option value="TV Series">TV Series</option>
            </select>

            <textarea name="excerpt" rows="8" placeholder="Write your review (max 1200 words)" required class="w-full px-4 py-2 border rounded"></textarea>
            <div class="text-xs text-gray-500 mt-1">Maximum 1200 words allowed.</div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save Review</button>
        </form>
    </div>
</div>
@endsection
