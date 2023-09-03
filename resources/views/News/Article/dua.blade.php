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
                    <a href="/articles" class="font-poppins text-base text-white underline-offset-4">Articles</a>
                </div>

                <div class="mobile-navbar">
                    <div class="fixed left-0 w-full h-48 p-5 bg-white rounded-lg shadow-xl top-16" x-show="isOpen"
                        @click.away=" isOpen = false">
                        <div class="flex flex-col space-y-6">
                            <a href="/" class="font-poppins -sm text-black">Home</a>
                            <!-- <a href="#" class="font-poppins text-sm text-black">About</a> -->
                            <a href="/articles" class="text-sm text-black">Articles</a>
                            <!-- <a href="#" class="text-sm text-black">Podcasts</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- NEWS --}}
        <div>
            <img class="pt-10 h-auto md:h-128 w-screen z-0 mb-6" src="{{ asset('images/artikel2/FEATURED IMAGE MABA.webp') }}"
            alt="">
            <div class="font-poppins text-black mx-6 md:mx-48 text-justify">
            <div class="text-center mb-6">
            <h1 class="text-center font-bold">Kepada Yth. Maba: Apa Kabar Kali Ini?</h1>
            <small class="text-center">Posted on 23 August 2023</small>
            </div>
            <p class="text-justify ">“Buka lagi visimu, kau tahu mana urutan satu”<br><br>
            Sepenggal lirik dari lagu “33x” milik Perunggu jadi salah satu kalimat paling tepat untuk menggambarkan tahun-tahun kehidupan sebagai mahasiswa.<br><br>
            Ultimafriends, sebagai Maba mungkin lo merasa <i>overwhelmed</i> dengan hal-hal baru di masa awal perkuliahan. <i>Mention it</i>, OMB, perkenalan fakultas, teman-teman baru, sistem belajar yang baru, dan masih banyak hal lain. Rasa-rasanya semua terjadi dalam sekedip mata.<br><br>
            Di antara banyaknya hal yang harus dihadapi, mungkin seringkali lo berakhir kebingungan mana yang harus diselesaikan terlebih dahulu. Bahkan mungkin, ketika akhirnya lo berhasil menyelesaikan satu tugas, tiba-tiba ada tugas lain yang berbaris menunggu untuk dikerjakan. Lalu, ketika lo lihat ke kanan kiri, mungkin mulai tumbuh perasaan kalau lo belum mengusahakan sekeras orang lain.<br><br>
            Tenang, kali ini lo enggak sendiri.</p> <br> 

            <div class="flex flex-col items-center justify-center text-center">
            <img class="h-32 md:h-72 w-auto z-0" src="{{ asset('images/artikel2/SURAT1.webp') }}"
            alt=""><br>
            </div>

            <p>Ultimafriends, sepertinya kita semua bisa sepakat bahwa kuliah bukan hal yang mudah, tapi bukan berarti enggak bisa diselesaikan. Ketika lo merasa sedang ada di titik bawah dalam kehidupan perkuliahan, selalu ingat kalau ada banyak hal kecil yang bisa membuat lo kembali kuat.<br><br>
            Seperti kata Cila, kuliah adalah sesuatu yang harus lo nikmatin pelan-pelan. Ketika lo sudah sanggup menemukan alasan-alasan baik untuk tetap kuat, lo akan bisa dengan jelas melihat pintu keluar untuk semua masalah. <i>You’ll survive</i>, Ultimafriends. <i>Finger crossed!</i>
            </p><br> <br> 

            <div class="flex flex-col items-center justify-center text-center">
            <img class="h-32 md:h-72 w-auto z-0" src="{{ asset('images/artikel2/SURAT2.webp') }}"
            alt=""><br>
            </div>

            <p>Enggak bisa dipungkiri, sebagai mahasiswa pasti akan ada masanya lo dibuat kelimpungan menyelesaikan tugas yang datang bersamaan. Untuk itu, lo bisa mencoba untuk membuat <i>to-do-list</i> seperti Maria, supaya lo bisa menentukan mana yang paling penting untuk segera diselesaikan. <i>One step at a time</i>, Ultimafriends!<br><br>
            <i>Don’t be shy</i>, Ultimafriends, raise your hand kalau lo merasa <i>overwhelmed</i> dengan banyaknya pilihan kegiatan di kampus! Tenang, lo akan punya banyak waktu untuk mempelajari masing-masing organisasi. Kalau dalam perjalanannya nanti muncul banyak pertanyaan soal mana yang paling baik dan tepat untuk lo, jangan merasa takut untuk bertanya. <i>Just like what</i> Maria <i>said, the seniors have your back!</i></p> <br> <br>

            <div class="flex flex-col items-center justify-center text-center">
            <img class="h-32 md:h-72 w-auto z-0" src="{{ asset('images/artikel2/SURAT3.webp') }}"
            alt=""><br>
            </div>

            <p>Ultimafriends, sebagai Maba, mungkin lo akan merasa dihantam dengan rasa bingung dan
            kaget di masa-masa awal kuliah. <i>It’s full of surprise, they said.</i><br> <br>
            Tarik napas, Ultimafriends. Ada saatnya lo harus mencoba meletakkan semua pikiran-pikiran
            ramai di kepala. Anggap hal-hal tadi adalah tantangan dalam petualangan lo. Kalau nanti ada
            waktunya semua energi lo habis terkuras, silakan ambil waktu untuk istirahat sebentar. Isi
            bensin dan coba lagi untuk lain hari.</p> <br> <br>

            <div class="flex flex-col items-center justify-center text-center">
            <img class="h-32 md:h-72 w-auto z-0" src="{{ asset('images/artikel2/SURAT4.webp') }}"
            alt=""><br>
            </div>

            <p>Persis seperti kata Dave, kuliah adalah waktunya lo berpetualang dan menentukan pijakan.
            Mungkin akan ada beberapa jalan yang terasa buntu, beberapa keputusan yang salah, atau
            bidikan yang salah arah. <i>But, one thing for sure</i>, masa-masa kuliah memberikan lo banyak
            kesempatan untuk mencari tahu kemauan diri sendiri dan belajar memecahkan masalah masa
            depan.<br> <br>
            <i>Kindly remember</i>, Ultimafriends, lo enggak harus selalu jadi yang terbaik di antara semua
            orang. Sebebasnya lo boleh mengarang makna untuk proses pendewasaan. Besok atau hari
            ini, lo akan selalu jadi pemegang kendalinya. Selamat berpetualang sebagai mahasiswa,
            Ultimafriends!</p> <br> <br>
            
            <p><b>Writer</b> : Lungayu Endahrum</p>
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
