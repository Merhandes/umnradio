<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ULTIMACREWS</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}
    {{-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" /> --}}
    {{-- <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css"> --}}
    {{-- <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script> --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}
</head>

<body>
    <img src="{{ url('/images/backgroundnew.webp') }}" alt="Image" class="absolute z-0 h-full w-full object-cover object-top brightness-50" />
    <div class="absolute z-0 h-full w-full bg-black/50 backdrop-blur-sm" />
    <div class="p-4 flex justify-center align-middle items-center h-screen">
        <form action="/login" method="POST"
            class="flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md absolute mt-5 md:w-[500px] w-[90%]">
            <div class="relative bg-clip-border mx-4 rounded-xl overflow-hidden shadow-lg -mt-6 mb-4 grid h-28 place-items-center bg-gradient-to-r from-[#011F39] to-[#629FD4]">
                <h1 class="block antialiased tracking-normal font-sans text-4xl font-bold leading-snug text-white">
                    Log In
                </h1>
            </div>
            <div class="p-6 pt-1 flex flex-col gap-4">
                @csrf
                @if (session()->has('error'))
                    {{-- <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div> --}}
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mt-4 rounded relative w-fit"
                        role="alert">
                        <strong class="font-bold">Error!</strong>
                        <span class="block sm:inline">{{ session('error') }}</span>
                    </div>
                @endif
                <div class="relative w-full min-w-[200px] h-11">
                    <input name="email" type="email" placeholder="Email"
                        class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                </div>
                <div class="relative w-full min-w-[200px] h-11">
                    <input name="password" type="password" placeholder="Password"
                        class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                </div>
                {{-- <div class="relative w-full min-w-[200px] text-right">
                    <a class="text-blue-600 hover:text-blue-500" href="{{ route('password.request') }}">
                        Forgot Password?
                    </a>
                </div> --}}
                <div class="relative w-full min-w-[200px] h-11 mb-3">
                    <button type="submit" class="bg-gradient-to-r from-[#011F39] to-[#629FD4] hover:shadow-lg hover:shadow-blue-500/40 text-white font-bold py-2 px-4 rounded-lg block w-full">
                        Login
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
