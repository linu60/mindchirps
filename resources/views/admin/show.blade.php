@extends('components.layouts.app')

@section('content')
<div class="max-w-3xl mx-auto mt-10 bg-white p-8 rounded shadow">
    <div class="bg-[#1e525b] px-6 py-4 rounded-t">
        <h2 class="text-white text-2xl font-bold">{{ $review->title }}</h2>
    </div>
    <div class="flex flex-col items-center py-6">
        <img src="{{ asset('storage/' . $review->image) }}" alt="Book Cover" class="w-64 h-96 object-cover rounded mb-6 shadow">
        <div class="w-full">
            <h3 class="text-xl font-semibold mb-4">{{ $review->category }}</h3>
            <p class="text-gray-800 text-base leading-relaxed text-justify whitespace-pre-line">
                {{ $review->excerpt }}
            </p>
        </div>
    </div>
</div>
@endsection
