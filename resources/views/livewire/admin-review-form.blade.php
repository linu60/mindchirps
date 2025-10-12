<form wire:submit.prevent="submit" class="space-y-4">
  <input type="text" wire:model="title" placeholder="Review Title" class="w-full border p-2 rounded" />
  <textarea wire:model="excerpt" placeholder="Excerpt" class="w-full border p-2 rounded"></textarea>
  <input type="text" wire:model="link" placeholder="Blog Link (e.g. /blog/hooked)" class="w-full border p-2 rounded" />
  <input type="text" wire:model="image" placeholder="Image Path (e.g. images/hook.jpg)" class="w-full border p-2 rounded" />
  <select wire:model="category" class="w-full border p-2 rounded">
    <option value="Book Reviews">Book Reviews</option>
    {{-- Add more categories if needed --}}
  </select>
  <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save Review</button>
</form>
