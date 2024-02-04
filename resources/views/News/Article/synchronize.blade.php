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
    {{-- NAVBAR --}}
    <div x-data="{ isOpen: false }" class="fixed w-full flex justify-between p-3 z-40 bg-[#021f3a] lg:p-4">
        <div class="flex items-center">
            <img class="h-10 md:h-16 w-auto" src="{{ asset('images/logowhite.webp') }}" alt="">
        </div>

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
    <div class="pt-10">
        <img class="pt-10 h-auto md:h-96 w-screen z-0 mb-6"
            src="{{ asset('images/synchronize/SYNCHRO (FEATURED).webp') }}" alt="">
        <div class="font-poppins text-black mx-6 md:mx-48 text-justify">
            <div class="text-center mb-6">
                <h1 class="text-2xl text-center font-bold">Synchronize Fest 2022, Menggarap Total “Lokal Lebih Vokal”
                </h1>
                <small class="text-center">Posted on 23 August 2023</small>
            </div>
            <p class="text-justify "><i>“Dibilang enak, ya memang enak
                    Dibilang asik, ya memang asik”
                </i><br><br>
                Kutipan lirik lagu “Musiknya Asyik” dari Barakatak yang jadi lagu pembuka di video perilisan <i>line
                    up</i> musisi Synchronize Fest, bener-bener <i>describes</i> Synchronize Fest <i>as its best</i> ya,
                Ultimafriends!
                <br><br>
                Setelah absen selama nyaris 3 tahun karena pandemi, Synchronize Fest akhirnya akan kembali bersenandung
                ramai nih, Ultimafriends!
                <br><br>
                Synchronize Fest dengan segala kerendahan hati ingin pelan-pelan pulih dan beradaptasi. Digambarkan
                dengan menghadirkan 2 warna membumi (biru <i>ultramarine</i> dan putih gading) di awal kemunculannya
                tahun ini. Duh, 2 warna aja udah bisa bikin gempar skena festival musik ya, Ultimafriends!
                <br><br>
                Punya visi untuk menjadi perayaan musik Indonesia yang lintas <i>genre</i> dan lintas generasi, hajatan
                Synchronize Fest tahun ini mengusung tema “Lokal Lebih Vokal”. Sesederhana temanya, tahun ini
                Synchronize Fest akan membawa konsep lokal lebih jauh lagi dari tahun-tahun sebelumnya. Pokoknya
                kearifan lokal banget deh, Ultimafriends!
                <br><br>
                <i>It's not even their main event yet</i>, tapi <i>vibes</i> lokalnya udah kerasa banget di jumpa pers
                yang dilaksanakan Rabu, 10 Agustus 2022 kemarin. <i>Let's see what they've served on the table</i>, yuk,
                Ultimafriends!
            </p> <br>

            <h3 class="text-xl font-bold"><i>Music Jockey</i> Jumpa Pers</h3>
            <div class="flex flex-col items-center justify-center text-center">
                <img class="h-32 md:h-72 w-auto z-0" src="{{ asset('images/synchronize/SYNCHRO (1).webp') }}"
                    alt="">
                <p class="text-sm">Foto: Lungayu Endahrum</p><br>
            </div>

            <p>Pada jumpa pers Rabu kemarin, Synchronize Fest menghadirkan <i>Music Jockey</i> yang memutarkan lagu-lagu
                lokal, baik lawas maupun keluaran baru. <i>Vibes was immaculate</i>, Ultimafriends! Beberapa lagu yang
                diputar, diantaranya Kau – Chandra Darusman, Tulus – Kelana, Sesaat Kau Hadir – Utha Likumahuwa, dan
                Dusta – Januari Christy. Kalau diumpamakan lagi <i>fine dining, feels like they served a really nice
                    appetizer</i>!
            </p><br> <br>

            <h3 class="text-xl font-bold">Prosesi Adat Betawi</h3>
            <p>Nah, ini dia salah satu bagian yang melokal banget! Synchronize Fest mempersiapkan prosesi adat Betawi
                untuk menyambut teman-teman media di jumpa pers kemarin.
                <br><br>
                “Tahun ini, <i>press conference</i> akan dilakukan berbeda dari tahun-tahun sebelumnya. Bakal ada
                sesuatu yang
                baru. Pokoknya temen-temen media akan jadi pengantin perempuan kami.” kata Arie Dagienkz, Synchronize
                Fest Radio Director, pada jumpa pers Rabu, 10 Agustus kemarin.
            </p> <br> <br>

            <div class="flex flex-col items-center justify-center text-center">
                <img class="h-32 md:h-72 w-auto z-0" src="{{ asset('images/synchronize/SYNCHRO (2).webp') }}"
                    alt="">
                <p class="text-sm">Foto: Lungayu Endahrum</p><br>
            </div>

            <p>
                Seperti layaknya pengantin perempuan yang akan dipinang, teman-teman media disambut dengan tanjidor dan
                ondel-ondel khas Betawi, loh, Ultimafriends. Synchronize Fest sukses menciptakan <i>core memory</i>
                untuk
                teman-teman media, sih!
                <br><br>
                Prosesi tersebut juga bisa dimaknai sebagai simbol bahwa Synchronize Fest ingin membuat hubungan
                emosional yang lebih kuat dengan publik. Selain itu, dengan digunakannya adat Betawi, ini juga
                melambangkan kalau Synchronize Fest menghormati nilai-nilai lokal daerah di mana acara akan dilaksanakan
                nanti. <i>What a thought</i> ya, Ultimafriends!
            </p>
            <br><br>

            <h3 class="text-xl font-bold"><i>Video Announcement Line Up</i></h3>
            <p>Pada jumpa pers kemarin, <i>video announcement line up</i> musisi diputar untuk yang pertama kalinya,
                loh,
                Ultimafriends! Konsep videonya super melokal dan dekat dengan kehidupan sehari-hari. Berasa lagi
                jalan-jalan sore di sekitar rumah dan berujung main-main di pasar malam.
            </p> <br> <br>

            <div class="flex flex-col items-center justify-center text-center">
                <img class="h-32 md:h-72 w-auto z-0" src="{{ asset('images/synchronize/SYNCHRO (3).webp') }}"
                    alt="">
                <p class="text-sm">Ala-ala papan di poskamling gitu, deh!</p><br>
            </div>

            <p>Nama-nama musisi ditampilkan menyaru dengan barang-barang yang sering kita temui. Misalnya, “Danilla”
                yang ditampilkan dalam poster di papan pengumuman, “Namoy Budaya” yang ditampilkan sebagai nama kaleng
                kerupuk, “Fourtwnty” yang ditampilkan dalam kaos partai, bahkan “Jason Ranti” yang ditampilkan dalam
                uang kertas Rp 10.000,00.
                <br><br>
                <i>Video announcement</i> tersebut bisa ditonton ulang di situs resmi Synchronize Fest atau di kanal
                YouTube
                demajorsTV. Buruan tonton, deh, Ultimafriends. Biar lo bisa makin <i>ride the wave</i>!
            </p> <br> <br>

            <h3 class="text-xl font-bold">Pilihan Musisi</h3>
            <p>Synchronize Fest memegang empat pilar dalam proses pemilihan musisi. Empat pilar tersebut adalah
                <i>Legendary, Popular,</i> Penampil Khusus, dan <i>The New Emerging Artist</i>.
<br><br>
                “<i>The new emerging artist</i> (adalah), nama baru yang belum pernah tampil di Synchronize. Yang belum
                pernah
                tampil ada banyak sekali, pokoknya banyak banget <i>line up</i> terbaru, yang enggak itu-itu aja. Tiga
                tahun
                ini kita pakai buat menabung musisi-musisi baru, sih,” jelas Aldila Karina selaku <i>Communication
                    Director</i>
                Synchronize Fest 2022.
<br><br>
                Melalui empat pilar tersebut, Synchronize Fest ingin menjadi rumah yang ramah bagi semua musisi lokal
                tanpa terkecuali. Ngomongin soal itu, lo <i>notice</i> enggak, sih, Ultimafriends? Kalau nama-nama
                <i>line up</i>
                musisi disusun secara <i>alphabetical</i> dan ditulis dengan ukuran yang sama? <i>If you’re wondering
                    why</i>,
                alasannya sesederhana karena Synchronize Fest ingin memberikan <i>spotlight</i> dan kesempatan yang sama
                kepada
                semua musisi.
<br><br>
                <i>No main artist, they said. Every musician deserve the same rights!</i>

            </p> <br> <br>

            <h3 class="text-xl font-bold"><i>Special Show</i> Kolaborasi Musisi-Musisi Lokal</h3>
            <p><i>The fun doesn’t stops right there</i>, Ultimafriends! Rasanya enggak afdol kalau enggak ada penampilan
                khusus
                yang betul-betul meng-<i>highlight</i> rasa “lokal” yang jadi tujuan utama Synchronize Fest.
<br><br>
                Tahun ini, Synchronize Fest menghadirkan beberapa musisi besar yang akan saling berkolaborasi dalam satu
                panggung. <i>Mention it</i>, Orkestra Nasida Ria Bersama Tjut Nyak Deviana, Pergelaran Swara Gembira
                untuk
                Guruh Soekarno Putra, dan yang enggak kalah meriah, bakal ada Spirit of Dara Puspita Bersama Fleur!
            </p> <br> <br>

            <div class="flex flex-col items-center justify-center text-center">
                <img class="h-32 md:h-72 w-auto z-0" src="{{ asset('images/synchronize/SYNCHRO (4).webp') }}"
                    alt="">
                <p class="text-sm">Girl boss pada zamannya sih ini! (Foto: Pinterest)</p><br>
            </div>

            <p><i>We’re talking about</i> Dara Puspita, loh, Ultimafriends! Band perempuan asal Indonesia yang dianggap
                berhasil menampilkan <i>rock and roll</i> secara seutuhnya di panggung. <i>It’s been 50 years-ish since the last
                time they rock the stage!</i> Synchronize Fest membawa tema “Lokal Lebih Vokal” <i>to the next level</i> banget ya,
                Ultimafriends!
<br><br>
                Synchronize Fest tahun ini akan dimeriahkan 126 penampil pertunjukan, lintas genre dan generasi.
                Dilangsungkan selama tiga hari berturut-turut pada 7, 8, dan 9 Oktober 2022, Synchronize Fest siap jadi
                pelantum untuk musisi-musisi lokal. Seperti tahun-tahun sebelumnya, Synchronize Fest bakal kembali
                diadakan di Gambir Expo, Jakarta, loh, Ultimafriends!
<br><br>
                <i>Well</i>, Ultimafriends, memang enggak salah kalau tahun ini Synchronize Fest mengambil tema “Lokal Lebih
                Vokal”. Karena, tidak seperti festival musik yang lain, Synchronize Fest memang rumah untuk
                musisi-musisi lokal bisa keras merdu bersuara.
<br><br>
                <i>It’s time to open your calendar and set the reminder.</i> Selamat berdendang ria bersama musisi-musisi lokal
                ya, Ultimafriends! </p> <br> <br>

            <p><b>Writer</b> : Lungayu Endahrum</p>
            <p class="pb-24"><b>Editor</b> : Lungayu Endahrum</p>
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
</body>

</html>
