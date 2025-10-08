<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sammy’s MindChirps</title>

  <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  @livewireStyles
</head>

<body class="bg-cover bg-center bg-fixed text-gray-900" style="background-image: url('{{ asset('images/bg.jpg') }}');">

  @include('components.layouts.navbar')

  <div class="w-full flex justify-end">
    <div class="px-4 py-8 flex flex-col lg:flex-row-reverse lg:gap-6">
      <aside class="w-full lg:w-[280px] space-y-6">
        @include('components.layouts.sidebar')
      </aside>

      <div class="w-full lg:w-[800px] space-y-8">
        {{ $slot }}
      </div>
    </div>
  </div>

  @include('components.layouts.footer')
  @livewireScripts
</body>
</html>
