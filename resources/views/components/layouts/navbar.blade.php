<nav class="bg-[#1e525b] text-white py-2 px-6 shadow flex justify-between items-center">
  <div class="flex items-center space-x-3">
    <!-- Logo -->
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-16 w-16 object-contain ml-0">

    <!-- Brand Name -->
    <span style="font-family: 'Satisfy', cursive;" class="text-3xl font-bold tracking-wide text-sky-200 mt-4 ml-0">
      Sammy’s MindChirps
    </span>
  </div>

  <!-- Hamburger (visible only on md and below) -->
  <button @click="sidebarOpen = true" class="md:hidden">
    <i class="fa-solid fa-bars text-2xl"></i>
  </button>
</nav>
