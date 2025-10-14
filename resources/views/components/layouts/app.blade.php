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
{{-- === Main Page Wrapper === --}}
<div class="flex justify-end w-full">
  <div class="w-full max-w-[1200px] flex flex-col lg:flex-row gap-6 px-4 py-8 lg:pr-6">

    {{-- Main Content --}}
    <main class="w-full lg:w-[75%] space-y-6 lg:mr-2">
      @yield('content')
    </main>

    {{-- Sidebar --}}
      @if (!isset($noSidebar) || !$noSidebar)
        <aside class="w-full lg:w-[30%] xl:w-[25%] space-y-6 lg:relative lg:top-0 lg:self-start">
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
