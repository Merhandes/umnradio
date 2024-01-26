<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-white">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>UMN Radio</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
</head>

<body class="composer h-full bg-white">
    {{-- NAVBAR --}}
    <div x-data="{ isOpen: false }" class="fixed w-full flex justify-between p-3 z-40 bg-[#021f3a] lg:p-4">
        <a class="flex items-center" href="/">
            <img class="h-10 md:h-16 w-auto" src="{{ asset('images/logowhite.webp') }}" alt="">
        </a>

        <div class="flex items-center justify-between">
            <button @click="isOpen = !isOpen" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white lg:hidden" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <div class="pr-4 hidden space-x-6 lg:inline-block">
                <a href="/" class="font-poppins text-base text-white no-underline">Home</a>
                <!-- <a href="#" class="font-poppins text-base text-white no-underline">About</a>
                    <a href="#" class="font-poppins text-base text-white no-underline">Programs</a> -->
                <a href="/articles" class="font-poppins text-base text-white underline-offset-4">Articles</a>
                <a href="/oprec" class="font-poppins text-base text-white underline-offset-4" hidden>OPREC</a>
            </div>

            <div class="mobile-navbar">
                <div class="fixed left-0 w-full h-48 p-5 bg-white rounded-lg shadow-xl top-16" x-show="isOpen"
                    @click.away=" isOpen = false">
                    <div class="flex flex-col space-y-6">
                        <a href="/" class="font-poppins -sm text-black">Home</a>
                        <!-- <a href="#" class="font-poppins text-sm text-black">About</a> -->
                        <a href="/articles" class="text-sm text-black">Articles</a>
                        <a href="/oprec" class="text-sm text-black" hidden>OPREC</a>
                        <!-- <a href="#" class="text-sm text-black">Podcasts</a> -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- SHOW ARTICLE --}}
    <div class="pt-16 md:pt-28 mx-1 md:mx-48 font-poppins text-black pb-24">
        {{-- <div class="">
            <a href="/posts/{{ $post->slug }}/edit">
                <button
                    class="bg-yellow-500 hover:bg-yellow-400 text-white font-bold py-1 px-2 border-b-4 border-yellow-700 hover:border-yellow-500 rounded">
                    Edit Article</button>
            </a>
        </div> --}}
        <img src="{{ asset('storage/' . $post->cover_photo) }}" alt=""
            class="my-1 w-full h-40 md:h-80 object-cover">
        <h1 class="mt-4 text-3xl text-center font-bold mb-0">
            <strong>{{ $post->title }}</strong>
            
        </h1>
        <h4 class="text-center">Posted {{ $post->published }}.</h4>
        <h4 class="mt-1 text-sm text-start mb-3 mx-3">
            By {{ $post->author }}. <br>Edited by {{ $post->editor }}. 
        </h4>
        <hr class="border-2 border-[#021f3a]">
        <article class="body-content mx-3 mt-8">
            {!! $post->post_content !!}
        </article>
    </div>

    <script src="{{ asset('js/attachments.js') }}"></script>
</body>
<style>
    .attachment img {
        height: 400px;
        width: fit-content;
    }

    .attachment {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        flex-direction: column;
        font-size: small;
    }
</style>

</html>
