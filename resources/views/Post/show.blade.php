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
    <x-navigation></x-navigation>

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
