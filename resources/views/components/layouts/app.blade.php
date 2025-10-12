<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sammy's MindChirps</title>

  {{-- Google Font --}}
  <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

  {{-- Vite & FontAwesome --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  @livewireStyles
</head>

<body class="bg-cover bg-center bg-fixed text-gray-900" style="background-image: url('{{ asset('images/bg.jpg') }}');">

  {{-- Navbar --}}
  @include('components.layouts.navbar')

  {{-- === Main Page Wrapper === --}}
  <div class="flex justify-start w-full">

<div class="max-w-[1200px] w-full flex flex-col lg:flex-row gap-6 px-4 py-8 lg:translate-x-[30%]">

      {{-- Main Content (Left Section) --}}
      <main class="w-full lg:w-[70%] order-1 space-y-6">
        @yield('content')
      </main>

      {{-- Sidebar (Right Section) --}}
      <aside class="w-full lg:w-[30%] order-2 space-y-6 lg:sticky lg:top-8">
        @include('components.layouts.sidebar')
      </aside>

    </div>
  </div>

  {{-- Footer --}}
  @include('components.layouts.footer')

  @livewireScripts
</body>
</html>
