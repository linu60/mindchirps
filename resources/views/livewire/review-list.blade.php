<div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
    @forelse($reviews as $review)
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 hover:shadow-2xl transition overflow-hidden flex flex-col">
            <div class="bg-gradient-to-r from-[#1e525b] to-[#357a85] px-6 py-4 flex justify-between items-center">
                <h2 class="text-white text-2xl font-semibold truncate">{{ $review->title }}</h2>
                <span class="bg-white/20 text-white text-xs px-4 py-1 rounded-full font-semibold tracking-wide uppercase">{{ $review->category }}</span>
            </div>
            <div class="flex flex-col md:flex-row px-6 py-6 gap-6 items-start flex-1">
                <div class="w-full md:w-32 h-48 flex-shrink-0 mx-auto md:mx-0">
                    <img src="{{ asset('storage/' . $review->image) }}" alt="Book Cover" class="w-full h-full object-cover rounded-lg border border-gray-200 shadow">
                </div>
                <div class="flex-grow flex flex-col justify-between">
                    <p class="text-gray-700 text-base leading-relaxed text-justify mb-4 line-clamp-5">
                        {{ $review->excerpt }}
                    </p>
                    <div class="flex gap-3 mt-auto">
                        <a href="{{ route('reviews.edit', $review->id) }}" class="inline-flex items-center gap-1 bg-yellow-400 text-white text-xs px-4 py-2 rounded-lg shadow hover:bg-yellow-500 transition">Edit</a>
                        <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" onsubmit="return confirm('Are you sure?')" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-flex items-center gap-1 bg-red-600 text-white text-xs px-4 py-2 rounded-lg shadow hover:bg-red-700 transition">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-span-2 text-center py-16">
            <p class="text-gray-500 text-lg mb-4">No reviews found under this category.</p>
        </div>
    @endforelse
</div>
