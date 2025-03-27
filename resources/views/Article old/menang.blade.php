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
        <img class="pt-10 h-auto md:h-96 w-screen z-0 mb-6" src="{{ asset('images/menang/MENANG (FEATURED).webp') }}"
            alt="">
        <div class="font-poppins text-black mx-6 md:mx-48 text-justify pb-24">
            <div class="text-center mb-6">
                <h1 class="text-2xl text-center font-bold">Koma Berulang: Kita Rayakan Menang
                </h1>
                <small class="text-center">Posted on 23 December 2023</small>
            </div>
            <p class="text-justify ">UMN Radio Gen 12 berakhir. Apakah ini akhir dari cerita kita?
                <br>
                Sebelum makin sedih, <i>let’s take a look back</i> perjalanan panjang yang terasa sekejap ini ya,
                Ultimacrews! Enggak perlu berlama-lama lagi, <i>let’s dig up</i> semua hasil kerja keras Gen 12, ya!
            </p> <br>

            <h3 class="text-xl font-bold">Media Affairs</h3>
            <div class="flex flex-col items-center justify-center text-center">
                <img class="h-32 md:h-72 w-auto z-0" src="{{ asset('images/menang/MENANG (1).webp') }}" alt="">
                <p class="text-sm">Penonton video akun TikTok @umnradio tembus satu juta. (Sumber: TikTok @umnradio)</p>
                <br>
            </div>
            <p class="text-justify">“Tahun ini berhasil memecahkan rekor <i>views</i> TikTok selama UMN Radio berdiri,”
                jelas
                Carla sebagai anggota divisi Media Affairs. <i>Yup</i>, seperti yang bisa Ultimafriends lihat sendiri
                penonton video TikTok di akun @umnradio <i>beneran</i> pecah banget! Dua juta penonton menjadi
                pencapaian terbaik selama perjalanan akun TikTok UMN Radio dibuat. Pencapaian ini
                tentunya berasal dari ide-ide cemerlang Ultimacrews dalam menciptakan konten yang
                menghibur penonton.
            </p> <br>

            <h3 class="text-xl font-bold">Producer</h3>
            <p class="text-justify">Program, kalau kata orang-orang menjadi ujung tombak dari UMN Radio. Di balik itu,
                tentunya tidak asing dengan segudang lika-liku yang mewarnai hari-hari Producer. Mengudara
                terus selama dua paruh, dari Senin sampai Jumat semuanya berkat Produser-produser keren di
                UMN Radio Gen 12.
                <br>
                “Kita semua <i>bener-bener ngedukung</i> satu sama lain,” ujar Rivan, salah satu Producer yang
                enggak <i>muluk-muluk</i>. Bagi Producer, ketika semua program bisa berjalan dengan minim
                permasalahan selama setahun menjadi sebuah kebanggaan tersendiri. Terutama ketika seluruh
                anggota divisinya bisa saling mendukung dan menjaga profesionalitas dalam bekerja.
            </p> <br>

            <h3 class="text-xl font-bold">IT & Website</h3>
            <p class="text-justify">Mungkin ini menjadi terkesan seperti rahasia dapur, kalau <i>website</i> UMN Radio
                pernah
                mengalami sedikit kendala. <i>Tapi</i>, berkat tangan ajaib teman-teman Divisi IT & Website,
                semuanya berhasil dibereskan dalam waktu kurang lebih 3 minggu! Untung saja cepat
                tertangani dan jadwal <i>on air</i> tidak terganggu. Memang seperti pesulap sih, divisi IT & Website
                ini!
            </p> <br>

            <h3 class="text-xl font-bold">Maintenance</h3>
            <p class="text-justify">Studio UMN Radio enggak bisa berjalan kalau bukan karena bantuan dari Maintenance.
                Ibaratnya, merekalah penjaga studio beserta seperangkat alat tempur siar. Ada yang spesial dari
                Maintenance Gen 12, yaitu kemajuan perlengkapan yang dimiliki sehingga bisa meningkatkan kualitas audio
                yang memuaskan bagi Ultimafriends. Jadi, dijamin deh kualitas suara UMN Radio <i>is improving a lot</i>!
            </p> <br>

            <h3 class="text-xl font-bold">Partnership</h3>
            <p class="text-justify">Partnership juga dengan bangga memperkenalkan berbagai macam hasil kerja sama dengan
                klien-klien. Target dua paruh berhasil dicapai, bahkan dua kali lipatnya! Apa enggak keren
                banget <i>nih</i> Ultimafriends? Enggak cuma berhasil <i>deal</i> dengan klien yang luar biasa, tetapi
                teman-teman Partnership juga berhasil menjalankan semua kerja samanya dengan lancar.
                Kalau boleh curhat dikit, reporter-reporter sih sampai kebanjiran liputan klien dari Partnership!
            </p> <br>

            <h3 class="text-xl font-bold">Event</h3>
            <p class="text-justify">Radioactive. Pasti enggak asing di telinga Ultimafriends deh! <i>Tapi</i>, pada tahu
                enggak
                siapa orang-orang hebat di baliknya? Jawabannya adalah Divisi Event! Mulai dari yang <i>ngonsepin</i>
                acaranya, mempersiapkan segalanya, melaksanakannya di Hari-H, hingga mengevaluasi acara
                semua diborong oleh teman-temen Event. Membawakan konsep yang segar dan <i>fun</i> menjadi
                kunci dari kesuksesan Radioactive 2023. Berhasil menghadirkan band ternama Lomba Sihir,
                90hp, Laidback Horses, Karaokemon, dan lainnya. Radioactive dihadiri oleh lebih dari 300
                penonton yang memenuhi lapangan parkir UMN.
            </p> <br>

            <h3 class="text-xl font-bold">Music Director</h3>
            <p class="text-justify">Keluarga. Menjadi satu kata yang melebihi segala pencapaian luar biasa Music
                Director di Gen 12. Ultimafriends <i>dengerin</i> enggak pas Jebung main ke studio untuk siaran
                Musikalitas?
                Enggak cuma Jebung, <i>tapi</i> masih ada Syahravi, Vintonic, Alsa Aqilah, dan 40 lebih artis
                lainnya yang pernah diundang dan datang ke studio UMN Radio untuk siaran. “Dari <i>bond</i>, kita
                jadi bisa raih lebih banyak <i>achievement</i>,” tambah Helena dari Music Director. Memang kunci
                kesuksesannya ada di hubungan yang erat antar anggota.
            </p> <br>

            <h3 class="text-xl font-bold">Audio Creative</h3>
            <p class="text-justify">Siapa di sini yang masih belum pernah buka U-Podcast di Spotify? Hasil kerjanya
                teman-teman. Audio Creative yang super menarik bikin kita enggak berhenti <i>dengerin</i>, semuanya ada
                di U-
                Podcast. Enggak kalah keren, ada 4 episode UMN Radio Drama (URD) yang berhasil diproduksi dan dirilis.
                Semua episodenya wajib <i>didengerin</i> karena mulai dari menyentuh
                sampai menegangkan ada! Benar-benar membangun <i>theater of mind</i> pendengar deh. Magis
                banget semua karya teman-teman Audio Creative.
            </p> <br>

            <h3 class="text-xl font-bold">Digital Creative</h3>
            <p class="text-justify">Ultimafriends, tahu enggak sih, kalau setiap poster yang muncul di akun Instagram
                @umnradio
                itu hasil keringat dan sentuhan teman-teman Digital Creative? Bisa menghasilkan poster setiap
                minggunya dengan <i>motion graphic</i> betul-betul luar biasa! Menjadi pertama kalinya Divisi
                Digital Creative Gen 12 berhasil mengunggah <i>television commercial</i> (TVC) program ke
                Instagram Reels. Lebih mencengangkannya lagi adalah penontonnya yang tembus 100 ribu!
                Enggak selesai di situ aja, apresiasi kepada Digital Creative juga terpancar dari cakepnya
                <i>design</i> stiker <i>merchandise</i>. Reporter sih enggak meragukan lagi, stikernya <i>beneran</i>
                bagus!
            </p> <br>

            <h3 class="text-xl font-bold">Public Relations</h3>
            <p class="text-justify">Gen 12 ini, Public Relations berhasil menjalin kerja sama dengan Synchronize Radio,
                loh!
                Bentuk kerja samanya adalah Ultimacrews mendapatkan kesempatan untuk siaran di radionya
                Synchronize. Pengalaman ini sangat menyenangkan dan menjadi pengalaman baru yang begitu
                mengesankan.
                <br>
                Enggak hanya itu, terima kasih sebesar-besarnya kepada Public Relations yang memberikan
                apresiasi kepada seluruh Ultimacrews di setiap akhir paruh. Kegiatan apresiasi ini disebut
                UMN Radio Wrapped dan menjadi program kerja yang belum pernah ada sebelumnya. Tujuan
                diadakannya UMN Radio Wrapped adalah untuk mengapresiasi setiap kerja keras Ultimacrews
                yang sudah berjuang bersama untuk UMN Radio. Mulia sekali ya Public Relations ini!
            </p> <br>

            <h3 class="text-xl font-bold">Human Resource Development (HRD)</h3>
            <p class="text-justify">Enggak punya pengalaman dalam suatu bidang tertentu, bukan berarti akan selalu
                berujung dengan kegagalan. Begitulah yang dibuktikan oleh teman-teman HRD, ketika tidak ada
                pengalaman bukan menjadi penghambat kesuksesan mereka. Bahkan bagi teman-teman HRD,
                tidak punya pengalaman dimanfaatkan sebagai tujuan untuk belajar bersama-sama dan malah
                mempererat satu sama lain.
                <br>
                Setelah melewati berbagai terpaan badai, HRD tetap berdiri kokoh untuk selalu menemani
                setiap Ultimacrews yang sedang membutuhkan tempat bercerita. Seperti yang Ultimafriends
                ketahui, HRD bisa menjadi gelas kosong yang kita isi kapan pun dan dalam hal apa pun.
                Bahkan kalau Ultimacrews masih meragukan kemampuan dirinya, HRD siap membantu
                memberi pencerahan. Apresiasi luar biasa patut diberikan kepada HRD yang selalu ada untuk
                setiap Ultimacrews!
            </p> <br>

            <h3 class="text-xl font-bold">Badan Pengurus Harian (BPH)</h3>
            <p class="text-justify">Terakhir dan yang paling dinanti, jantung dari UMN Radio Gen 12, yaitu Badan
                Pengurus
                Harian (BPH). Berjalannya UMN Radio Gen 12 tidak lepas dari kerja sama yang luar biasa
                antara BPH dan Kabinet. Semuanya bersinergi dan saling mengisi posisinya masing-masing.
                Menjadi pencapaian tersendiri bagi BPH ketika mimpi studi banding bisa tergapai. UMN Radio
                akhirnya melakukan studi banding dengan Fourtyfive Radio dan Radio Institut Perbanas FM
                (IPFM) secara <i>offline</i>!
            </p> <br>
            <br>
            <p class="text-justify">Mungkin benar Gen 12 tutup buku, tetapi buku jurnal perjalanan ini akan terus dibawa
                di hati
                masing-masing Ultimacrews. Enggak mudah untuk mencapai titik perjalanan setahun ini.
                Segala batu, kerikil, hingga badai sudah pernah menerpa setiap Ultimacrews. Namun, itu yang
                akan membuat kami semakin kuat dan punya batu loncatan untuk ke depannya.
                <br>
                Selamat Ultimacrews Gen 12, kita berhasil mencapai garis akhir. Satu tahun untuk selamanya
                ya, Crews.
            </p>
        </div>
    </div>

    <x-audiodefault></x-audiodefault>
</body>

</html>
