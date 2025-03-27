@extends('layouts.main')

@section('container')
{{-- <title>About Us - UMN Radio</title> --}}
<style>
    div::-webkit-scrollbar {
        display: none;
        /* for Chrome, Safari, and Opera */
    }
</style>
{{-- <body class="h-full bg-white"> --}}
    <div class="w-screen md:w-full h-full overflow-scroll lg:pt-16 pb-16 flex flex-col justify-center">
        <div class="relative">
            <img class="h-72 w-screen md:h-96 md:w-screen z-0 object-cover brightness-[30%]"
                src="{{ asset('images/backgroundnew.webp') }}" alt="" />
            <div class="absolute top-0 w-full flex justify-center align-middle items-center h-full">
                <div class="px-4 py-4 text-center">
                    <h3 class="py-2 font-poppins text-3xl md:text-[70px] text-white font-bold">
                        ABOUT US</h3>
                    <p class="py-2 font-poppins text-base md:text-3xl text-white font-bold">"It's U, It's Music, It's
                        News, It's UMN Radio"</p>
                </div>
            </div>
        </div>

        <div class="overflow-scroll pt-8 md:py-8 px-12 flex flex-wrap items-center justify-evenly">
            <img class="h-52 md:h-96 w-auto" src="{{ asset('images/about/RADIO.webp') }}" alt="">    
            
            <p class="w-full md:w-2/5 py-4 md:py-0 font-poppins text-xs md:text-base text-justify text-black">UMN Radio
                merupakan organisasi media berbasis radio komunitas yang berada di bawah naungan Fakultas Ilmu
                Komunikasi Universitas Multimedia Nusantara. Pertama kali didirikan pada 18 Juli 2011 dengan tagline
                'Inspiring Change for Tomorrow', UMN Radio diharapkan dapat menjadi sarana belajar dan mengasah
                kreativitas mahasiswa UMN dalam menjalankan dan melaksanakan proses manajemen sebuah organisasi media
                kampus dalam bentuk media radio yang mampu membawa dampak positif kepada masyarakat melalui media
                radio.<br>
                <br>UMN Radio beroperasi di Lantai 6, Gedung B, Universitas Multimedia Nusantara dalam kepengurusan
                aktif Generasi 13 yang melibatkan 69 mahasiswa UMN dari berbagai program studi. UMN Radio Generasi 13
                mengangkat tagline operasional "Set The Tune and Raise The Volume" yang menjadi motivasi untuk terus
                melangkah maju membawa operasional UMN Radio ke arah yang lebih baik dalam segala bidang.
            </p>
        </div>

        <div class="w-screen md:w-full h-full overflow-scroll md:py-8 px-12 flex flex-wrap justify-center">
            <div class="font-poppins w-full md:w-2/5 md:px-6 py-4 flex flex-col mx-auto text-center">
                <h1 class="text-2xl md:text-4xl text-black font-bold pb-4">OUR VISION</h1>
                <ul class="text-xs md:text-base text-justify text-black list-disc">
                    <li>Menjadikan UMN Radio sebagai sarana untuk mencapai potensi maksimal dalam berkreasi yang
                        mencakup ide, karya, dan kreativitas Ultimacrews.</li>
                    <li>Menjadikan UMN Radio sebuah media kampus dan radio komunitas kredibel sebagai representatif
                        berbagai suara civitas UMN ke pihak luar lewat penyiaran, musik, berita, dan hiburan yang
                        berkualitas. </li>
                </ul>
            </div>
            <div class="font-poppins w-full md:w-2/5 md:px-6 py-4 flex flex-col mx-auto text-center">
                <h1 class="text-2xl md:text-4xl text-black font-bold pb-4">OUR MISSION</h1>
                <ul class="text-xs md:text-base text-justify text-black list-disc">
                    <li>Memproduksi konten dan berita melalui program yang terpercaya sesuai dengan etika secara
                        berkualitas untuk menjaga eksistensi sebagai media kampus.</li>
                    <li>Menjunjung tinggi rasa profesionalitas dan tanggung jawab terhadap UMN Radio.</li>
                    <li>Membangun lingkungan UMN Radio menjadi nyaman bagi para Ultimacrews demi mencapai potensi yang
                        maksimal.</li>
                    <li>Menjalin hubungan baik dengan sesama kegiatan, organisasi, kepanitiaan ataupun media kampus lain
                        untuk mendorong kolaborasi.</li>
                    <li>Menyalurkan bakat dan mengasah kreatifitas Ultimacrews dari berbagai kegiatan internal maupun
                        eksternal.</li>
                </ul>
            </div>
        </div>



        <div class="bg-biru overflow-scroll py-4 md:py-12 flex flex-wrap items-center justify-center text-white">
            <div class="font-poppins px-8 py-8 md:py-4 flex flex-col text-center">
                <h1 class="text-lg md:text-2xl font-bold">Tagline UMN RADIO</h1>
                <p class="text-sm md:text-lg">"Inspiring Change For Tommorrow"</p>
            </div>
            <div class="bg-white drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] px-4 pt-4 4">
                <img class="h-52 md:h-96 w-auto" src="{{ asset('images/about/GEN13.webp') }}" alt="">
                <p class="font-bold font-nexarust text-center w-full text-biru text-3xl py-4">UMN RADIO GEN 13</p>
            </div>
            <div class="font-poppins px-8 py-8 md:py-4 flex flex-col text-center">
                <h1 class="text-lg md:text-2xl font-bold">Tagline UMN RADIO GEN 13</h1>
                <p class="text-sm md:text-lg">"Set the Tunes and Raise the Volume"</p>
            </div>
        </div>

        <div class="overflow-scroll py-6 md:py-12 px-8 flex flex-row justify-center">
            <iframe class="w-11/12 md:w-1/2 aspect-video" src="https://www.youtube.com/embed/g0FMWNV7tuQ"></iframe>
        </div>

        <h1 class="flex justify-center text-2xl font-bold font-poppins text-black">Contact Us</h1>
        <div class="mx-auto flex flex-wrap content-center md:py-2 px-8">
            <div class="flex space-x-4 mt-4 sm:mt-0">
                {{-- <a target="_" href="mailto:daniel.nicholas@umn.ac.id" class="text-black no-underline">
                    <div class="flex">
                        <img src="{{ asset('assets/gmail.webp') }}" alt="line"
                            class="w-8 md:w-12 object-cover mb-1 mr-1">
                    </div>
                </a> --}}
                <a target="_" href="http://line.me/ti/p/~@umnradio#~" class="text-black no-underline">
                    <div class="flex">
                        <img src="{{ asset('assets/line.webp') }}" alt="line"
                            class="w-8 md:w-12 object-cover mb-1 mr-1">
                    </div>
                </a>
                <a target="_" href="https://twitter.com/UMNRADIO" class="text-black no-underline">
                    <div class="flex">
                        <img src="{{ asset('assets/twitter.webp') }}" alt="line"
                            class="w-8 md:w-12 object-cover mb-1 mr-1">
                    </div>
                </a>
                <a target="_" href="https://www.youtube.com/channel/UCeVl4fsOVkU7yVCurgoq5Lg"
                    class="text-black no-underline">
                    <div class="flex">
                        <img src="{{ asset('assets/youtube.webp') }}" alt="line"
                            class="w-8 md:w-12 object-cover mb-1 mr-1">
                    </div>
                </a>
                <a target="_" href="https://www.instagram.com/umnradio/" class="text-black no-underline">
                    <div class="flex">
                        <img src="{{ asset('assets/instagram.webp') }}" alt="line"
                            class="w-8 md:w-12 object-cover mb-1 mr-1">
                    </div>
                </a>
            </div>
        </div>

        {{-- <div class="overflow-scroll py-4 px-8 flex flex-row justify-center">
            <h1 class="text-xs md:text-base font-poppins text-black justify-center text-center">For partnership inquiries, please contact
                <a href="mailto:umnradio.partnership@gmail.com" class="text-black font-bold underline">umnradio.partnership@gmail.com</a>
            </h1>
        </div> --}}
        <div class="w-full px-4 md:px-4 text-black font-poppins flex flex-wrap justify-center gap-4 pb-12 pt-6">
            <div class="flex justify-start align-middle items-center flex-col w-96 flex-wrap">
                <h1 class="text-lg font-bold font-poppins">Public Relations/PR</h1>
                <a target="_" href="mailto:umnradio.pr@gmail.com" class="">
                    <button
                        class="text-black font-bold underline bg-white drop-shadow-[0_5px_5px_rgba(0,0,0,0.25)] rounded px-2 py-1 hover:scale-105 ease-in-out duration-75">umnradio.pr@gmail.com</button>
                </a>
                <p class="w-full text-center">Acara public relations, seperti company visit, study banding, dan lainnya.</p>
            </div>
            <div class="flex justify-start align-middle items-center flex-col w-96 flex-wrap">
                <h1 class="text-lg font-bold font-poppins">Media Affairs</h1>
                <a target="_" href="mailto:media.umnradio@umn.ac.id" class="">
                    <button
                        class="text-black font-bold underline bg-white drop-shadow-[0_5px_5px_rgba(0,0,0,0.25)] rounded px-2 py-1 hover:scale-105 ease-in-out duration-75">media.umnradio@umn.ac.id</button>
                </a>
                <p class="w-full text-center">Kerjasama media partner, seperti konser musik, lomba, seminar, dan acara lainnya.</p>
            </div>
            <div class="flex justify-start align-middle items-center flex-col w-96 flex-wrap">
                <h1 class="text-lg font-bold font-poppins">Partnership</h1>
                <a target="_" href="mailto:umnradio.partnership@gmail.com" class="">
                    <button
                        class="text-black font-bold underline bg-white drop-shadow-[0_5px_5px_rgba(0,0,0,0.25)] rounded px-2 py-1 hover:scale-105 ease-in-out duration-75">umnradio.partnership@gmail.com</button>
                </a>
                <p class="w-full text-center">Kerjasama brand & sponsorship.</p>
            </div>
            <div class="flex justify-start align-middle items-center flex-col w-96 flex-wrap">
                <h1 class="text-lg font-bold font-poppins">Music Director</h1>
                <a target="_" href="mailto:md.umnradio@gmail.com" class="">
                    <button
                        class="text-black font-bold underline bg-white drop-shadow-[0_5px_5px_rgba(0,0,0,0.25)] rounded px-2 py-1 hover:scale-105 ease-in-out duration-75">md.umnradio@gmail.com</button>
                </a>
                <p class="w-full text-center">Informasi press release atau new music updates.</p>
            </div>
            <div class="flex justify-start align-middle items-center flex-col w-96 flex-wrap">
                <h1 class="text-lg font-bold font-poppins">Dosen Pembimbing</h1>
                <a target="_" href="mailto:daniel.nicholas@umn.ac.id" class="">
                    <button
                        class="text-black font-bold underline bg-white drop-shadow-[0_5px_5px_rgba(0,0,0,0.25)] rounded px-2 py-1 hover:scale-105 ease-in-out duration-75">daniel.nicholas@umn.ac.id</button>
                </a>
                <p class="w-full text-center">Dosen pembimbing UMN Radio.</p>
            </div>
        </div>
    </div>
{{-- </body> --}}
@endsection
