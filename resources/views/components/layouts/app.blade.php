<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sammy's MindChirps</title>

  {{-- Google Font --}}
  <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

  {{-- Font Awesome --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

  {{-- Alpine.js --}}
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

  {{-- Vite --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  @livewireStyles
</head>

<body x-data="{ sidebarOpen: false }" class="bg-cover bg-center bg-fixed text-gray-900" style="background-image: url('{{ asset('images/bg.jpg') }}');">

  {{-- Navbar --}}
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
    <button x-on:click="sidebarOpen = true" class="md:hidden">
      <i class="fa-solid fa-bars text-2xl"></i>
    </button>
  </nav>

  {{-- === Main Page Wrapper === --}}
  <div class="flex justify-end w-full">
    <div class="w-full max-w-[1200px] flex flex-col lg:flex-row gap-6 px-4 py-8 lg:pr-6">

      {{-- Main Content --}}
      <main class="w-full lg:w-[75%] space-y-6 lg:mr-2">
        @yield('content')
      </main>

      {{-- Mobile Sidebar Overlay (Only Categories) --}}
      <div x-show="sidebarOpen" x-transition class="fixed inset-0 z-50 bg-white w-64 h-full shadow-lg md:hidden overflow-y-auto">
        <div class="flex justify-between items-center p-4 border-b">
          <span class="text-lg font-bold text-[#1e525b]">Categories</span>
          <button x-on:click="sidebarOpen = false">
            <i class="fa-solid fa-xmark text-2xl text-gray-600"></i>
          </button>
        </div>
        <div class="p-4">
          <livewire:sidebar-categories />
        </div>
      </div>

      {{-- Desktop Sidebar (Full Sidebar) --}}
      @if (!isset($noSidebar) || !$noSidebar)
        <aside class="w-full lg:w-[30%] xl:w-[25%] space-y-6 lg:relative lg:top-0 lg:self-start hidden md:block">
          @include('components.layouts.sidebar')
        </aside>
      @endif

    </div>
  </div>

  {{-- Footer --}}
  @include('components.layouts.footer')

  @livewireScripts
</body>
</html>
