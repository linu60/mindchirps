<section class="bg-white rounded-xl shadow-md p-6">
  <h2 class="text-xl font-bold text-[#c2f2fc] bg-[#1e525b] px-4 py-2 rounded-t-xl -mt-6 -mx-6 mb-4">
    Tags
  </h2>
  <ul class="grid grid-cols-3 gap-2 text-blue-800 font-semibold text-sm">
    @foreach($tags as $tag)
      <li class="hover:underline cursor-pointer">{{ $tag }}</li>
    @endforeach
  </ul>
</section>
