<div class="bg-white rounded-xl shadow-md overflow-hidden">
    <!-- Header -->
    <div class="bg-[#1e525b] text-sky-100 text-lg font-semibold px-4 py-2">
        Newsletter
    </div>

    <!-- Body -->
    <div class="p-4 space-y-3 bg-gray-50">
        @if (session()->has('success'))
            <div class="text-green-600 text-sm font-medium">
                {{ session('success') }}
            </div>
        @endif

        <form wire:submit.prevent="subscribe" class="space-y-3">
            <input
                type="email"
                wire:model.lazy="email"
                placeholder="Email Address"
                class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#1e525b]"
            >

            @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror

<button
    type="submit"
    class="w-auto bg-blue-600 text-white py-1 px-2 text-xs rounded hover:bg-blue-700 transition mx-auto block"
>
    Subscribe
</button>

        </form>
    </div>
</div>
