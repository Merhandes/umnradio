<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>UMN Radio | Page Not Found</title>
  @vite('resources/css/app.css')
  <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      overflow: hidden; /* Prevent scrolling */
    }
  </style>
</head>
<body class="bg-gradient-to-br from-[#0D2984] via-[#1C41AF] to-[#3C67BF] w-full h-full relative text-white flex items-center justify-center">

  <!-- Light beam effect -->
  <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
    <div class="w-2 h-full bg-gradient-to-b from-white/30 to-transparent transform rotate-45 scale-y-150"></div>
  </div>

  <!-- Main content -->
  <div class="relative z-10 text-center px-4 max-w-xl mx-auto w-full">
    <!-- Mascots and 404 -->
    <div class="flex items-center justify-center gap-4 flex-nowrap mb-6">
      <img src="{{ asset('assets/04. ULTIMO HALO.webp') }}" alt="Ultimo" class="w-20 sm:w-28 h-auto" />
      <h1 class="text-5xl sm:text-7xl font-monoton animate-bounce text-white drop-shadow-lg">404</h1>
      <img src="{{ asset('assets/07. PAN PAN HALO.webp') }}" alt="Pan Pan" class="w-20 sm:w-28 h-auto" />
    </div>

    <!-- Page not found text -->
    <h2 class="text-xl sm:text-3xl font-bold font-saira mb-2">Page Not Found!</h2>

    <p class="text-sm font-poppins leading-6 text-white/80 mb-6">
      The page you are looking for might have been removed,<br>
      had its name changed, or is temporarily unavailable.
    </p>

    <!-- Back button -->
    <a href="/" class="inline-block px-6 py-2 bg-[#87CFE8] text-[#0D2984] rounded-full font-poppins font-semibold shadow-md hover:bg-[#6cc2df] transition">
      Back to Website
    </a>
  </div>
</body>
</html>
