<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ultimacrews - UMN Radio</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <script src="{{ asset('js/tailwind.js') }}"></script>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <style>
        div::-webkit-scrollbar {
            display: none;
            /* for Chrome, Safari, and Opera */
        }

        .folder-tab {
            border: 2px solid #0a1f63;
            background-color: white;
            color: #0a1f63;
            transition: background-color 0.3s, color 0.3s, transform 0.2s;
        }

        .folder-tab-mobile {
            border: 2px solid #0a1f63;
            background-color: white;
            color: #0a1f63;
            transition: background-color 0.3s, color 0.3s, transform 0.2s;
        }

        .folder-tab.active {
            background-color: #0a1f63;
            color: white;
        }

        .folder-tab-mobile.active {
            background-color: #0a1f63;
            color: white;
        }

        .folder-tab:hover {
            transform: translateY(-5px);
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        }
    </style>
    {{-- <script src="https://kit.fontawesome.com/667eb529ec.js" crossorigin="anonymous"></script> --}}
</head>

<body class="bg-gray-100">
    <x-navigation></x-navigation>
    {{-- Mobile Division Tabs --}}
    <div class="flex-wrap justify-start flex md:hidden w-full">
        <div class="flex flex-wrap fixed w-12 h-screen py-20 drop-shadow-[0_2px_2px_rgba(0,0,0,0.5)] ">
            <button onclick="showDivisionMobile('BPH')" id="tab-mobile-BPH"
                class="folder-tab-mobile rounded-r-md flex-grow text-center font-racingSansOne  w-12 active">BPH</button>
            <button onclick="showDivisionMobile('HRD')" id="tab-mobile-HRD"
                class="folder-tab-mobile rounded-r-md flex-grow text-center font-racingSansOne  w-12">HRD</button>
            <button onclick="showDivisionMobile('PD')" id="tab-mobile-PD"
                class="folder-tab-mobile rounded-r-md flex-grow text-center font-racingSansOne  w-12">PD</button>
            <button onclick="showDivisionMobile('AC')" id="tab-mobile-AC"
                class="folder-tab-mobile rounded-r-md flex-grow text-center font-racingSansOne  w-12">AC</button>
            <button onclick="showDivisionMobile('VC')" id="tab-mobile-VC"
                class="folder-tab-mobile rounded-r-md flex-grow text-center font-racingSansOne  w-12">VC</button>
            <button onclick="showDivisionMobile('DC')" id="tab-mobile-DC"
                class="folder-tab-mobile rounded-r-md flex-grow text-center font-racingSansOne  w-12">DC</button>
            <button onclick="showDivisionMobile('MD')" id="tab-mobile-MD"
                class="folder-tab-mobile rounded-r-md flex-grow text-center font-racingSansOne  w-12">MD</button>
            <button onclick="showDivisionMobile('PR')" id="tab-mobile-PR"
                class="folder-tab-mobile rounded-r-md flex-grow text-center font-racingSansOne  w-12">PR</button>
            <button onclick="showDivisionMobile('MA')" id="tab-mobile-MA"
                class="folder-tab-mobile rounded-r-md flex-grow text-center font-racingSansOne  w-12">MA</button>
            <button onclick="showDivisionMobile('EVT')" id="tab-mobile-EVT"
                class="folder-tab-mobile rounded-r-md flex-grow text-center font-racingSansOne  w-12">EVT</button>
            <button onclick="showDivisionMobile('PRT')" id="tab-mobile-PRT"
                class="folder-tab-mobile rounded-r-md flex-grow text-center font-racingSansOne  w-12">PRT</button>
            <button onclick="showDivisionMobile('MT')" id="tab-mobile-MT"
                class="folder-tab-mobile rounded-r-md flex-grow text-center font-racingSansOne  w-12">MT</button>
            <button onclick="showDivisionMobile('NWS')" id="tab-mobile-NWS"
                class="folder-tab-mobile rounded-r-md flex-grow text-center font-racingSansOne  w-12">NWS</button>
            <button onclick="showDivisionMobile('IT')" id="tab-mobile-IT"
                class="folder-tab-mobile rounded-r-md flex-grow text-center font-racingSansOne  w-12">IT</button>
        </div>
    </div>
    <div class="flex justify-end md:justify-center items-center align-middle pt-20 md:px-16 pb-16">
        <div class="flex justify-center items-center align-middle flex-wrap w-full mt-8 max-w-[85%]">
            <!-- Desktop Division Tabs -->
            <div class="flex flex-wrap justify-center w-full hidden md:flex">
                <div class="flex w-full">
                    <button onclick="showDivision('BPH')" id="tab-BPH"
                        class="folder-tab rounded-t-lg flex-grow text-center font-racingSansOne p-1 text-xl  active">BPH</button>
                    <button onclick="showDivision('HRD')" id="tab-HRD"
                        class="folder-tab rounded-t-lg flex-grow text-center font-racingSansOne p-1 text-xl ">HRD</button>
                    <button onclick="showDivision('PD')" id="tab-PD"
                        class="folder-tab rounded-t-lg flex-grow text-center font-racingSansOne p-1 text-xl ">PD</button>
                    <button onclick="showDivision('AC')" id="tab-AC"
                        class="folder-tab rounded-t-lg flex-grow text-center font-racingSansOne p-1 text-xl ">AC</button>
                    <button onclick="showDivision('VC')" id="tab-VC"
                        class="folder-tab rounded-t-lg flex-grow text-center font-racingSansOne p-1 text-xl ">VC</button>
                    <button onclick="showDivision('DC')" id="tab-DC"
                        class="folder-tab rounded-t-lg flex-grow text-center font-racingSansOne p-1 text-xl ">DC</button>
                    <button onclick="showDivision('MD')" id="tab-MD"
                        class="folder-tab rounded-t-lg flex-grow text-center font-racingSansOne p-1 text-xl ">MD</button>
                    <button onclick="showDivision('PR')" id="tab-PR"
                        class="folder-tab rounded-t-lg flex-grow text-center font-racingSansOne p-1 text-xl ">PR</button>
                    <button onclick="showDivision('MA')" id="tab-MA"
                        class="folder-tab rounded-t-lg flex-grow text-center font-racingSansOne p-1 text-xl ">MA</button>
                    <button onclick="showDivision('EVT')" id="tab-EVT"
                        class="folder-tab rounded-t-lg flex-grow text-center font-racingSansOne p-1 text-xl ">EVT</button>
                    <button onclick="showDivision('PRT')" id="tab-PRT"
                        class="folder-tab rounded-t-lg flex-grow text-center font-racingSansOne p-1 text-xl ">PRT</button>
                    <button onclick="showDivision('MT')" id="tab-MT"
                        class="folder-tab rounded-t-lg flex-grow text-center font-racingSansOne p-1 text-xl ">MT</button>
                    <button onclick="showDivision('NWS')" id="tab-NWS"
                        class="folder-tab rounded-t-lg flex-grow text-center font-racingSansOne p-1 text-xl ">NWS</button>
                    <button onclick="showDivision('IT')" id="tab-IT"
                        class="folder-tab rounded-t-lg flex-grow text-center font-racingSansOne p-1 text-xl ">IT</button>
                </div>
            </div>
            <div
                class="bg-[#D7C17B] drop-shadow-[0_2px_2px_rgba(0,0,0,0.5)]  w-full flex justify-center align-middle items-center md:rounded-tl-none md:rounded-b-lg rounded-l-lg">
                <div id="BPH" class="division-section text-center p-0 w-full">
                    <h1 class="text-6xl font-bold font-sairaStencilOne text-black w-full text-start pt-3 md:px-8 px-3">
                        BPH</h1>
                    <p class="text-black font-saira md:text-lg text-start md:px-8 px-3 pb-1">Mengelola dan memastikan
                        UMN Radio berjalan dengan baik dan aman setiap hari, baik dari segi operasional maupun
                        administratif.</p>

                    <div class="flex flex-wrap justify-center gap-6 p-4">
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/bph/clifford.webp') }}" alt="clifford"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Clifford Aaron</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">General Manager</p>
                            </div>
                        </div>

                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/bph/ciko.webp') }}" alt="ciko"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Classico Joydie
                                </h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Vice General Manager</p>
                            </div>
                        </div>

                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/bph/irene.webp') }}" alt="irene"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Irene Zanetha</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Bendahara</p>
                            </div>
                        </div>

                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/bph/gloria.webp') }}" alt="gloria"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Gloria Wijaya</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Sekretaris</p>
                            </div>
                        </div>

                    </div>
                </div>


                <div id="HRD" class="division-section hidden text-center p-0 w-full">
                    <h1 class="text-6xl font-bold font-sairaStencilOne text-black w-full text-start pt-3 md:px-8 px-3">
                        HRD</h1>
                    <p class="text-black font-saira md:text-lg text-start md:px-8 px-3 pb-1">Mengawasi dan memonitoring
                        seluruh Ultimacrews dari segi behavior dan juga skill.</p>

                    <div class="flex flex-wrap justify-center gap-6 p-4">

                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/hrd/vino.webp') }}" alt="vino"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Delvino Ardi</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Head of HRD</p>
                            </div>
                        </div>

                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/hrd/keycia.webp') }}" alt="keycia"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Keycia Amanda</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Head of HRD Behave</p>
                            </div>
                        </div>

                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/hrd/hammam.webp') }}" alt="hammam"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Bintang Hammam</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Head of HRD Skill</p>
                            </div>
                        </div>

                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/hrd/delgo.webp') }}" alt="delgo"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Delbert Go</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Staff HRD Skill</p>
                            </div>
                        </div>

                    </div>
                </div>


                <div id="PD" class="division-section hidden text-center p-0 w-full">
                    <h1
                        class="md:text-6xl text-4xl font-bold font-sairaStencilOne text-black w-full text-start pt-3 md:px-8 px-3">
                        PROGRAM
                    </h1>
                    <p class="text-black font-saira md:text-lg text-start md:px-8 px-3 pb-1">Mengonsepkan dan memimpin tim siar untuk mengeksekusi program spesial UMN Radio</p>

                    <div class="flex flex-wrap justify-center gap-6 p-4">

                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/program/yemima.webp') }}" alt="yemima"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Yemima Wilona</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Program Director, Producer
                                    BILCIN</p>
                            </div>
                        </div>

                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/program/amijah.webp') }}" alt="amijah"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Reniati Noor Q.
                                </h3>
                                <p class="text-xs text-gray-800 w-full max-w-40 font-saira">Assistant Program Director,
                                    Producer BILCIN</p>
                            </div>
                        </div>

                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/program/vina.webp') }}" alt="vina"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Audrey Davina</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Producer SERSAN</p>
                            </div>
                        </div>

                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/program/hana.webp') }}" alt="hana"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Hana Khairunissa
                                </h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Producer MUSIKALITAS</p>
                            </div>
                        </div>

                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/program/faikar.webp') }}" alt="faikar"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Faikar Shakty</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Producer SODA</p>
                            </div>
                        </div>

                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/program/frickson.webp') }}" alt="frickson"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Frickson Sufian
                                </h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Producer CHARTTOPERS</p>
                            </div>
                        </div>

                    </div>
                </div>


                <div id="AC" class="division-section hidden text-center p-0 w-full">
                    <h1
                        class="md:text-6xl text-5xl font-bold font-sairaStencilOne text-black w-full text-start pt-3 md:px-8 px-3">
                        AUDIO
                        CREATIVE
                    </h1>
                    <p class="text-black font-saira md:text-lg text-start md:px-8 px-3 pb-1">Audio Creative memproduksi
                        berbagai
                        kebutuhan audio seperti drama radio, podcast, dan iklan layanan masyarakat, serta menjaga
                        kualitas audio
                        dalam setiap program.</p>

                    <div class="flex flex-wrap justify-center gap-6 p-4">

                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/ac/yosef.webp') }}" alt="yosef"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Yosef Fourentino
                                </h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Head of Audio Creative</p>
                            </div>
                        </div>

                        <!-- Profile Card 2 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/ac/thomas.webp') }}" alt="Thomas Dito"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Thomas Dito</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Audio Creative of BILCIN
                                </p>
                            </div>
                        </div>

                        <!-- Profile Card 3 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/ac/vallen.webp') }}" alt="Vallen Felysia"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Vallen Felysia</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Audio Creative of
                                    CHARTTOPPERS</p>
                            </div>
                        </div>

                        <!-- Profile Card 4 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/ac/rivan.webp') }}" alt="Christoforus Rivan"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Christoforus Rivan
                                </h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Audio Creative of
                                    MUSIKALITAS</p>
                            </div>
                        </div>

                        <!-- Profile Card 5 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/ac/hanief.webp') }}" alt="M Hanief Alif"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">M Hanief Alif</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Audio Creative of SODA</p>
                            </div>
                        </div>

                        <!-- Profile Card 6 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/ac/sam.webp') }}" alt="Samuel Fernandio"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Samuel Fernandtio
                                </h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Audio Creative of SERSAN
                                </p>
                            </div>
                        </div>

                    </div>
                </div>



                <div id="VC" class="division-section hidden text-center p-0 w-full">
                    <h1
                        class="md:text-6xl text-5xl font-bold font-sairaStencilOne text-black w-full text-start pt-3 md:px-8 px-3">
                        VISUAL
                        CREATIVE
                    </h1>
                    <p class="text-black font-saira md:text-lg text-start md:px-8 px-3 pb-1">Bekerja sama dengan
                        berbagai divisi untuk membuat visual yang menarik dengan bantuan software seperti Photoshop,
                        Illustrator dan juga After Effect</p>

                    <!-- Crew Profiles for VISUAL CREATIVE Division -->
                    <div class="flex flex-wrap justify-center gap-6 p-4">

                        <!-- Profile Card 1 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/vc/jess.webp') }}" alt="Jessica"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Jessica</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Head of Visual Creative</p>
                            </div>
                        </div>

                        <!-- Profile Card 2 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/vc/suci.webp') }}" alt="yemima"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Veronika Suci</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Ast. Head Of Visual
                                    Creative</p>
                            </div>
                        </div>

                        <!-- Profile Card 3 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/vc/verene.webp') }}" alt="Verene Oktavia"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Verene Oktavia</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">VC of SERSAN</p>
                            </div>
                        </div>

                        <!-- Profile Card 4 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/vc/vallen.webp') }}" alt="Vallencia Vallerie"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Vallencia Vallerie
                                </h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">VC of BILCIN</p>
                            </div>
                        </div>

                        <!-- Profile Card 5 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/vc/clara.webp') }}" alt="Clara Rosalind"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Clara Rosalind</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">VC of SODA</p>
                            </div>
                        </div>

                        <!-- Profile Card 6 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/vc/shena.webp') }}" alt="Shekina Gloria"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Shekina Gloria</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">VC of MUSIKALITAS</p>
                            </div>
                        </div>

                        <!-- Profile Card 7 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/vc/lala.webp') }}" alt="Jessica Marella"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Jessica Marella
                                </h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">VC of CHARTTOPPERS</p>
                            </div>
                        </div>

                    </div>
                </div>



                <!-- Crew Profiles for Documentation Creative Division -->
                <div id="DC" class="division-section hidden text-center p-0 w-full">
                    <h1
                        class="md:text-6xl text-4xl font-bold font-sairaStencilOne text-black w-full text-start pt-3 md:px-8 px-3">
                        DOCUMENTATION
                        CREATIVE</h1>
                    <p class="text-black font-saira md:text-lg text-start md:px-8 px-3 pb-1">Documentation Creative
                        mendokumentasikan kegiatan UMN Radio dalam bentuk foto dan video, sekaligus menghasilkan konten
                        visual untuk keperluan promosi UMN Radio.</p>

                    <!-- Crew Profiles -->
                    <div class="flex flex-wrap justify-center gap-6 p-4">

                        <!-- Profile Card 1 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/dc/billy.webp') }}" alt="billy"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Christ Billy</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Head Of Documentation
                                    Creative</p>
                            </div>
                        </div>

                        <!-- Profile Card 2 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/dc/wk.webp') }}" alt="wk"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Wizart Keane</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Documentation Creative</p>
                            </div>
                        </div>

                        <!-- Profile Card 3 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/dc/kenny.webp') }}" alt="kenny"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Kenny Rafael</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Documentation Creative</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div id="PR" class="division-section hidden text-center p-0 w-full">
                    <h1
                        class="md:text-6xl text-5xl font-bold font-sairaStencilOne text-black w-full text-start pt-3 md:px-8 px-3">
                        PUBLIC RELATIONS</h1>
                    <p class="text-black font-saira md:text-lg text-start md:px-8 px-3 pb-1">Memelihara nama baik UMN
                        Radio sebagai radio komunitas dan media kampus UMN dengan menjalin hubungan baik kepada pihak
                        internal dan eksternal.</p>
                    <!-- Crew Profiles -->
                    <div class="flex flex-wrap justify-center gap-6 p-4">

                        <!-- Profile Card 1 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/pr/kathrine.webp') }}" alt="mare"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Kathrine</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Head of Public Relations
                                </p>
                            </div>
                        </div>
                        <!-- Profile Card 1 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/pr/econ.webp') }}" alt="mare"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Jason Nicholas</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Ast. Head of Public
                                    Relations</p>
                            </div>
                        </div>
                        <!-- Profile Card 1 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/ma/mare.webp') }}" alt="mare"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Ammara Ghania</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Head of Media Affairs</p>
                            </div>
                        </div>
                        <!-- Profile Card 1 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/event/abel.webp') }}" alt="abel"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Christabell Chalin
                                </h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Head of Event</p>
                            </div>
                        </div>
                        <!-- Profile Card 1 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/partner/joce.webp') }}" alt="joce"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Jocelyn Ancylla
                                </h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Head of Partnership</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div id="MA" class="division-section hidden text-center p-0 w-full">
                    <h1
                        class="md:text-6xl text-5xl font-bold font-sairaStencilOne text-black w-full text-start pt-3 md:px-8 px-3">
                        MEDIA
                        AFFAIRS</h1>
                    <p class="text-black font-saira md:text-lg text-start md:px-8 px-3 pb-1">Media Affairs bertanggung
                        jawab dalam
                        mengelola publikasi media sosial dan email UMN Radio untuk media partner, serta merancang ide
                        dan konsep konten sosial media.</p>
                    <!-- Crew Profiles -->
                    <div class="flex flex-wrap justify-center gap-6 p-4">

                        <!-- Profile Card 1 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/ma/mare.webp') }}" alt="mare"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Ammara Ghania</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Head of Media Affairs</p>
                            </div>
                        </div>

                        <!-- Profile Card 2 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/ma/cecil.webp') }}" alt="cecil"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Cecillia Abbygail
                                </h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Media Affairs Of SERSAN</p>
                            </div>
                        </div>

                        <!-- Profile Card 3 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/ma/bella.webp') }}" alt="bella"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Bella Felisha</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Media Affairs Of BILCIN</p>
                            </div>
                        </div>

                        <!-- Profile Card 4 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/ma/andien.webp') }}" alt="andien"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Chiara Andini</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Media Affairs Of SODA</p>
                            </div>
                        </div>

                        <!-- Profile Card 5 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/ma/haura.webp') }}" alt="haura"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Puan Haura</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Media Affairs Of
                                    MUSIKALITAS</p>
                            </div>
                        </div>

                        <!-- Profile Card 6 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/ma/carla.webp') }}" alt="carla"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Carla Kaditha</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Media Affairs Of
                                    CHARTTOPPERS</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div id="MD" class="division-section hidden text-center p-0 w-full">
                    <h1
                        class="md:text-6xl text-5xl font-bold font-sairaStencilOne text-black w-full text-start pt-3 md:px-8 px-3">
                        MUSIC
                        DIRECTOR
                    </h1>
                    <p class="text-black font-saira md:text-lg text-start md:px-8 px-3 pb-1">Menyusun dan mengkurasi
                        musik keperluan siaran program, playlist UMN Radio, serta menjalin hubungan baik dengan para
                        musisi dan label musik.</p>
                    <!-- Crew Profiles -->
                    <div class="flex flex-wrap justify-center gap-6 p-4">

                        <!-- Profile Card 1 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/md/shannon.webp') }}" alt="shannon"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Shannon Valery</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Head of Music Director</p>
                            </div>
                        </div>

                        <!-- Profile Card 2 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/md/pei.webp') }}" alt="pei"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Helena H. Haryadi
                                </h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Ast. Head of Music
                                    Director, MD of BILCIN</p>
                            </div>
                        </div>

                        <!-- Profile Card 3 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/md/ayu.webp') }}" alt="ayu"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-base w-full max-w-40 font-sairaStencilOne text-black">Lungayu Endahrum</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">MD of MUSIKALITAS</p>
                            </div>
                        </div>

                        <!-- Profile Card 4 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/md/mj.webp') }}" alt="mj"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Marfello Justin
                                </h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">MD of CHARTTOPPERS</p>
                            </div>
                        </div>

                        <!-- Profile Card 5 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/md/rifat.webp') }}" alt="rifat"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Rifat Darwis</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">MD of SODA</p>
                            </div>
                        </div>

                        <!-- Profile Card 6 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/md/nata.webp') }}" alt="nata"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-base w-full max-w-40 font-sairaStencilOne text-black">Serenata Sylvestra
                                </h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">MD of SERSAN</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div id="EVT" class="division-section hidden text-center p-0 w-full">
                    <h1
                        class="md:text-6xl text-5xl font-bold font-sairaStencilOne text-black w-full text-start pt-3 md:px-8 px-3">
                        EVENT
                    </h1>
                    <p class="text-black font-saira md:text-lg text-start md:px-8 px-3 pb-1">Mengonsepkan dan menyusun
                        event, baik event internal dan external UMN Radio.</p>
                    <!-- Crew Profiles for EVENT -->
                    <div class="flex flex-wrap justify-center gap-6 p-4">

                        <!-- Profile Card 1 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/event/abel.webp') }}" alt="abel"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Christabell Chalin
                                </h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Head of Event</p>
                            </div>
                        </div>

                        <!-- Profile Card 2 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/event/oji.webp') }}" alt="oji"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">A. Fakhrurozy</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Event</p>
                            </div>
                        </div>

                        <!-- Profile Card 3 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/event/cipa.webp') }}" alt="cipa"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Aurelia Syifa</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Event</p>
                            </div>
                        </div>

                        <!-- Profile Card 4 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/event/rara.webp') }}" alt="rara"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Khaira Khansa</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Event</p>
                            </div>
                        </div>

                        <!-- Profile Card 5 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/event/martina.webp') }}" alt="martina"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Martina Tandi</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Event</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div id="PRT" class="division-section hidden text-center p-0 w-full">
                    <h1
                        class="md:text-6xl text-4xl font-bold font-sairaStencilOne text-black w-full text-start pt-3 md:px-8 px-3">
                        PARTNERSHIP</h1>
                    <p class="text-black font-saira md:text-lg text-start md:px-8 px-3 pb-1">Menjalin hubungan dengan brand, perusahaan, atau komunitas untuk meningkatkan visibilitas UMN Radio
                    </p>
                    <!-- Crew Profiles for PARTNERSHIP -->
                    <div class="flex flex-wrap justify-center gap-6 p-4">

                        <!-- Profile Card 1 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/partner/joce.webp') }}" alt="joce"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Jocelyn Ancylla
                                </h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Head of Partnership</p>
                            </div>
                        </div>

                        <!-- Profile Card 2 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/partner/ricad.webp') }}" alt="ricad"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-base w-full max-w-40 font-sairaStencilOne text-black">Richard S. Gunawan
                                </h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Partnership</p>
                            </div>
                        </div>

                        <!-- Profile Card 3 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/partner/qinsha.webp') }}" alt="qinsha"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Qinshasya</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Partnership</p>
                            </div>
                        </div>

                        <!-- Profile Card 4 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/partner/dayu.webp') }}" alt="dayu"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Ida Ayu Tretami
                                </h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Partnership</p>
                            </div>
                        </div>

                        <!-- Profile Card 5 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/partner/victor.webp') }}" alt="victor"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Manuel Victor</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Partnership</p>
                            </div>
                        </div>

                    </div>
                </div>


                <div id="MT" class="division-section hidden text-center p-0 w-full">
                    <h1
                        class="md:text-6xl text-4xl font-bold font-sairaStencilOne text-black w-full text-start pt-3 md:px-8 px-3">
                        MAINTENANCE</h1>
                    <p class="text-black font-saira md:text-lg text-start md:px-8 px-3 pb-1">We are Maintenance! Divisi
                        yang berfokus untuk mengoperasikan alat-alat siaran secara langsung dan menjaga kualitas
                        peralatan yang berada dibawah naungan UMN Radio.</p>
                    <!-- Crew Profiles for PROG -->
                    <div class="flex flex-wrap justify-center gap-6 p-4">

                        <!-- Profile Card 1 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/maint/dodo.webp') }}" alt="dodo"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Geraldo Nathanael
                                </h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Head of Maintenance</p>
                            </div>
                        </div>

                        <!-- Profile Card 2 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/maint/darrent.webp') }}" alt="darrent"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Darrent Wijaya</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Maintenance of SERSAN</p>
                            </div>
                        </div>

                        <!-- Profile Card 3 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/maint/chai.webp') }}" alt="chai"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-base w-full max-w-40 font-sairaStencilOne text-black">William Chairuddin
                                </h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Maintenance of BILCIN</p>
                            </div>
                        </div>

                        <!-- Profile Card 4 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/maint/justin.webp') }}" alt="justin"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Justine Leonardo
                                </h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Maintenance of SODA</p>
                            </div>
                        </div>

                        <!-- Profile Card 5 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/maint/pawas.webp') }}" alt="pawas"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Fawwaz Azka</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Maintenance of MUSIKALITAS
                                </p>
                            </div>
                        </div>

                        <!-- Profile Card 6 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/maint/munung.webp') }}" alt="munung"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Angga Surya</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Maintenance of CHARTTOPPERS
                                </p>
                            </div>
                        </div>
                        <!-- Additional profiles for PROG -->
                    </div>
                </div>

                <div id="NWS" class="division-section hidden text-center p-0 w-full">
                    <h1
                        class="md:text-6xl text-5xl font-bold font-sairaStencilOne text-black w-full text-start pt-3 md:px-8 px-3">
                        NEWS</h1>
                    <p class="text-black font-saira md:text-lg text-start md:px-8 px-3 pb-1">Menghasilkan produk berita
                        untuk siaran harian hingga berita tertulis di situs.</p>
                    <!-- Crew Profiles for NWS -->
                    <div class="flex flex-wrap justify-center gap-6 p-4">

                        <!-- Profile Card 1 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/news/viviene.webp') }}" alt="viviene"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Servina Viviene
                                </h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Editor In Chief</p>
                            </div>
                        </div>

                        <!-- Profile Card 2 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/news/nelson.webp') }}" alt="nelson"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Nelson Nathan</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">News</p>
                            </div>
                        </div>

                        <!-- Profile Card 3 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/news/dey.webp') }}" alt="dey"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Denia Eryza</h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">News</p>
                            </div>
                        </div>

                        <!-- Profile Card 4 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/news/willa.webp') }}" alt="willa"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Akwilla Immanuel
                                </h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">News</p>
                            </div>
                        </div>

                        <!-- Profile Card 5 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/news/icil.webp') }}" alt="icil"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Priscilla Victoria
                                </h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">News</p>
                            </div>
                        </div>

                    </div>
                </div>


                <div id="IT" class="division-section hidden text-center p-0 w-full">
                    <h1
                        class="md:text-6xl text-5xl font-bold font-sairaStencilOne text-black w-full text-start pt-3 md:px-8 px-3">
                        IT &
                        SOFTWARE DEV</h1>
                    <p class="text-black font-saira md:text-lg text-start md:px-8 px-3 pb-1">Mengembangkan
                        aplikasi berbasis web, menjaga server streaming, serta melakukan pemeliharaan perangkat lunak,
                        perangkat keras, dan jaringan.
                    </p>
                    <!-- Crew Profiles for IT & SOFTWARE DEVELOPMENT -->
                    <div class="flex flex-wrap justify-center gap-6 p-4">

                        <!-- Profile Card 1 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/it/bon.webp') }}" alt="bon"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Bonifasius Martin
                                </h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">Head of IT & Software
                                    Development</p>
                            </div>
                        </div>

                        <!-- Profile Card 2 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/it/handes.webp') }}" alt="handes"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="w-full max-w-40 font-sairaStencilOne text-black">Merhandes Gunawan
                                </h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">IT & Software Development
                                </p>
                            </div>
                        </div>

                        <!-- Profile Card 3 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/it/acel.webp') }}" alt="acel"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Marcel Jonathan
                                </h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">IT & Software Development
                                </p>
                            </div>
                        </div>

                        <!-- Profile Card 4 -->
                        <div
                            class="bg-[#ffffff] drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] shadow-lg px-4 pt-4 pb-2 w-60 h-[340px] transform hover:rotate-3 transition-transform duration-300">
                            <img src="{{ asset('images/crews/it/lala.webp') }}" alt="lala"
                                class="h-60 w-full mx-auto mb-2 rounded-sm object-contain border border-1 border-gray-400 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] to-slate-500 via-gray-300 from-slate-100">
                            <div class="text-center w-full flex justify-center flex-wrap">
                                <h3 class="text-lg w-full max-w-40 font-sairaStencilOne text-black">Graciella Nathania
                                </h3>
                                <p class="text-sm text-gray-800 w-full max-w-40 font-saira">IT & Software Development
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function showDivision(divisionId) {
            console.log("Button clicked for division:", divisionId);

            // Remove 'active' class from all tabs
            document.querySelectorAll('.folder-tab').forEach(tab => {
                tab.classList.remove('active');
            });

            // Add 'active' class to the clicked tab
            const clickedTab = document.getElementById(`tab-${divisionId}`);
            if (clickedTab) {
                clickedTab.classList.add('active');
            }

            // Hide all sections
            document.querySelectorAll('.division-section').forEach(section => {
                section.classList.add('hidden');
            });

            // Show the selected section
            const selectedSection = document.getElementById(divisionId);
            if (selectedSection) {
                selectedSection.classList.remove('hidden');
            } else {
                console.log("Division ID not found:", divisionId);
            }
        }

        function showDivisionMobile(divisionId) {
            console.log("Button clicked for division:", divisionId);

            // Remove 'active' class from all tabs
            document.querySelectorAll('.folder-tab-mobile').forEach(tab => {
                tab.classList.remove('active');
            });

            // Add 'active' class to the clicked tab
            const clickedTab = document.getElementById(`tab-mobile-${divisionId}`);
            if (clickedTab) {
                clickedTab.classList.add('active');
            }

            // Hide all sections
            document.querySelectorAll('.division-section').forEach(section => {
                section.classList.add('hidden');
            });

            // Show the selected section
            const selectedSection = document.getElementById(divisionId);
            if (selectedSection) {
                selectedSection.classList.remove('hidden');
            } else {
                console.log("Division ID not found:", divisionId);
            }
        }
    </script>
    <x-audiodefault></x-audiodefault>
    <x-footer></x-footer>
</body>

</html>
