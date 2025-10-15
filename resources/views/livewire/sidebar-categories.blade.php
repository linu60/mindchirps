<section class="bg-white rounded-xl shadow-md p-6">
  <h2 class="text-xl font-bold text-[#c2f2fc] bg-[#1e525b] px-4 py-2 rounded-t-xl -mt-6 -mx-6 mb-4">
    Categories
  </h2>

  @foreach($categories as $category)
    @php
      $reviewCount = $category->subcategories->sum(fn($sub) => $sub->reviews->count());
    @endphp

    <div x-data="{ open: false }" class="mb-4">
      <!-- Toggle Button -->
      <button @click="open = !open" class="w-full text-left cursor-pointer text-gray-600 font-bold hover:underline">
        <span class="flex items-center gap-2">
          <i :class="open ? 'fa-rotate-90' : ''" class="fa-solid fa-play text-gray-500 transition-transform"></i>
          {{ $category->name }}
          <span class="bg-gray-500 text-white text-xs font-bold px-2 rounded">
            {{ $reviewCount }}
          </span>
        </span>
      </button>

      <!-- Subcategories -->
      <ul x-show="open" x-transition class="ml-6 mt-2 text-sm font-bold text-gray-600 space-y-1">
        @foreach($category->subcategories as $subcategory)
          @php
            $isActive = isset($subcategorySlug) && $subcategorySlug === $subcategory->slug;
          @endphp
          <li>
            <a href="{{ url(Str::slug($category->name) . '/' . $subcategory->slug) }}"
               class="flex items-center {{ $isActive ? 'text-[#1e525b] underline' : '' }}">
              <i class="fa-solid fa-check text-gray-500 mr-2"></i>
              <span class="flex items-center gap-1">
                {{ $subcategory->name }}
                <span class="bg-gray-500 text-white text-xs font-bold px-2 rounded">
                  {{ $subcategory->reviews->count() }}
                </span>
              </span>
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  @endforeach
</section>
