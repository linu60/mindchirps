@extends('components.layouts.app')

@section('content')
<div class="max-w-6xl mx-auto mt-12">
    <div class="flex justify-between items-center mb-10">
        <h2 class="text-3xl font-extrabold text-gray-800 tracking-tight">All Reviews</h2>
        <a href="{{ route('reviews.create') }}" class="inline-flex items-center gap-2 bg-gradient-to-r from-green-500 to-green-700 text-white px-6 py-2 rounded-lg shadow hover:from-green-600 hover:to-green-800 transition">
            <span class="text-xl font-bold">+</span> Add Review
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        @forelse($reviews as $review)
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 hover:shadow-2xl transition overflow-hidden flex flex-col">
                <!-- Review Header -->
                <div class="bg-gradient-to-r from-[#1e525b] to-[#357a85] px-6 py-4 flex justify-between items-center">
                    <h2 class="text-white text-2xl font-semibold truncate">{{ $review->title }}</h2>
                    <span class="bg-white/20 text-white text-xs px-4 py-1 rounded-full font-semibold tracking-wide uppercase">{{ $review->category }}</span>
                </div>

                <!-- Review Body -->
                <div class="flex flex-col md:flex-row px-6 py-6 gap-6 items-start flex-1">
                    <div class="w-full md:w-32 h-48 flex-shrink-0 mx-auto md:mx-0">
                        <img src="{{ asset('storage/' . $review->image) }}" alt="Book Cover" class="w-full h-full object-cover rounded-lg border border-gray-200 shadow">
                    </div>
                    <div class="flex-grow flex flex-col justify-between">
                        <p class="text-gray-700 text-base leading-relaxed text-justify mb-4 line-clamp-5">
                            {{ $review->excerpt }}
                        </p>
                        <div class="flex gap-3 mt-auto">
                            <a href="{{ route('reviews.edit', $review->id) }}" class="inline-flex items-center gap-1 bg-yellow-400 text-white text-xs px-4 py-2 rounded-lg shadow hover:bg-yellow-500 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536M9 13l6-6m2 2l-6 6m-2 2h6a2 2 0 002-2v-6a2 2 0 00-2-2h-6a2 2 0 00-2 2v6a2 2 0 002 2z" /></svg>
                                Edit
                            </a>
                            <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this review?')" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-flex items-center gap-1 bg-red-600 text-white text-xs px-4 py-2 rounded-lg shadow hover:bg-red-700 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-2 text-center text-gray-500 py-12 text-lg">
                No reviews found. Click <a href="{{ route('reviews.create') }}" class="text-green-600 underline">here</a> to add one!
            </div>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="mt-10 flex justify-center">
        {{ $reviews->links() }}
    </div>
</div>
@endsection
