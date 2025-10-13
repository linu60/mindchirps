@extends('components.layouts.app')

@section('content')
<div class="max-w-3xl mx-auto  bg-white rounded-2xl shadow-lg overflow-hidden">
    <!-- Header Bar -->
    <div class="bg-[#1e525b] px-6 py-4">
        <h2 class="text-sky-100 text-2xl font-extrabold">
            {{ $review->title }}
        </h2>
    </div>

    <!-- Main Content -->
    <div class="flex flex-col items-center bg-gray-50 px-6 py-10">
        <!-- Book Image -->
        <div class="bg-white p-6 rounded shadow-md">
            <img
                src="{{ asset('storage/' . $review->image) }}"
                alt="Book Cover"
                class="w-60 h-80 object-cover rounded shadow-lg"
            >
        </div>

        <!-- Text Section -->
      <div class="mt-8 text-center w-full">
    <h3 class="text-xl font-semibold text-[#1e525b] mb-4">
        {{ $review->category }}
    </h3>
    <p class="text-[16px] leading-[24px] text-justify text-[#212529] font-sans">
        {!! nl2br(e($review->excerpt)) !!}
    </p>
</div>
    </div>
</div>
@endsection
