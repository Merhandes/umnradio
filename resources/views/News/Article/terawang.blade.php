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
        <img class="pt-10 h-auto md:h-96 w-screen z-0 mb-6"
            src="{{ asset('images/terawang/TERAWANG (FEATURED).webp') }}" alt="">
        <div class="font-poppins text-black mx-6 md:mx-48 text-justify">
            <div class="text-center mb-6">
                <h1 class="text-2xl text-center font-bold">Koma Berulang: Kita Coba Terawang
                </h1>
                <small class="text-center">Posted on 23 December 2023</small>
            </div>
            <p class="text-justify ">Zodiak mula-mula muncul dari Yunani, dengan nama awal <i>Zoodiacos Cyclos</i> yang berarti
                lingkaran hewan. Zodiak adalah sabuk khayal di langit, yang awalnya hanya terlihat sejumlah
                6 rasi. Hingga akhirnya, dipecah jadi 12 rasi, karena dalam satu tahun terdapat 12 kali bulan
                purnama pada bagian urutan sabuk tersebut.
                <br>
                Nah, tiap zodiak punya kepribadian dan sifatnya masing-masing. Setidaknya, itulah yang
                dipercayai banyak orang. Secara sederhana, zodiak ditentukan berdasarkan tanggal dan bulan
                lahir. But, here comes the surprise! Kali ini, Reporter akan menerawang 12 divisi di UMN
                Radio sebagai sebuah zodiak.
            </p> <br>

            <h3 class="text-xl font-bold">BPH (Cancer)</h3>
            <p class="text-justify">Sifat yang dimiliki BPH sama banget nih, Ultimacrews, dengan sifat zodiak Cancer
                yang penuh
                perasaan, protektif, dan intuitif. Zodiak ini dikenal peduli dengan orang-orang terdekat, kreatif,
                dan sensitif. Sebagai pemimpin teratas di UMN Radio, pasti BPH harus bisa berperan sebagai
                “orang tua” dalam keluarga. Namanya orang tua pasti harus penuh perasaan dan intuitif <i>gak sih</i>, Ultimacrews?
            </p> <br>
            <h3 class="text-xl font-bold">HRD (Gemini)</h3>
            <p class="text-justify">Punya sifat, mudah beradaptasi, komunikatif, suka belajar, dan mudah bergaul, bikin
                HRD jadi divisi yang si paling Gemini! No wonder sih, Ultimacrews. Pekerjaan HRD mengharuskan
                mereka untuk bisa berbaur dan beradaptasi dengan semua Ultimacrews. But, it doesn’t stop
                right there, ya. HRD juga harus komunikatif untuk bisa jadi penengah dan pemberi solusi di
                lingkungan UMN Radio.
            </p> <br>
            <h3 class="text-xl font-bold">Event (Aries)</h3>
            <p class="text-justify">Divisi Event ini memiliki sifat Aries yang energik, percaya diri, dan penuh
                semangat.
                Moreover, Aries ini disebut-sebut sebagai pemimpin alami yang suka tantangan dan cepat
                bertindak. Sifat-sifat tadi sebetulnya merangkum pekerjaan mereka di UMN Radio sih,
                Ultimacrews. Selalu ada tantangan di setiap acara, bikin mereka harus bisa ambil keputusan di
                waktu-waktu genting. Belum lagi, mereka harus menjadi bagian dari kepala dan tangan di acara
                terbesar UMN Radio, yaitu UMN Radioactive. Hats off, deh!
            </p> <br>
            <h3 class="text-xl font-bold">Partnership (Taurus)</h3>
            <p class="text-justify">Divisi Partnership bisa dibilang merupakan Taurus secara natural, sih. Taurus yang
                konsisten,
                tahan banting, dan sabar; itu sifat-sifat yang sesuai dengan pekerjaan Partnership ya,
                Ultimacrews. Sabar dan tahan banting. Hmm... siapa lagi kalau bukan Partnership ketika harus
                berhadapan dengan client? Pastinya mereka menghadapi banyak respon dan kepribadian
                berbeda-beda dari setiap client. Udah kebayang <i>hectic</i>-nya, <i>gak</i>, sih, Ultimacrews?
            </p> <br>
            <h3 class="text-xl font-bold">Program (Leo)</h3>
            <p class="text-justify">Sifat yang percaya diri, berani, murah hati, ditambah kepribadiannya yang suka
                menjadi pusat
                perhatian, penuh semangat, suka bersenang-senang. <i>It describes Program as its best</i>! Dilihat
                dari program-program yang dibawakan sudah bisa ditebak kalau Leo yang sangat cocok dengan
                divisi Program. <i>The centre of UMN Radio’s work</i>, ya program-program spesialnya itu!
            </p> <br>
            <h3 class="text-xl font-bold">Maintenance (Virgo)</h3>
            <p class="text-justify">Siapa yang setuju kalau Maintenance <i>tuh</i> Virgo banget? Si paling bisa diandalkan
                setiap kali
                ada Ultimacres yang membutuhkan bantuan di studio. Belum lagi mereka selalu siap bekerja
                keras untuk merawat rumahnya anak-anak UMN Radio dengan penuh kesempurnaan.
            </p> <br>
            <h3 class="text-xl font-bold">Digital Creative (Libra)</h3>
            <p class="text-justify">Libra merupakan zodiak yang senang bekerja sama dan senang keindahan. Kepribadian
                ini secara tepat menggambarkan divisi Digital Creative, sih, Ultimacrews. Bisa dilihat dari konten-
                konten visual UMN Radio yang selalu <i>pleasing our eyes</i>. Konten itu tentu berangkat dari kerjasama divisi
                Digital Creative yang enggak ada lawan. Digital Creative ini Libra banget deh
                anaknya!
            </p> <br>
            <h3 class="text-xl font-bold">Audio Creative (Scorpio)</h3>
            <p class="text-justify">AC ini sama persis sama sifat Scorpio, Ultimacrews. Scorpio tuh, penuh gairah,
                tekun, dan
                misterius. Pasti Ultimacrews sudah tahu dong, kalau AC ini selalu bekerja di belakang layar.
                Mungkin, kata yang lebih cocok, di belakang suara mungkin ya, Ultimacrews. Jadi enggak
                salah kalau AC ini jadi terkesan misterius. Eits, walaupun misterius gini, mereka tekun dan
                penuh gairah loh, untuk menghasilkan <i>output</i> terbaik di UMN Radio.
            </p> <br>
            <div class="flex flex-col items-center justify-center text-center">
                <img class="h-32 md:h-72 w-auto z-0" src="{{ asset('images/terawang/TERAWANG (1).webp') }}"
                    alt="">
                <p class="text-sm">Sayang banyak-banyak buat Ultimacrews Gen 12!</p><br>
            </div>
            <h3 class="text-xl font-bold">Music Director (Sagittarius)</h3>
            <p class="text-justify">Music Director tuh mirip banget sama Sagittarius, kenapa? Ya, karena jiwanya aja
                petualang, suka kebebasan, dan suka pengetahuan. Anak-anak MD memang terkenal paling bebas lepas,
                sih. Belum lagi, Music Director selalu bertualang menjelajahi musik-musik di dunia, apalagi
                musik lokal ya, Ultimacrews!
            </p> <br>
            <h3 class="text-xl font-bold">IT (Capricorn)</h3>
            <p class="text-justify">Capricorn memiliki kepribadian suka bekerja keras, ambisius, dan praktis. Mirip
                banget nih
                kayak divisi IT yang bekerja keras sama <i>coding</i>-an buat <i>website</i> UMN Radio. Kalau kata
                mereka, kerjaan mereka tuh YTTA banget. Kalau soal ambisius, ada betulnya juga sih. Bisa
                dilihat dari website UMN Radio yang keren itu. <i>They’ve done well</i>, karena bisa melewati
                kerjaan <i>coding</i> yang kelihatannya bikin mumet kan, Ultimacrews!
            </p> <br>
            <h3 class="text-xl font-bold">Media Affairs (Aquarius)</h3>
            <p class="text-justify">MA ini cocok banget sama sifat Aquarius yang inovatif dan suka ide-ide baru. Gimana
                <i>gak</i>,
                Ultimacrews, mereka harus rutin mikirin ide konten yang baru setiap harinya. Selain itu
                Aquarius juga terkenal ramah nih, Ultimacrews. Yah, namanya juga budak konten sudah pasti
                harus bisa jago ajak-ajakin Ultimacrews untuk muncul di konten UMN Radio.
            </p> <br>
            <h3 class="text-xl font-bold">Public Relations (Pisces)</h3>
            <p class="text-justify">Public Relation yang bertugas untuk menjalin hubungan dengan pihak eksternal sudah
                pasti
                memilik sifat suka membantu dan intuitif ya, Ultimacrews. <i>Gak</i> cuma itu, mereka juga kreatif
                dan imajinatif nih, Ultimacrews. Karena mereka selalu memiliki ide dan cara untuk membuat
                kegiatan atau acara yang bisa mempererat hubungan dengan pihak eksternal maupun internal.
            </p> <br>
            <br>
            <p class="text-justify"><i>Please take notes</i>, Utimacrews, bahwa astrologi bukanlah ilmu pasti. Pada akhirnya,
                sifat dan
                kepribadian lo pasti dipengaruhi oleh banyak faktor lain. Jadi, jangan ditelan mentah-mentah
                tentang deskripsi kepribadian divisi berdasarkan Zodiak. <i>Just take it as something comforting</i>!
                <br>
                Kalau menurut lo sendiri, Ultimacrews, kira-kira divisi lo sebenernya cocok sebagai Zodiak
                yang memiliki sifat apa <i>sih</i>?
            </p> <br>
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
