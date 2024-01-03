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
        <img class="pt-10 h-auto md:h-96 w-screen z-0 mb-6" src="{{ asset('images/semoga/SEMOGA (FEATURED).webp') }}"
            alt="">
        <div class="font-poppins text-black mx-6 md:mx-48 text-justify">
            <div class="text-center mb-6">
                <h1 class="text-2xl text-center font-bold">SEMOGA SEMBUH : CERITA JATUH DAN TUMBUH IDGITAF
                </h1>
                <small class="text-center">Posted on 15 December 2023</small>
            </div>
            <p class="text-justify ">“Takut tambah dewasa,<br>
                takut aku kecewa <br>
                takut tak seindah yang kukira”
                <br><br>
                Siapa, nih, yang baca sambil nyanyi? Emang <i>sounds familiar</i> ya, Ultimafriends? Sebuah kutipan
                lirik dari
                lagu “Takut” milik Idgitaf (biasa disapa Gita), yang baru-baru ini lagi naik daun banget, nih!
                <br>
                Setelah sukses dengan “Takut” dan beberapa <i>single</i> lainnya, Gita akhirnya merilis debut <i>mini
                    album</i>-nya
                yang berjudul “Semoga Sembuh” pada 21 Januari 2022. Wah, kira-kira sembuh dari apa ya, Ultimafriends?
                <br>
                Nah di mini album ini Gita berkisah tentang jatuh, tumbuh, dan sembuh yang ia alami pada tahun 2021.
                <br>
                “Sebenernya, secara garis besar, lagu-lagu di EP ini merupakan cerita aku di tahun 2021, di mana aku
                menghadapi momen yang wow dan gila. Jatuh iya, bahagia juga. Semua emosi kecampur di situ.” kata Gita
                dalam jumpa pers virtual pada Kamis, 20 Januari lalu.

            </p> <br>

            <div class="flex flex-col items-center justify-center text-center">
                <img class="h-32 md:h-72 w-auto z-0" src="{{ asset('images/semoga/SEMOGA (1).webp') }}" alt="">
                <p class="text-sm">Seru banget, nih, tiap Gita cerita! (Foto : Lungayu Endahrum)</p><br>
            </div>

            <p>Kelima lagu dalam <i>mini album</i> ini disusun berurutan, yang seakan-akan menggambarkan
            <p>five steps of grief</p> yang dilalui Gita. <i>Let’s dig it deeper</i>, yuk, Ultimafriends!
            </p><br>

            <h3 class="text-xl font-bold">01. Berlagak Bahagia</h3>
            <p><i>Mini album</i> “Semoga Sembuh” ini dibuka dengan <i>track</i> “Berlagak Bahagia”. Dari judulnya aja,
                udah bisa
                kebayang gimana isi lagunya ya, Ultimafriends. Pokoknya penuh dengan <i>denial</i> dan <i>anger</i>,
                deh!
                “Berlagak Bahagia itu kaya aku emosi. Kenapa gua sedih, kenapa gua pura-pura. Terus aku marah karena
                semua orang kaya ga ngerti perasaan aku. Jadi aku menutup diri.” jelas Gita.
            </p> <br>

            <h3 class="text-xl font-bold">02. Sekuat Sesakit</h3>
            <p><i>Track</i> kedua diisi dengan lagu “Sekuat Sesakit” yang belum pernah dirilis sebelumnya, loh,
                Ultimafriends!
                Dalam proses penulisan lirik lagu ini, Gita banyak mengambil insight dari teman-teman terdekatnya.
                <i>This
                    song radiates the “it's okay, you are not alone” energy!</i>
                <br>
                <i>For your information</i>, “Seperti tupai yang melompat, pasti akan jatuh, tembok pertahananku rubuh”
                adalah
                lirik favorit Gita di lagu “Sekuat Sesakit”. Bahkan, Gita masih tidak menyangka kalau dia bisa menemukan
                potongan kalimat tersebut. <i>Well</i>, lirik tersebutnya memang <i>catchy</i> abis ya, Ultimafriends!
            </p> <br>

            <h3 class="text-xl font-bold">03. Takut</h3>
            <p>Nah, <i>track</i> ketiga dari mini album “Semoga Sembuh” adalah lagu Gita yang paling populer, nih,
                Ultimafriends! Apa lagi kalau bukan, “Takut”, lagu yang udah didengarkan 13 juta kali di salah satu
                <i>platform music streaming</i>. Di lagu ini, bisa diibaratkan Gita sedang ada di tahap
                <i>bargaining</i> dan
                <i>depression</i>. Full of <i>self-talk</i> and <i>self-contemplation</i> gitu, deh!
            </p> <br>

            <h3 class="text-xl font-bold">04. Kasur Tidur</h3>
            <p>Track keempat lagi-lagi diisi oleh lagu yang belum pernah dirilis sebelumnya, yaitu Kasur Tidur. <i>The
                    title speaks for itself</i>. Lagu ini memang diciptakan oleh Gita untuk mengapresiasi kasur
                tidurnya, loh!
                <br>
                Menurut Gita, kasur adalah salah satu hal yang <i>super underrated</i>, padahal kasur adalah saksi bisu
                jatuh
                bangun kehidupan dan jadi tujuan akhir setiap orang. Di lagu ini, bisa dikatakan Gita sudah masuk ke
                tahap <i>acceptance, which means</i> Gita mulai bisa berdamai dengan segala permasalahannya. Menarik
                banget,
                ya!
                <br>
                Lagu “Kasur Tidur” ini ternyata bukan cuma bercerita tentang kasur, loh, Ultimafriends. Ketika membuat
                lagu ini, Gita menyadari bahwa ada kemiripan antara kasur dan Tuhan. Gita merasa Tuhan adalah bentuk
                pertolongan yang lebih besar dari kasur.
                <br>
                “Jadi, anggaplah kalo di tempat tidur itu kita kaya lagi nge-charge (energi). Itu sama halnya ketika
                kita lagi doa. Nah, jadi aku menemukan momen di mana aku kaya lagi nge-charge diri aku disaat lagi doa,
                sama kaya ketika aku lagi tidur.” jelas Gita.
            </p> <br>

            <h3 class="text-xl font-bold">05. Semoga Sembuh</h3>
            <p>
                Terakhir, <i>track</i> kelima diisi lagu yang jadi gacoannya Gita di <i>mini album</i> ini, yaitu
                “Semoga Sembuh”.
                Lagu ini jadi <i>focus track</i> di <i>mini album</i> “Semoga Sembuh”, loh, Utimafriends! Enggak heran,
                ya, kalau
                judul lagu ini akhirnya diangkat jadi judul <i>mini album</i>-nya.
                <br>
                Melalui lagu “Semoga Sembuh”, Gita ingin mengajak pendengarnya untuk sama-sama bisa bertumbuh dan
                sembuh. Uniknya, di lagu “Semoga Sembuh”, ada suara orang-orang yang ikut bernyanyi. <i>Vibes</i>-nya
                bener-bener mengajak pendengar untuk ikutan sembuh. <i>Meaningful</i> banget, ya.
            </p> <br>


            <div class="flex flex-col items-center justify-center text-center">
                <img class="h-32 md:h-72 w-auto z-0" src="{{ asset('images/semoga/SEMOGA (2).webp') }}" alt="">
                <p class="text-sm">Artwork mini album “Semoga Sembuh”</p><br>
            </div>

            <p>Bukan Gita namanya kalau enggak bercerita lewat karyanya. Setelah bercerita lewat lima lagu di <i>mini album</i>
                "Semoga Sembuh", Gita juga bercerita lewat <i>artwork</i> dari <i>mini album</i> ini. Ada tiga elemen di <i>artwork mini
                album</i> ini, yaitu bunga, kupu-kupu, dan tangga. Bunga dan kupu-kupu diibaratkan harapan dan kedamaian.
                Sedangkan, tangga menggambarkan naik turun kehidupan.
                <br>
                "Tangga itu menggambarkan pijakan hidup seseorang. Nah, kalo temen-temen bisa lihat, di <i>artwork</i> itu ada
                tangga yang patah, untuk menggambarkan <i>ups</i> and <i>downs</i>-nya hidup" jelas Gita.
                <br>
                Pada setiap jatuh, selalu ada ruang untuk bertumbuh. Pada setiap luka, selalu ada ruang untuk sembuh.
                Selamat sembuh bareng Idgitaf ya, Ultimafriends!
            </p> <br> <br>

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
