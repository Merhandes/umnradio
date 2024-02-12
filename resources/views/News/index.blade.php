<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-white">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UMN Radio</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>

<body class="composer h-full bg-white">
    <x-navigation></x-navigation>

    {{-- ARTICLE --}}
    <div class="pt-10 mx-6 md:mx-48 font-poppins text-black pb-24">
        <h1 class="pt-12 md:pt-24 text-center font-bold mb-4 text-2xl">Articles</h1>
        <form action="/articles">
            <div class='max-w-md mx-auto mb-4'>
                <div
                    class="relative flex items-center w-full h-12 rounded-lg focus-within:shadow-lg overflow-hidden bg-white border border-opacity-60 border-slate-500">
                    <button type="submit">
                        <div class="grid place-items-center h-full w-12 text-gray-500 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </button>

                    <input class="peer h-full w-full outline-none text-sm text-gray-700 pr-2 bg-white" type="text"
                        id="search" name="search" placeholder="Search something.." />
                </div>
            </div>
        </form>
        <div class="flex flex-wrap gap-8 justify-center">

            {{-- <a class="no-underline" href="/article/kepada-yth-maba-apa-kabar-kali-ini">
                <div class="rounded overflow-hidden shadow-lg no-underline w-[300px] h-full relative pb-12">
                    <img class="w-full h-52 object-cover" src="{{ asset('images/artikel2/FEATURED IMAGE MABA.webp') }}"
                        alt="Featured Image">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 text-[#021f3a]">Kepada Yth. Maba: Apa Kabar Kali Ini?</div>
                        <p class="text-gray-700 text-base">
                            “Buka lagi visimu, kau tahu mana urutan satu”<br>
                            Sepenggal lirik dari lagu “33x”. . .
                        </p>
                    </div>
                    <div class="px-3 pt-4 absolute bottom-1">
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Lapor
                            OMB</span>
                    </div>
                </div>
            </a>

            <a class="no-underline" href="/article/obral-etalase-mimpi">
                <div class="rounded overflow-hidden shadow-lg no-underline w-[300px] h-full relative pb-12">
                    <img class="w-full h-52 object-cover" src="{{ asset('images/artikel1/FEATURED IMAGE.webp') }}"
                        alt="Featured Image">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 text-[#021f3a]">Obral Etalase Mimpi</div>
                        <p class="text-gray-700 text-base">
                            “Dibeli! Dibeli! Diobral <i>nih</i> mimpinya!” <br>
                            Hah? Dibeli? Diobral? Mimpinya? Apa <i>sih</i> maksudnya? <i>Kinda little bit confusing,</i>
                            ya
                            Ultimafriends?. . .
                        </p>
                    </div>
                    <div class="px-3 pt-4 absolute bottom-1">
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Lapor
                            OMB</span>
                    </div>
                </div>
            </a>

            <a class="no-underline" href="/article/obral-etalase-mimpi">
                <div class="rounded overflow-hidden shadow-lg no-underline w-[300px] h-full relative pb-12">
                    <img class="w-full h-52 object-cover"
                        src="{{ asset('images/synchronize/SYNCHRO (FEATURED).webp') }}" alt="Featured Image">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 text-[#021f3a]">Synchronize Fest 2022, Menggarap Total “Lokal
                            Lebih Vokal”</div>
                        <p class="text-gray-700 text-base">
                            <i>“Dibilang enak, ya memang enak
                                Dibilang asik, ya memang asik”
                            </i>
                        </p>
                    </div>
                    <div class="px-3 pt-4 absolute bottom-1">
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Liputan</span>
                    </div>
                </div>
            </a> --}}

            @foreach ($posts as $post)
                <a class="no-underline" href="/article/{{ $post->slug }}">
                    <div class="rounded overflow-hidden shadow-lg no-underline w-[300px] h-full relative pb-12">
                        <img class="w-full h-52 object-cover" src="{{ asset('storage/' . $post->cover_photo) }}"
                            alt="Featured Image">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2 text-[#021f3a]">{{ $post->title }}</div>
                            <p class="text-gray-700 text-base">
                                {{ $post->excerpt }}
                            </p>
                        </div>
                        <div class="px-3 pt-4 absolute bottom-1">
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $post->category }}</span>
                            <span>
                                {{ $post->published }}
                            </span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <x-audiodefault></x-audiodefault>
</body>

</html>
