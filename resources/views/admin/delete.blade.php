@extends('components.layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-10 text-center">
    <h2 class="text-2xl font-bold mb-4 text-red-600">Delete Review</h2>
    <p class="mb-6 text-gray-700">Are you sure you want to permanently delete the review titled <strong>{{ $review->title }}</strong>?</p>

    <form action="{{ route('reviews.destroy', $review->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700">Yes, Delete</button>
        <a href="{{ route('reviews.index') }}" class="ml-4 text-blue-600 hover:underline">Cancel</a>
    </form>
</div>
@endsection
