<div class="space-y-6">

  @if (session()->has('success'))
    <div class="bg-green-100 text-green-800 px-4 py-2 rounded">
      {{ session('success') }}
    </div>
  @endif

  <h2 class="text-xl font-bold text-white">Manage Categories</h2>

  <form wire:submit.prevent="addCategory" class="flex gap-4 items-center">
    <input type="text" wire:model.defer="name" placeholder="New category name"
           class="px-4 py-2 rounded border border-gray-300 w-full">
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
      Add
    </button>
  </form>

  <ul class="divide-y divide-gray-300">
    @foreach($categories as $category)
      <li class="flex justify-between items-center py-2">
        <span>{{ $category->name }}</span>
        <button wire:click="deleteCategory({{ $category->id }})"
                class="text-sm text-red-600 hover:underline">Delete</button>
      </li>
    @endforeach
  </ul>

</div>
