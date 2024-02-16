<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>About Us - UMN Radio</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <style>
        div::-webkit-scrollbar {
            display: none;
            /* for Chrome, Safari, and Opera */
        }
    </style>
    {{-- <script src="https://kit.fontawesome.com/667eb529ec.js" crossorigin="anonymous"></script> --}}
</head>

<body class="h-full bg-white">
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

    {{-- SHOW PROGRAMS --}}
    <div class="w-screen md:w-full h-full overflow-scroll pt-16 pb-16 flex flex-col justify-center">
        <div class="relative">
            <img class="h-screen w-auto md:h-auto md:w-screen z-0 object-cover" src="{{ asset('images/About/BANNERABOUT.webp') }}"
                alt="" />
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 px-2 py-2">
                <div class="px-4 py-4 text-center">
                    <h3 class="py-2 font-poppins text-3xl md:text-6xl text-white font-bold">
                        ABOUT US</h3>
                    <p class="py-2 font-poppins text-xs md:text-base text-white font-bold">"It's U, It's Music, It's News, It's UMN Radio"</p>
                </div>
            </div>
        </div>
        
        <div class="overflow-scroll py-8 px-12 flex flex-wrap items-center justify-evenly">
            <img class="h-52 md:h-96 w-auto" src="{{ asset('images/about/RADIO.webp') }}" alt="">            
            <p class="w-full md:w-2/5 py-4 md:py-0 font-poppins text-xs md:text-base text-justify text-black">UMN Radio merupakan organisasi media berbasis radio komunitas yang berada di bawah naungan Fakultas Ilmu Komunikasi Universitas Multimedia Nusantara. Pertama kali didirikan pada 18 Juli 2011 dengan tagline 'Inspiring Change for Tomorrow', UMN Radio diharapkan dapat menjadi sarana belajar dan mengasah kreativitas mahasiswa UMN dalam menjalankan dan melaksanakan proses manajemen sebuah organisasi media kampus dalam bentuk media radio yang mampu membawa dampak positif kepada masyarakat melalui media radio.<br>
            <br>UMN Radio beroperasi di Lantai 6, Gedung B, Universitas Multimedia Nusantara dalam kepengurusan aktif Generasi 13 yang melibatkan 69 mahasiswa UMN dari berbagai program studi. UMN Radio Generasi 13 mengangkat tagline operasional "Set The Tune and Raise The Volume" yang menjadi motivasi untuk terus melangkah maju membawa operasional UMN Radio ke arah yang lebih baik dalam segala bidang.</p>
        </div>
        
        <div class="w-screen md:w-full h-full overflow-scroll py-4 md:py-8 px-12 flex flex-wrap justify-center">
            <div class="font-poppins w-full md:w-2/5 md:px-6 py-4 flex flex-col mx-auto text-center">
                <h1 class="text-2xl md:text-4xl text-black font-bold pb-4">OUR VISION</h1>
                <ul class="text-xs md:text-base text-justify text-black list-disc">
                    <li>Menjadikan UMN Radio sebagai sarana untuk mencapai potensi maksimal dalam berkreasi yang mencakup ide, karya, dan kreativitas Ultimacrews.</li>
                    <li>Menjadikan UMN Radio sebuah media kampus dan radio komunitas kredibel sebagai representatif berbagai suara civitas UMN ke pihak luar lewat penyiaran, musik, berita, dan hiburan yang berkualitas. </li>
                </ul>
            </div>
            <div class="font-poppins w-full md:w-2/5 md:px-6 py-4 flex flex-col mx-auto text-center">
                <h1 class="text-2xl md:text-4xl text-black font-bold pb-4">OUR MISSION</h1>
                <ul class="text-xs md:text-base text-justify text-black list-disc">
                    <li>Memproduksi konten dan berita melalui program yang terpercaya sesuai dengan etika secara berkualitas untuk menjaga eksistensi sebagai media kampus.</li>
                    <li>Menjunjung tinggi rasa profesionalitas dan tanggung jawab terhadap UMN Radio.</li>
                    <li>Membangun lingkungan UMN Radio menjadi nyaman bagi para Ultimacrews demi mencapai potensi yang maksimal.</li>
                    <li>Menjalin hubungan baik dengan sesama kegiatan, organisasi, kepanitiaan ataupun media kampus lain untuk mendorong kolaborasi.</li>
                    <li>Menyalurkan bakat dan mengasah kreatifitas Ultimacrews dari berbagai kegiatan internal maupun eksternal.</li>
                </ul>
            </div>
        </div>
        
        

        <div class="bg-biru overflow-scroll py-4 md:py-12 px-12 flex flex-wrap items-center justify-center text-white">
            <div class="font-poppins px-8 py-8 md:py-4 flex flex-col text-center">
                <h1 class="text-lg md:text-2xl font-bold"> Tagline UMN RADIO</h1>
                <p class="text-xs md:text-lg">"Inspiring Change For Tommorrow"</p>
            </div>
            <img class="h-52 md:h-80 w-auto" src="{{ asset('images/about/GEN13.webp') }}" alt="">
            <div class="font-poppins px-8 py-8 md:py-4 flex flex-col text-center">
                <h1 class="text-lg md:text-2xl font-bold">Tagline UMN RADIO GEN 13</h1>
                <p class="text-xs md:text-lg">"Set the Tunes and Raise the Volume"</p>
            </div>
        </div>

        <div class="overflow-scroll py-4 md:py-12 px-8 flex flex-row justify-center">
            <iframe class="w-11/12 md:w-1/2 aspect-video" src="https://www.youtube.com/embed/syRPFdhl8PY"></iframe>
        </div>
        

        <div class="mx-auto flex flex-wrap content-center md:py-2 px-8">
            <div class="flex space-x-4 mt-4 sm:mt-0">
                <a target="_" href="mailto:daniel.nicholas@umn.ac.id" class="text-black no-underline">
                    <div class="flex">
                        <img src="{{ asset('assets/gmail.webp') }}" alt="line" class="w-8 md:w-12 object-cover mb-1 mr-1">
                    </div>
                </a>
                <a target="_" href="http://line.me/ti/p/~@umnradio#~" class="text-black no-underline">
                    <div class="flex">
                        <img src="{{ asset('assets/line.webp') }}" alt="line" class="w-8 md:w-12 object-cover mb-1 mr-1">
                    </div>
                </a>
                <a target="_" href="https://twitter.com/UMNRADIO" class="text-black no-underline">
                    <div class="flex">
                        <img src="{{ asset('assets/twitter.webp') }}" alt="line" class="w-8 md:w-12 object-cover mb-1 mr-1">
                    </div>
                </a>
                <a target="_" href="https://www.youtube.com/channel/UCeVl4fsOVkU7yVCurgoq5Lg"
                    class="text-black no-underline">
                    <div class="flex">
                        <img src="{{ asset('assets/youtube.webp') }}" alt="line" class="w-8 md:w-12 object-cover mb-1 mr-1">
                    </div>
                </a>
                <a target="_" href="https://www.instagram.com/umnradio/"
                    class="text-black no-underline">
                    <div class="flex">
                        <img src="{{ asset('assets/instagram.webp') }}" alt="line" class="w-8 md:w-12 object-cover mb-1 mr-1">
                    </div>
                </a>
            </div>
        </div>
        
        <div class="overflow-scroll py-4 px-8 flex flex-row justify-center">
            <h1 class="text-xs md:text-base font-poppins text-black justify-center text-center">For partnership inquiries, please contact
                <a href="mailto:umnradio.partnership@gmail.com" class="text-black font-bold underline">umnradio.partnership@gmail.com</a>
            </h1>
        </div>
        
        <div class="font-poppins w-full md:w-4/5 md:px-6 py-2 grid grid-flex-rows mx-auto text-center">
            <div class="px-8">
                <ul class="text-xs md:text-base text-black">
                    <li class="py-2">Public Relations/PR ->
                        <a href="mailto:umnradio.pr@gmail.com" class="text-black font-bold underline">umnradio.pr@gmail.com</a>
                        <br>Acara public relations, seperti company visit, study banding, dan lainnya.
                    </li>
                    <li class="py-2">
                        Media Affairs -> 
                        <a href="mailto:media.umnradio@gmail.com" class="text-black font-bold underline">media.umnradio@gmail.com</a>
                        <br>Kerjasama media partner, seperti konser musik, lomba, seminar, dan acara lainnya.
                    </li>
                </ul>
            </div>
            <div class="px-8">
                <ul class="text-xs md:text-base text-black">
                    <li class="py-2">
                        Partnership ->
                        <a href="mailto:partnership@gmail.com" class="text-black font-bold underline">partnership@gmail.com</a>
                        <br>Kerjasama brand & sponsorship.
                    </li>
                    <li class="py-2">
                        Music Director -> 
                        <a href="mailto:md.umnradio@gmail.com" class="text-black font-bold underline">md.umnradio@gmail.com</a>
                        <br>Informasi press release atau new music updates.
                    </li>
                </ul>
            </div>
                
        </div>
    </div>



    {{-- AUDIO --}}
    <footer id="audiosticky"
        class="fixed bottom-0 w-full z-40 h-16 bg-[#021f3a] flex flex-row gap-16 justify-center items-center transition-all duration-500">
        <button id="buttonplay2"><svg xmlns="http://www.w3.org/2000/svg" height="2em"
                viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <style>
                    svg {
                        fill: #ffffff
                    }
                </style>
                <path
                    d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
            </svg></button>
        <button id="buttonpause2" class="hidden"><svg xmlns="http://www.w3.org/2000/svg" height="2em"
                viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <style>
                    svg {
                        fill: #ffffff
                    }
                </style>
                <path
                    d="M48 64C21.5 64 0 85.5 0 112V400c0 26.5 21.5 48 48 48H80c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H48zm192 0c-26.5 0-48 21.5-48 48V400c0 26.5 21.5 48 48 48h32c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H240z" />
            </svg></button>
        <audio id="player">
            <source src='https://i.klikhost.com/8374/' />
        </audio>
    </footer>

    <script>
        var button3 = document.getElementById("buttonplay2");
        var button4 = document.getElementById("buttonpause2");
        var audio = document.getElementById("player");

        button3.addEventListener("click", function() {
            if (audio.paused) {
                audio.play();
                button3.classList.add('hidden');
                button4.classList.remove('hidden');
            } else {
                audio.pause();
                button4.classList.add('hidden');
                button3.classList.remove('hidden');
            }
        });

        button4.addEventListener("click", function() {
            if (audio.paused) {
                audio.play();
                button3.classList.add('hidden');
                button4.classList.remove('hidden');
            } else {
                audio.pause();
                button4.classList.add('hidden');
                button3.classList.remove('hidden');
            }
        });
    </script>
    <script src="{{ asset('js/attachments.js') }}"></script>
</body>

</html>
