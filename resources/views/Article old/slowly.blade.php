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
        <img class="pt-10 h-auto md:h-96 w-screen z-0 mb-6" src="{{ asset('images/slowly/SLOWLY (FEATURED).webp') }}"
            alt="">
        <div class="font-poppins text-black mx-6 md:mx-48 text-justify">
            <div class="text-center mb-6">
                <h1 class="text-2xl text-center font-bold">UMN RADIO TRY: SLOWLY, BERSURAT TAK PERNAH SEMENYENANGKAN INI
                </h1>
                <small class="text-center">Posted on 15 December 2023</small>
            </div>
            <p class="text-justify ">“Yang klasik memang asik”<br><br>
                Setuju enggak, Ultimafriends?
                <br><br>
                Hal-hal klasik memang selalu punya cara magis untuk memberikan pengalaman yang berbeda. Meskipun, kadang
                enggak secepat dan semudah seperti semenjak internet. <i>But, doesn’t satisfaction lies in the
                    effort?</i>
                <br><br>
                Sama halnya seperti bersurat. Di masa sekarang, kita lebih banyak menerima surat dalam bentuk surel,
                yang sering kali berakhir menumpuk di akun e-mail. Surat bukan lagi soal prangko dan harap-harap cemas,
                menunggu kapan akan sampai kepada penerima.
                <br><br>
                Dulu, butuh waktu cukup lama untuk bersurat. Mulai dari menulis surat, mencari topik pembahasan yang
                sekiranya enggak akan basi, siapin amplop dan prangko, datang ke kantor pos, menunggu suratnya sampai ke
                tujuan. <i>Such a long journey ya, Ultimafriends, only for sending a letter. But, wait until you
                    received another letter and suddenly, the efforts pays off!</i>
                <br><br>
                Sebenernya, tim reporter punya keinginan untuk bisa berkirim surat seperti di masa dulu. Walaupun,
                kadang juga terpikir gimana ribetnya cari prangko. Belum lagi harus datang ke kantor pos untuk bisa
                mengirim suratnya. Duh, agak <i>pr</i> juga ya, Ultimafriends!
            </p> <br>

            <div class="flex flex-col items-center justify-center text-center">
                <img class="h-32 md:h-72 w-auto z-0" src="{{ asset('images/slowly/SLOWLY (1).webp') }}" alt="">
                <p class="text-sm">Contoh surat yang lengkap dengan prangko, klasik abis! (Sumber: Unsplash)</p><br>
            </div>

            <p>Bukan zaman digital namanya, kalau enggak bisa bikin semua hal jadi serba cepat dan mudah. Termasuk,
                pengalaman bersurat klasik tanpa harus datang ke kantor pos!
                <br><br>
                <i>Yes</i>, lo ga salah denger, Ultimafriends! Ada aplikasi yang bisa bikin kita rasain sensasi serunya
                bersurat kaya zaman dulu. <i>It’s called, <strong>Slowly</strong></i>. <i>Just like its name</i>, kita
                bakal diajak pelan-pelan nikmatin proses menulis sampai mengirim surat.
                <br><br>
                Nah, tim reporter udah cobain aplikasi ini dan <i>it brings tons of fun</i>, loh, Ultimafriends!
            </p><br> <br>

            <h3 class="text-xl font-bold"><i>STEP 1:</i> Pelan-Pelan Berkenelan</h3>
            <p>Enggak seperti bentuk pesan yang lainnya, sebuah surat berserah penuh pada kata-kata. <i>No face, no
                    emojis. Let your words tells who you are.</i> Begitu juga di <i>Slowly</i>, Ultimafriends.
                <br><br>
                Di aplikasi ini, kita bisa jadi anonim dan tetep jadi diri sendiri. <i>Slowly</i> cuma akan
                memperlihatkan
                sedikit informasi, <i>both about ourself and other users</i>. Jadi, semakin banyak surat yang kita
                tulis,
                semakin banyak juga informasi yang didapat dari teman pena kita.

                <i>Don’t worry</i>, Ultimafriends, kita bisa pilih teman pena sebebas-bebasnya. <i>No pressure</i>, deh!
            </p> <br> <br>

            <div class="flex flex-col items-center justify-center text-center">
                <img class="h-32 md:h-72 w-auto z-0" src="{{ asset('images/slowly/SLOWLY (2).webp') }}" alt="">
                <p class="text-sm">Contoh tampilan profil di Slowly. Data kita dijamin aman, kok!</p><br>
            </div>

            <p>
                Kalau diperhatikan, informasi yang diperlihatkan hanya sebatas nama, tanggal lahir, usia, negara asal,
                dan topik yang diminati. Bahkan, <i>profile picture</i> yang digunakan hanya semacam <i>avatar</i> dan
                kita boleh pakai nama samaran. Bener-bener berasa lagi bersurat klasik ya, Ultimafriends?
            </p>
            <br><br>

            <h3 class="text-xl font-bold"><i>STEP 2:</i> Pelan-Pelan Menulis Surat</h3>
            <p><i>Nah</i>, ini dia bagian yang paling <i>tricky</i>, Ultimafriends! Tim reporter juga awalnya bingung
                cari topik dan
                mengawali pembicaraan. <i>But, luckily</i>, seperti yang udah sempet dibahas sebelumnya, <i>Slowly</i>
                menyediakan
                informasi tentang topik favorit tiap penggunanya. Jadi, ketika lagi menulis surat pertama ke teman pena,
                tim reporter berusaha untuk membahas topik favoritnya. Itu jadi jurus andalan tim reporter untuk memulai
                pembicaraan. Kalau kata sebuah iklan, “<i>trust me, it works!</i>”
            </p> <br> <br>

            <h3 class="text-xl font-bold"><i>STEP 3:</i> Pelan-Pelan Koleksi Perangko</h3>
            <p>Setuju enggak sih, Ultimafriends, kalau surat tanpa prangko, tuh, rasanya hampa? Nah, di aplikasi
                <i>Slowly</i>, setiap surat yang dikirim juga harus disertai prangko. <i>The fun doesn’t stops
                    there</i>, loh, Ultimafriends! Karena, prangko ini juga bisa dikoleksi. Tim reporter sendiri udah
                mengoleksi 13 prangko.
            </p> <br> <br>
            <div class="flex flex-col items-center justify-center text-center">
                <img class="h-32 md:h-72 w-auto z-0" src="{{ asset('images/slowly/SLOWLY (3).webp') }}" alt="">
                <p class="text-sm">Prangkonya enggak kalah keren sama prangko asli, loh!</p><br>
            </div>

            <p><i>“Cara dapet prangkonya gimana dong?”</i>
                <br><br>
                Ada dua cara buat dapetin prangko, Ultimafriends. Pertama, bertukar prangko dengan teman pena kita.
                Kedua, beli prangko sesuai yang kita mau. Persis kaya di <i>real life</i> gitu, deh, Ultimafriends!
            </p> <br> <br>

            <h3 class="text-xl font-bold"><i>STEP 4:</i> Pelan-Pelan Mengirim dan Menerima Surat</h3>
            <p>Ultimafriends, kalau biasanya aplikasi <i>messaging</i> lain cuma butuh waktu beberapa detik untuk
                mengirimkan
                pesannya, <i>Slowly</i> justru butuh waktu lebih lama untuk mengirimkan pesan (surat). Ini dikarenakan,
                waktu
                pengiriman surat dibuat mirip seperti mengirim surat konvensional. Semakin jauh lokasi teman pena kita,
                semakin lama juga waktu yang dibutuhkan untuk mengirim suratnya.
                <br><br>
                Ketika tim reporter mengirim surat ke teman pena yang berada di Amerika, suratnya baru terkirim setelah
                2 hari! Nunggunya bikin panik-panik ajaib gitu, <i>deh</i>, Ultimafriends!
            </p> <br>
            <div class="flex flex-col items-center justify-center text-center">
                <img class="h-32 md:h-72 w-auto z-0" src="{{ asset('images/slowly/SLOWLY (4).webp') }}" alt="">
                <p class="text-sm">Surat yang dikirim ke Amerika, butuh waktu 2 hari untuk sampai ke penerima </p><br>
            </div>

            <h3 class="text-xl font-bold"><i>STEP 5:</i> Pelan-Pelan Berteman Baik</h3>
            <p><i>Finally!</i> Setelah sabar-sabar ngikutin semua <i>step</i>, tim reporter bisa punya hubungan baik
                dengan
                teman-teman pena dari berbagai negara. Pembicaraan yang awalnya cuma seputar apa kabar atau band
                favorit, sekarang jadi pembicaraan seru tentang kehidupan masing-masing. Pokoknya berasa udah kenal lama
                gitu, <i>deh</i>, Ultimafriends!

                Well, berkirim surat memang punya daya tarik yang bikin siapa pun penasaran. Meskipun semuanya berjalan
                pelan-pelan, tapi selalu berhasil memberi semiliar kesan. Selamat berbagi hangat lewat surat ya,
                Ultimafriends!
            </p> <br> <br>

            <p><b>Writer</b> : Lungayu Endahrum</p>
            <p class="pb-24"><b>Editor</b> : Lungayu Endahrum</p>
        </div>
    </div>

    <x-audiodefault></x-audiodefault>
</body>

</html>
