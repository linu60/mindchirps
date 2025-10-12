@extends('components.layouts.app')

@php
    use Illuminate\Support\Str;
@endphp

@section('content')
<div class="max-w-6xl mx-auto">
    <div class="space-y-6">
        @foreach($reviews as $review)
            <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-200">
                <div class="bg-[#1e525b] px-6 py-4">
                    <h2 class="text-white text-xl font-semibold">{{ $review->title }}</h2>
                </div>

                <div class="flex px-6 py-4 gap-6 items-start">
                    <div class="w-32 h-48 flex-shrink-0">
                        <img src="{{ asset('storage/' . $review->image) }}" alt="Book Cover" class="w-24 h-32 object-cover rounded">
                    </div>
                    <div class="flex-grow">
                        <p class="text-gray-700 text-sm leading-relaxed text-justify">
                            {{ Str::limit($review->excerpt, 400) }}
                        </p>

                        <a href="{{ route('reviews.show', $review->id) }}" class="text-black-800 font-bold text-sm">
                            ..[Continue Reading]..
                        </a>
                    </div>
                </div>

                <div class="px-3 py-2 bg-gray-100 flex justify-end items-center border-t border-gray-200">
                    <button class="bg-gray-500 text-white text-sm px-4 py-2 rounded hover:bg-gray-600">
                        {{ $review->category }}
                    </button>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Pagination Links --}}
 <div class="mt-6">
    {{ $reviews->links() }}
</div>

</div>
@endsection
