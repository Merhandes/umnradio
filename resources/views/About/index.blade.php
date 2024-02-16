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
    <x-navigation></x-navigation>

    <div class="w-screen md:w-full h-full overflow-scroll pt-16 pb-16 flex flex-col justify-center">
        <div class="relative">
            <img class="h-96 md:w-screen z-0 object-cover brightness-[30%]" src="{{ asset('images/backgroundnew.webp') }}"
                alt="" />
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 px-2 py-2">
                <div class="px-4 py-4 text-center">
                    <h3 class="py-2 font-poppins text-3xl md:text-[70px] text-white font-bold">
                        ABOUT US</h3>
                    <p class="py-2 font-poppins text-base md:text-3xl text-white font-bold">"It's U, It's Music, It's News, It's UMN Radio"</p>
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
    </div>



    <x-audiodefault></x-audiodefault>
</body>

</html>
