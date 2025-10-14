@php
    $noSidebar = true;
@endphp

@extends('components.layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 bg-[#1e525b] rounded-lg shadow-lg">

  {{-- Page Header --}}
  <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 gap-4">
    <h2 class="text-3xl md:text-4xl font-extrabold text-sky-200 tracking-tight border-l-4 border-[#1e525b] pl-3">
      {{ $category ?? 'All Reviews' }}{{ isset($subcategory) ? ' – ' . $subcategory : '' }}
    </h2>

    <a href="{{ route('reviews.create') }}"
       class="inline-flex items-center gap-2 bg-[#ffffff] text-black px-6 py-2 rounded-lg shadow hover:bg-[#174046] transition">
      <span class="text-xl font-bold ">+</span> Add Review
    </a>
  </div>
{{-- Subcategory Filter Buttons --}}

  {{-- Review Cards Grid --}}
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach($reviews as $review)
      <div class="bg-white border border-gray-200 rounded-xl shadow-md overflow-hidden hover:shadow-lg transition transform hover:-translate-y-1">

        {{-- Image --}}
        <div class="h-56 w-full overflow-hidden">
          <img src="{{ asset('storage/' . $review->image) }}"
               alt="{{ $review->title }}"
               class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
        </div>

        {{-- Content --}}
        <div class="p-6 space-y-3">
          <h3 class="text-xl font-semibold text-gray-900">
            {{ $review->title }}
          </h3>

          <p class="text-gray-700 text-sm leading-relaxed text-justify">
            {{ \Illuminate\Support\Str::limit($review->excerpt, 180) }}
          </p>

          <div class="flex justify-end items-center pt-3">
            <span class="bg-[#1e525b]/10 text-[#1e525b] text-xs px-3 py-1 rounded-full capitalize">
              {{ $review->type }}
            </span>
          </div>
        </div>

        {{-- Footer (Buttons) --}}
        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex justify-between items-center">
          <a href="{{ route('reviews.edit', $review->id) }}"
             class="text-sm font-medium text-white bg-blue-600 px-4 py-1.5 rounded-md hover:bg-blue-700 transition">
             Edit
          </a>

          <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this review?');">
            @csrf
            @method('DELETE')
            <button type="submit"
                    class="text-sm font-medium text-white bg-red-600 px-4 py-1.5 rounded-md hover:bg-red-700 transition">
              Delete
            </button>
          </form>
        </div>

      </div>
    @endforeach
  </div>

  {{-- Pagination --}}
  <div class="mt-10 flex justify-center">
    {{ $reviews->links() }}
  </div>

</div>
@endsection
