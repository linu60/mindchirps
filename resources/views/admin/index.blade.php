@php
    $noSidebar = true;
@endphp

@extends('components.layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 bg-[#1e525b] rounded-lg shadow-lg">

  {{-- Page Header --}}
  <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 gap-4">
    <h2 class="text-3xl md:text-4xl font-extrabold text-sky-200 tracking-tight border-l-4 border-[#1e525b] pl-3">
      {{ $category ?? 'All Reviews' }}
      @if(isset($subcategory) && is_object($subcategory))
        – {{ $subcategory->name }}
      @endif
    </h2>

    <a href="{{ route('reviews.create') }}"
       class="inline-flex items-center gap-2 bg-[#ffffff] text-black px-6 py-2 rounded-lg shadow hover:bg-[#174046] transition">
      <span class="text-xl font-bold">+</span> Add Review
    </a>
  </div>

  {{-- Dropdown Filter --}}
  <form method="GET" action="{{ route('reviews.index') }}" class="mb-10 flex flex-col md:flex-row gap-4 items-center justify-center">
    {{-- Category Dropdown --}}
    <div>
      <label for="category_id" class="block text-sm font-medium text-white mb-1">Category</label>
      <select name="category_id" id="category_id" onchange="this.form.submit()"
              class="px-4 py-2 rounded-md border border-gray-300 bg-white text-gray-800 shadow-sm w-64">
        <option value="">Select Category</option>
        @foreach($categories as $cat)
          <option value="{{ $cat->id }}" {{ request('category_id') == $cat->id ? 'selected' : '' }}>
            {{ $cat->name }}
          </option>
        @endforeach
      </select>
    </div>

    {{-- Subcategory Dropdown --}}
    <div>
      <label for="subcategory_id" class="block text-sm font-medium text-white mb-1">Subcategory</label>
      <select name="subcategory_id" id="subcategory_id" onchange="this.form.submit()"
              class="px-4 py-2 rounded-md border border-gray-300 bg-white text-gray-800 shadow-sm w-64">
        <option value="">Select Subcategory</option>
        @foreach($categories as $cat)
          @foreach($cat->subcategories as $sub)
            @if(request('category_id') == $cat->id)
              <option value="{{ $sub->id }}" {{ request('subcategory_id') == $sub->id ? 'selected' : '' }}>
                {{ $sub->name }}
              </option>
            @endif
          @endforeach
        @endforeach
      </select>
    </div>
  </form>

  {{-- Review Cards Grid --}}
  @if($reviews->count())
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
  @else
    <div class="text-center text-white mt-20">
      <h3 class="text-xl font-semibold">No reviews found for this selection.</h3>
      <p class="text-sm mt-2">Try choosing a different subcategory or add a new review.</p>
    </div>
  @endif

</div>
@endsection
