<section class="bg-white rounded-xl shadow-md p-6">
  <h2 class="text-xl font-bold text-[#c2f2fc] bg-[#1e525b] px-4 py-2 rounded-t-xl -mt-6 -mx-6 mb-4">
    Categories
  </h2>

  @foreach($categories as $category)
    <div class="mb-4">
      <input type="checkbox" id="cat-{{ $category->id }}" class="hidden peer" />

      <label for="cat-{{ $category->id }}" class="flex justify-between items-center cursor-pointer text-gray-900 font-semibold hover:underline">
        <span class="flex items-center gap-2">
          {{ $category->name }}
        </span>
        <span class="bg-gray-500 text-white text-xs font-bold px-2 rounded">
          {{ $category->reviews->count() }}
        </span>
      </label>

      <ul class="ml-6 mt-2 text-sm font-medium text-gray-600 space-y-1 peer-checked:block hidden">
       @foreach($category->subcategories as $subcategory)
  @php
    $isActive = isset($subcategorySlug) && $subcategorySlug === Str::slug($subcategory->name);
  @endphp
  <li>
    <a href="{{ url(Str::slug($category->name) . '/' . Str::slug($subcategory->name)) }}"
       class="hover:text-[#1e525b] hover:underline transition {{ $isActive ? 'text-[#1e525b] font-bold underline' : '' }}">
      {{ $subcategory->name }}
    </a>
  </li>
@endforeach
      </ul>
    </div>
  @endforeach
</section>
