@extends('components.layouts.app')

@php
    use Illuminate\Support\Str;
@endphp

@section('content')
<div class="max-w-6xl mx-auto">
    <div class="space-y-6">

        {{-- Optional: Sidebar --}}
        

        {{-- Review Cards --}}
        @foreach($reviews as $review)
        <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-200 w-full lg:max-w-[95%] xl:max-w-[90%] 2xl:max-w-[85%] ml-auto">

            <!-- Header -->
            <div class="bg-[#1e525b] px-6 py-4">
                <h2 class="text-sky-200 text-2xl font-bold">
                    {{ $review->title }}
                </h2>
            </div>

            <!-- Main Content -->
            <div class="flex flex-col md:flex-row px-6 py-4 gap-6 items-center md:items-start text-center md:text-left">
                <!-- Image -->
                <div class="flex-shrink-0 mx-auto md:mx-0">
                    <img
                        src="{{ asset('storage/' . $review->image) }}"
                        alt="Review Image"
                        class="w-32 h-44 md:w-24 md:h-32 object-cover rounded mx-auto"
                    >
                </div>

                <!-- Excerpt -->
                <div class="flex-grow">
                    <p class="text-gray-700 text-md leading-relaxed text-justify mt-3 md:mt-0">
                        {{ Str::limit($review->excerpt, 400) }}
                    </p>

                    <a href="{{ route('reviews.show', $review->id) }}" class="text-black-400 font-bold text-sm hover:underline">
                        ..[Continue Reading]..
                    </a>
                </div>
            </div>

            <!-- Footer -->
            <div class="px-3 py-2 bg-gray-100 flex justify-end items-center border-t border-gray-200 gap-2">
                @if ($review->type === 'book')
                    <a href="{{ route('reviews.show', $review->id) }}" class="bg-gray-500 text-white text-sm px-2 py-1 rounded hover:bg-gray-600">
                        Book Review
                    </a>
                @elseif ($review->type === 'movie')
                    <a href="{{ route('reviews.show', $review->id) }}" class="bg-gray-500 text-white text-sm px-2 py-1 rounded hover:bg-gray-600">
                        Movie Review
                    </a>
                @elseif ($review->type === 'series')
                    <a href="{{ route('reviews.show', $review->id) }}" class="bg-gray-500 text-white text-sm px-2 py-1 rounded hover:bg-gray-600">
                        Series Review
                    </a>
                @else
                    <a href="{{ route('reviews.show', $review->id) }}" class="bg-gray-500 text-white text-sm px-4 py-2 rounded hover:bg-gray-600">
                        {{ $review->category }}
                    </a>
                @endif
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
