<aside class="w-full lg:w-[295px] space-y-2">

  {{-- Newsletter Section --}}
  <section class="bg-white rounded-xl shadow-md p-6 bg-[url('/images/bgg.png')] bg-cover bg-center">
    <h2 class="text-xl font-bold text-[#c2f2fc] bg-[#1e525b] px-4 py-2 rounded-t-xl -mt-6 -mx-6 mb-4">
      Newsletter
    </h2>
    <input
      type="email"
      placeholder="Email Address"
      class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 mb-4"
    >
    <button
      class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
      Subscribe
    </button>
  </section>

  {{-- About Section --}}
  <section class="bg-white rounded-xl shadow-md p-6">
    <h2 class="text-xl font-bold text-[#c2f2fc] bg-[#1e525b] px-4 py-2 rounded-t-xl -mt-6 -mx-6 mb-4">
      About MindChirps
    </h2>
    <p class="text-gray-700 text-sm leading-relaxed text-justify">
      Hello! Welcome to Sammy's MindChirps. I'm glad you are here. To me, the word LIFE is an acronym of Laboratory with Infinite Freedom to Experiment. It's more like a kaleidoscope offering amazing learning opportunities as we grow and explore various facets of life. So this blog is a platform where I share anything that I find interesting (with my two cents, of course :D). I assure that you will have some new learning when you exit the blog. And do share your feeback on the blog or anything you want me to write about in this blog by dropping an email to mindchirps@gmail.com
    </p>
  </section>

  {{-- Categories Section --}}
  <section class="bg-white rounded-xl shadow-md p-6">
    <h2 class="text-xl font-bold text-[#c2f2fc] bg-[#1e525b] px-4 py-2 rounded-t-xl -mt-6 -mx-6 mb-4">
      Categories 
    </h2>

    @foreach([
      ['id' => 'cat1', 'label' => 'Book Reviews', 'count' => 18, 'items' => ['Self Help', 'Psychology', 'Drama', 'Science', 'Fiction', 'Technology']],
      ['id' => 'cat2', 'label' => 'Movie Reviews', 'count' => 12, 'items' => ['Drama', 'Comedy', 'Fiction', 'Romantic Thriller', 'Science Fiction']],
      ['id' => 'cat3', 'label' => 'My Experiences', 'count' => 2, 'items' => ['Self Help']],
      ['id' => 'cat4', 'label' => 'Interesting Facts', 'count' => 2, 'items' => ['Animals']],
      ['id' => 'cat5', 'label' => 'TV Series Reviews', 'count' => 8, 'items' => ['Romance']],
      ['id' => 'cat6', 'label' => 'Book Experts', 'count' => 12, 'items' => ['Self Help', 'Non-fiction', 'Yoga', 'Drama']],
    ] as $cat)
      <div class="mb-4">
        <input type="checkbox" id="{{ $cat['id'] }}" class="hidden peer" />
        <label for="{{ $cat['id'] }}" class="flex justify-between items-center cursor-pointer text-gray-700 font-semibold hover:underline">
          <span class="flex items-center gap-2">
            <span class="text-gray-500">▶</span> {{ $cat['label'] }}
          </span>
          <span class="bg-gray-500 text-white text-xs font-bold px-2 py-0.5 rounded">{{ $cat['count'] }}</span>
        </label>
        <ul class="ml-6 mt-2 text-sm font-medium text-gray-600 space-y-1 hidden peer-checked:block">
          @foreach($cat['items'] as $item)
            <li>✔ {{ $item }}</li>
          @endforeach
        </ul>
      </div>
    @endforeach
  </section>

  {{-- Tags Section --}}
  <section class="bg-white rounded-xl shadow-md p-6">
    <h2 class="text-xl font-bold text-[#c2f2fc] bg-[#1e525b] px-4 py-2 rounded-t-xl -mt-6 -mx-6 mb-4">
      Tags
    </h2>
    <ul class="grid grid-cols-3 gap-2 text-blue-800 font-semibold text-sm">
      @foreach(['Book', 'Animals', 'Crime', 'Science', 'Yoga', 'Fiction', 'Thriller'] as $tag)
        <li class="hover:underline cursor-pointer">{{ $tag }}</li>
      @endforeach
    </ul>
  </section>

</aside>
