<div class="space-y-6">

  @if (session()->has('success'))
    <div class="bg-green-100 text-green-800 px-4 py-2 rounded">
      {{ session('success') }}
    </div>
  @endif

  <h2 class="text-xl font-bold text-white">Manage Subcategories</h2>

  <form wire:submit.prevent="addSubcategory" class="space-y-4">
    <div>
      <label class="block text-sm font-medium text-white mb-1">Select Category</label>
      <select wire:model="category_id"
              class="w-full px-4 py-2 border border-gray-300 rounded bg-white text-gray-800">
        <option value="">Choose a category</option>
        @foreach($categories as $category)
          <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
    </div>

    <div>
      <label class="block text-sm font-medium text-white mb-1">Subcategory Name</label>
      <input type="text" wire:model.defer="name" placeholder="Enter subcategory name"
             class="w-full px-4 py-2 border border-gray-300 rounded bg-white text-gray-800">
    </div>

    <button type="submit"
            class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
      Add Subcategory
    </button>
  </form>

  <ul class="divide-y divide-gray-300 mt-6">
    @foreach($subcategories as $sub)
      <li class="flex justify-between items-center py-2">
        <span>
          {{ $sub->name }}
          <span class="text-sm text-gray-500">({{ $sub->category->name }})</span>
        </span>
        <button wire:click="deleteSubcategory({{ $sub->id }})"
                class="text-sm text-red-600 hover:underline">Delete</button>
      </li>
    @endforeach
  </ul>

</div>
