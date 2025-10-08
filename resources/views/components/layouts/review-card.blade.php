<div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-200">
  <div class="bg-[#1e525b] px-6 py-4">
    <h2 class="text-white text-xl font-semibold">{{ $review->title }}</h2>
  </div>

  <div class="flex px-6 py-4 gap-6 items-start">
    <div class="w-32 h-48 flex-shrink-0">
      <img src="{{ asset($review->image) }}" alt="Book Cover" class="w-full h-full object-cover rounded">
    </div>
    <div class="flex-grow">
      <p class="text-gray-700 text-base leading-relaxed text-justify">
        {{ $review->excerpt }}
      </p>
      <a href="{{ url($review->link) }}" class="text-primary font-semibold hover:underline mt-2 inline-block">[Continue Reading...]</a>
    </div>
  </div>

<div class="px-3 py-2 bg-gray-100 flex justify-end items-center border-t border-gray-200">
  <button class="bg-gray-500 text-white text-sm px-4 py-2 rounded hover:bg-gray-600">
    {{ $review->category ?? 'Book Reviews' }}
  </button>
</div>
</div>
