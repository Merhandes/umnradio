<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
    {{-- NAVBAR --}}
     <div x-data="{ isOpen: false }" class="fixed w-full flex justify-between p-3 z-40 bg-[#021f3a] lg:p-4">
            <div class="flex items-center">
            <img class="h-10 md:h-16 w-auto" src="{{ asset('images/logowhite.webp') }}"
            alt="">
            </div>

            <div class="flex items-center justify-between">
                <button @click="isOpen = !isOpen" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white lg:hidden" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <div class="pr-4 hidden space-x-6 lg:inline-block">
                    <a href="/" class="font-poppins text-base text-white no-underline">Home</a>
                    <!-- <a href="#" class="font-poppins text-base text-white no-underline">About</a>
                    <a href="#" class="font-poppins text-base text-white no-underline">Programs</a> -->
                    <a href="/article" class="font-poppins text-base text-white underline-offset-4">Articles</a>
                </div>

                <div class="mobile-navbar">
                    <div class="fixed left-0 w-full h-48 p-5 bg-white rounded-lg shadow-xl top-16" x-show="isOpen"
                        @click.away=" isOpen = false">
                        <div class="flex flex-col space-y-6">
                            <a href="/" class="font-poppins -sm text-black">Home</a>
                            <!-- <a href="#" class="font-poppins text-sm text-black">About</a> -->
                            <a href="/article" class="text-sm text-black">Articles</a>
                            <!-- <a href="#" class="text-sm text-black">Podcasts</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- NEWS --}}
        <div>
            <img class="pt-10 h-auto md:h-128 w-screen z-0 mb-6" src="{{ asset('images/artikel1/FEATURED IMAGE.webp') }}"
            alt="">
            <div class="font-poppins text-black mx-6 md:mx-48 text-justify">
            <div class="text-center mb-6">
            <h1 class="text-center font-bold">Obral Etalase Mimpi</h1>
            <small class="text-center">Posted on 23 August 2023</small>
            </div>
            <p class="text-justify ">“Dibeli! Dibeli! Diobral <i>nih</i> mimpinya!” <br> <br>
            Hah? Dibeli? Diobral? Mimpinya? Apa <i>sih</i> maksudnya? <i>Kinda little bit confusing,</i> ya
            Ultimafriends? <i>It’s okay,</i> karena Reporter bakal jelasin maksud dari kata-kata di atas. <i>Well, as
            you guys know,</i> bermimpi itu sebetulnya murah, yang cukup sulit tuh cara mencapainya. Buat
            para Maba, ketika memasuki jurusan kuliah yang lo pilih, bisa dibilang lo baru saja membeli
            jalan menuju mimpi yang lo tuju. <br> <br>
            Ultimafriends, ngomong-ngomong soal mimpi, lo punya enggak sih mimpi yang ingin dicapai?
            Kalau memang ada, apa sih hal yang sudah lo lakukan untuk sampai ke mimpi itu? Seperti
            yang lo tahu, Ultimafriends, mahasiswa baru pasti masih punya banyak mimpi tentang
            perkuliahan, mulai dari organisasi apa yang ingin dimasuki, bahkan sampai ke pekerjaan yang
            diinginkan.<br> <br>
            Satu yang perlu lo ingat, pada akhirnya, mau enggak mau semua ekspektasi lo akan
            menemukan realitanya saat dijalani. But, <i>don’t let it brings you down</i>! Kalau kata Aristoteles sih
            “Harapan adalah mimpi yang nyata,” Ultimafriends!</p> <br> 

            <div class="flex flex-col items-center justify-center text-center">
            <img class="h-32 md:h-72 w-auto z-0" src="{{ asset('images/artikel1/FOTO SATU.webp') }}"
            alt="">
            <small>(Foto: UMN Radio)</small> <br>
            </div>

            <p>Nah, kalau bahas tentang mimpi di dunia perkuliahan, ya paling seru kalau dibahas bersama
            Maba! Kebetulan kali ini Reporter berkesempatan untuk nanya-nanya langsung ke beberapa
            mahasiswa baru UMN yang sedang menjalani Orientasi Mahasiswa Baru (OMB).<br> <br> 
            <i>But, first thing first</i>, <i>let’s get to know more</i> mahasiswa baru yang Reporter wawancarai! Maba
            pertama yang diwawancarai adalah Nabil Dzaki Supriadi dari prodi Film. Nah, yang kedua ada
            Maba dari prodi Manajemen, namanya Michelle Setiawan. <i>So, let’s dig a little deeper about their
            dreams!</i> <br> <br> 
            “Cita-cita aku sih mau jadi produser film, makanya aku masuk ke prodi film di UMN, sama dari
            SMP juga emang udah suka sama perfilm-an, pernah ikut lomba juga dan pernah menang,”<br> <br> 
            Memang sudah jadi rahasia umum, banyak Maba yang memilih untuk masuk ke jurusan yang
            sesuai dengan hobi dan mimpinya. Enggak terkecuali Nabil, yang sekarang jadi mahasiswa
            jurusan Film di UMN.<br> <br> 
            “Aku masuk prodi film di UMN tuh karena UMN support banget mahasiswanya buat ikut lomba”<br> <br> 
            Jadi buat lo, Ultimafriends, jangan takut untuk ikut lomba-lomba untuk mewakili kampus. Selain
            bisa membawa nama baik kampus, lo akan semakin bisa <i>upgrade</i> kemampuan! Ini juga bisa
            jadi tiket perjalanan gratis untuk sampai menuju mimpi lo.<br> <br> 
            “Cita-cita aku jadi konsultan keuangan, dari dulu tuh aku suka finance. Awal aku suka bidang
            finance waktu SMA karena salah satu podcast Raditya Dika dan Felicia Putri Tjiasaka, yang aku
            menjadi tahu bahwa Felicia merupakan Chartered Financial Analyst (CFA),”<br> <br> 
            Ultimafriends, lo sama enggak sih kayak Michelle? Dari sekedar menonton sesuatu, lo malah
            bisa jadi tertarik dengan hal itu. Maba lain juga banyak yang mimpinya bermula dari menonton
            sesuatu sampai ingin menjadi seperti itu.</p><br> <br> 

            <div class="flex flex-col items-center justify-center text-center">
            <img class="h-32 md:h-72 w-auto z-0" src="{{ asset('images/artikel1/FOTO DUA.webp') }}"
            alt="">
            <small>(Reporter bareng Nabil dan Michelle!)</small> <br>
            </div>

            <p>Ultimafriends, tapi lo harus pegang ini; lo perlu untuk selalu ingat sama apa yang lo cita-citakan
            di awal. Kalau memang cita-cita lo udah tercapai, lo jadi bisa selalu menghargai hal-hal yang
            membawa lo ke mimpi itu. <i>You need to finish what you started</i>, Ultimafriends!<br> <br> 
            Kehidupan sebagai mahasiswa enggak selalunya harus serba cepat, selayaknya lomba balap
            ya, Ultimafriends. Kalau di tengah perjalanan menuju ke mimpi ada hambatan dan lo merasa
            melamban, jangan terlalu diambil pusing karena melamban bukanlah hal yang tabu. Kalau lo
            memang merasa lelah, lo bisa bersandar dulu sejenak untuk mengistirahatkan beban yang
            selama ini lo bawa. <i>Just take your time in your journey to achieve your dreams, Ultimafriends!
            There’s nothing too late, everybody has their own pace.</i></p> <br> <br>
            
            <p><b>Writer</b> : Ziddan Attariq, Raudhah Salsabila</p>
            <p class="pb-24"><b>Editor</b> : Lungayu Endahrum</p>
            </div>
        </div>

    {{-- AUDIO --}}
    <footer id="audiosticky" class="fixed bottom-0 w-full z-40 h-16 bg-[#021f3a] flex flex-row gap-16 justify-center items-center transition-all duration-500">
        <button id="buttonplay2"><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/></svg></button>
        <button id="buttonpause2" class="hidden"><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M48 64C21.5 64 0 85.5 0 112V400c0 26.5 21.5 48 48 48H80c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H48zm192 0c-26.5 0-48 21.5-48 48V400c0 26.5 21.5 48 48 48h32c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H240z"/></svg></button>
        <audio id="player">
                        <source src='https://shoutcast.radio.umn.ac.id/stream.mp.3'/>
                        </audio>
    </footer>
                
    <script>
            var button3 = document.getElementById("buttonplay2");
            var button4 = document.getElementById("buttonpause2");
            var audio = document.getElementById("player");

            button3.addEventListener("click", function(){
            if(audio.paused){
                audio.play();
                button3.classList.add('hidden');
                button4.classList.remove('hidden');
            } else {
                audio.pause();
                button4.classList.add('hidden');
                button3.classList.remove('hidden');
            }
            });

            button4.addEventListener("click", function(){
            if(audio.paused){
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
    </body>
</html>
