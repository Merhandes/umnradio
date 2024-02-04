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
    <div class="pt-16 md:pt-28 mx-1 md:mx-48 font-poppins text-black pb-8">
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
        <hr class="border-2 border-[#021f3a] mt-10">
    </div>

    {{-- <div class="md:fixed md:top-48 md:end-0 bg-slate-500 text-white w-fit md:w-60 rounded-l-lg">
        <div class="w-full h-full p-6 relative">
            <div class="bg-slate-800 h-full w-fit start-0 top-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white lg:hidden" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </div>
            <h1 class="text-xl font-bold font-poppins mb-4">Similar Posts</h1>
            <div class="w-full flex flex-wrap gap-6">
                @foreach ($suggestions as $suggestion)
                    <a class="no-underline" href="/suggestion/{{ $suggestion->slug }}">
                        <div
                            class="rounded overflow-hidden shadow-lg no-underline w-[100px] max-w-full relative flex bg-white">

                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div> --}}

    <div class="text-black mx-4 md:mx-48 pb-24">
        <h1 class="text-2xl font-bold font-poppins mb-6">Latest Posts</h1>
        <div class="w-full flex flex-wrap gap-6">
            @foreach ($articles as $article)
                <a href="/article/{{ $article->slug }}"
                    class="rounded overflow-hidden drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] no-underline w-full md:w-[400px] max-w-full h-[115px] md:h-[150px] relative flex bg-white">
                    <img class="w-[30%] h-full object-cover" src="{{ asset('storage/' . $article->cover_photo) }}"
                        alt="Featured Image">
                    <div class="px-6 py-4 max-h-[80%]">
                        <p class="font-bold text-xl mb-2 text-[#021f3a] h-full text-ellipsis overflow-hidden">
                            {{ $article->title }}</p>
                    </div>
                    <div class="absolute px-3 pt-4 bottom-1 end-1 md:text-base text-sm">
                        <span
                            class="inline-block bg-gray-200 rounded-full px-2 md:px-3 py-1 text-sm font-semibold text-gray-700 mr-1 md:mr-2 mb-2">{{ $article->category }}</span>
                        <span class="text-black">
                            {{ $article->published }}
                        </span>
                    </div>
                </a>
            @endforeach
            <a href="/articles"
                class="rounded overflow-hidden shadow-lg no-underline w-[400px] max-w-full h-[75px] md:h-[150px] flex justify-center items-center align-middle bg-white border border-[#021f3a] hover:bg-[#021f3a] hover:text-white hover:cursor-pointer ease-in-out duration-100">
                <h1 class="font-poppins font-bold text-xl">VIEW MORE</h1>
            </a>
        </div>
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
