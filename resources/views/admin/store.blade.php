@extends('components.layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-10 bg-white p-8 rounded shadow">
    <h2 class="text-2xl font-bold mb-6">Add New Review</h2>
    <form action="{{ route('reviews.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="block font-semibold mb-1">Title</label>
            <input type="text" name="title" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Category</label>
            <input type="text" name="category" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Excerpt</label>
            <textarea name="excerpt" class="w-full border px-3 py-2 rounded" rows="3" required></textarea>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Image</label>
            <input type="file" name="image" class="w-full border px-3 py-2 rounded" required>
        </div>

        <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">
            Save Review
        </button>
    </form>
</div>
@endsection
