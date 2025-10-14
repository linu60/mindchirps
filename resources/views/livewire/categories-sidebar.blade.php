@php
    use Illuminate\Support\Str;
@endphp

<section class="bg-white rounded-xl shadow-md p-6">
  <h2 class="text-xl font-bold text-[#c2f2fc] bg-[#1e525b] px-4 py-2 rounded-t-xl -mt-6 -mx-6 mb-4">
    Categories
  </h2>

  @foreach($categories as $cat)
    <div class="mb-4">
      <input type="checkbox" id="{{ $cat['id'] }}" class="hidden peer" />

      <label for="{{ $cat['id'] }}" class="flex justify-between items-center cursor-pointer text-gray-900 font-semibold hover:underline">
        <span class="flex items-center gap-2">
          {{ $cat['label'] }}
        </span>
        <span class="bg-gray-500 text-white text-xs font-bold px-2 rounded">{{ $cat['count'] }}</span>
      </label>

      <ul class="ml-6 mt-2 text-sm font-medium text-gray-600 space-y-1 peer-checked:block hidden">
        @foreach($cat['items'] as $item)
          <li>
            <button
              wire:click="$emit('filterBySidebar', '{{ $item }}')"
              class="text-blue-600 hover:underline focus:outline-none"
            >
              {{ $item }}
            </button>
          </li>
        @endforeach
      </ul>
    </div>
  @endforeach
</section>
