<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMN Radio Crews</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">


    <style>
        .folder-tab {
            color: white;
            padding: 10px 20px;
            font-weight: bold;
            transition: transform 0.2s;
        }

        .folder-tab:hover {
            transform: translateY(-5px);
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        }
    </style>

</head>

<body class="bg-gray-100">

    <!-- Division Tabs -->
    <div class="flex flex-wrap justify-center bg-200 pb-0 mt-4">
        <div class="flex w-full">
            <button onclick="showDivision('BPH')" class="folder-tab rounded-t-xl flex-grow text-center"
                style="background-color: #E31E24;">BPH</button>
            <button onclick="showDivision('HRD')" class="folder-tab rounded-t-xl flex-grow text-center"
                style="background-color: #F26722;">HRD</button>
            <button onclick="showDivision('PD')" class="folder-tab rounded-t-xl flex-grow text-center"
                style="background-color: #F9DD16;">PD</button>
            <button onclick="showDivision('AC')" class="folder-tab rounded-t-xl flex-grow text-center"
                style="background-color: #6EB43F;">AC</button>
            <button onclick="showDivision('VC')" class="folder-tab rounded-t-xl flex-grow text-center"
                style="background-color: #43B02A;">VC</button>
            <button onclick="showDivision('DC')" class="folder-tab rounded-t-xl flex-grow text-center"
                style="background-color: #41C3AC;">DC</button>
            <button onclick="showDivision('MA')" class="folder-tab rounded-t-xl flex-grow text-center"
                style="background-color: #1AB7EA;">MA</button>
            <button onclick="showDivision('MD')" class="folder-tab rounded-t-xl flex-grow text-center"
                style="background-color: #005BAB;">MD</button>
            <button onclick="showDivision('EVNT')" class="folder-tab rounded-t-xl flex-grow text-center"
                style="background-color: #0C50C2;">EVNT</button>
            <button onclick="showDivision('PRTN')" class="folder-tab rounded-t-xl flex-grow text-center"
                style="background-color: #6C4E9D;">PRTN</button>
            <button onclick="showDivision('MNTE')" class="folder-tab rounded-t-xl flex-grow text-center"
                style="background-color: #8E44AD;">MNTE</button>
            <button onclick="showDivision('NEWS')" class="folder-tab rounded-t-xl flex-grow text-center"
                style="background-color: #C2185B;">NEWS</button>
            <button onclick="showDivision('IT')" class="folder-tab rounded-t-xl flex-grow text-center"
                style="background-color: #9933FF;">IT</button>
        </div>
    </div>

    <div id="BPH" class="division-section text-center py-8">
        <h1 class="text-4xl font-bold">BPH</h1>
        <p class="text-gray-700 max-w-2xl mx-auto mb-6 text-left">Description for BPH division.</p>

        <div class="flex flex-wrap justify-center gap-6 px-4">

            <div
                class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/bph/clifford.webp')}}" alt="clifford" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center">
                    <h3 class="font-bold text-lg">Clifford Aaron</h3>
                    <p class="text-sm text-gray-600 w-32">General Manager</p>
                </div>
            </div>

            <div
                class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/bph/ciko.webp')}}" alt="ciko" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center">
                    <h3 class="font-bold text-lg">Classico Joydie</h3>
                    <p class="text-sm text-gray-600 w-32">Vice General Manager</p>
                </div>
            </div>

            <div
                class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/bph/irene.webp')}}" alt="irene" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center">
                    <h3 class="font-bold text-lg">Irene Zanetha</h3>
                    <p class="text-sm text-gray-600 w-32">Bendahara</p>
                </div>
            </div>

            <div
                class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/bph/gloria.webp')}}" alt="gloria" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center">
                    <h3 class="font-bold text-lg">Gloria Wijaya</h3>
                    <p class="text-sm text-gray-600 w-32">Sekretaris</p>
                </div>
            </div>

        </div>
    </div>


    <div id="HRD" class="division-section hidden text-center py-8">
        <h1 class="text-4xl font-bold">HRD</h1>
        <p class="text-gray-700 max-w-2xl mx-auto mb-6 text-left">Description for HRD division.</p>

        <div class="flex flex-wrap justify-center gap-6 px-4">

            <div
                class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/hrd/vino.webp')}}" alt="vino" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center">
                    <h3 class="font-bold text-lg">Delvino Ardi</h3>
                    <p class="text-sm text-gray-600 w-32">Head of HRD</p>
                </div>
            </div>

            <div
                class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/hrd/keycia.webp')}}" alt="keycia" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center">
                    <h3 class="font-bold text-lg">Keycia Amanda</h3>
                    <p class="text-sm text-gray-600 w-32">Head of HRD Behave</p>
                </div>
            </div>

            <div
                class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/hrd/hammam.webp')}}" alt="hammam" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center">
                    <h3 class="font-bold text-lg">Bintang Hammam</h3>
                    <p class="text-sm text-gray-600 w-32">Head of HRD Skill</p>
                </div>
            </div>

            <div
                class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/hrd/delgo.webp')}}" alt="delgo" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center">
                    <h3 class="font-bold text-lg">Delbert Go</h3>
                    <p class="text-sm text-gray-600 w-32">Staff HRD Skill</p>
                </div>
            </div>

        </div>
    </div>


    <div id="PD" class="division-section hidden text-center py-8">
        <h1 class="text-4xl font-bold">PROGRAM</h1>
        <p class="text-gray-700 max-w-2xl mx-auto mb-6 text-left">Description for PROG division.</p>

        <div class="flex flex-wrap justify-center gap-6 px-4">

            <div
                class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/program/yemima.webp')}}" alt="yemima" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Yemima Wilona</h3>
                    <p class="text-sm text-gray-600 w-32">Program Director, Producer BILCIN</p>
                </div>
            </div>

            <div
                class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/program/amijah.webp')}}" alt="amijah" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Amizah</h3>
                    <p class="text-sm text-gray-600 w-32">Assistant Program Director, Producer BILCIN</p>
                </div>
            </div>

            <div
                class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/program/vina.webp')}}" alt="vina" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Audrey Davina</h3>
                    <p class="text-sm text-gray-600 w-32">Producer SERSAN</p>
                </div>
            </div>

            <div
                class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/program/hana.webp')}}" alt="hana" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Hana Khairunissa</h3>
                    <p class="text-sm text-gray-600 w-32">Producer MUSIKALITAS</p>
                </div>
            </div>

            <div
                class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/program/faikar.webp')}}" alt="faikar" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Faikar Shakty</h3>
                    <p class="text-sm text-gray-600 w-32">Producer SODA</p>
                </div>
            </div>

            <div
                class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/program/frickson.webp')}}" alt="frickson" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Frickson Sufian</h3>
                    <p class="text-sm text-gray-600 w-32">Producer CHARTTOPERS</p>
                </div>
            </div>

        </div>
    </div>


    <div id="AC" class="division-section hidden text-center py-8">
        <h1 class="text-4xl font-bold">AUDIO CREATIVE</h1>
        <p class="text-gray-700 max-w-2xl mx-auto mb-6 text-left">Description for AC division.</p>
    
        <div class="flex flex-wrap justify-center gap-6 px-4">
    
            <div
                class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/ac/yosef.webp')}}" alt="yosef" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Yosef Fourentino</h3>
                    <p class="text-sm text-gray-600 w-32">Head of Audio Creative</p>
                </div>
            </div>
    
            <!-- Profile Card 2 -->
            <div
                class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/ac/thomas.webp')}}" alt="Thomas Dito" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Thomas Dito</h3>
                    <p class="text-sm text-gray-600 w-32">Audio Creative</p>
                </div>
            </div>
    
            <!-- Profile Card 3 -->
            <div
                class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/ac/vallen.webp')}}" alt="Vallen Felysia" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Vallen Felysia</h3>
                    <p class="text-sm text-gray-600 w-32">Audio Creative</p>
                </div>
            </div>
    
            <!-- Profile Card 4 -->
            <div
                class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/ac/rivan.webp')}}" alt="Christoforus Rivan" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Christoforus Rivan</h3>
                    <p class="text-sm text-gray-600 w-32">Audio Creative</p>
                </div>
            </div>
    
            <!-- Profile Card 5 -->
            <div
                class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/ac/hanief.webp')}}" alt="M Hanief Alif" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">M Hanief Alif</h3>
                    <p class="text-sm text-gray-600 w-32">Audio Creative</p>
                </div>
            </div>
    
            <!-- Profile Card 6 -->
            <div
                class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/ac/sam.webp')}}" alt="Samuel Fernandio" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Samuel Fernandtio</h3>
                    <p class="text-sm text-gray-600 w-32">Audio Creative</p>
                </div>
            </div>
    
        </div>
    </div>
    


    <div id="VC" class="division-section hidden text-center py-8">
        <h1 class="text-4xl font-bold">VISUAL CREATIVE</h1>
        <p class="text-gray-700 max-w-2xl mx-auto mb-6 text-left">Description for VC division.</p>
    
        <!-- Crew Profiles for VISUAL CREATIVE Division -->
        <div class="flex flex-wrap justify-center gap-6 px-4">
    
            <!-- Profile Card 1 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/vc/jess.webp')}}" alt="Jessica" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Jessica</h3>
                    <p class="text-sm text-gray-600 w-32">Head of Visual Creative</p>
                </div>
            </div>
    
            <!-- Profile Card 2 -->
            <div
                class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/vc/suci.webp')}}" alt="yemima" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Veronika Suci</h3>
                    <p class="text-sm text-gray-600 w-32">Ast. Head Of Visual Creative</p>
                </div>
            </div>
    
            <!-- Profile Card 3 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/vc/verene.webp')}}" alt="Verene Oktavia" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Verene Oktavia</h3>
                    <p class="text-sm text-gray-600 w-32">VC of SERSAN</p>
                </div>
            </div>
    
            <!-- Profile Card 4 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/vc/vallen.webp')}}" alt="Vallencia Vallerie" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Vallencia Vallerie</h3>
                    <p class="text-sm text-gray-600 w-32">VC of BILCIN</p>
                </div>
            </div>
    
            <!-- Profile Card 5 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/vc/clara.webp')}}" alt="Clara Rosalind" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Clara Rosalind</h3>
                    <p class="text-sm text-gray-600 w-32">VC of SODA</p>
                </div>
            </div>
    
            <!-- Profile Card 6 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/vc/shena.webp')}}" alt="Shekina Gloria" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Shekina Gloria</h3>
                    <p class="text-sm text-gray-600 w-32">VC of MUSIKALITAS</p>
                </div>
            </div>
    
            <!-- Profile Card 7 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/vc/lala.webp')}}" alt="Jessica Marella" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Jessica Marella</h3>
                    <p class="text-sm text-gray-600 w-32">VC of Charttopers</p>
                </div>
            </div>
    
        </div>
    </div>
    


    <!-- Crew Profiles for Documentation Creative Division -->
    <div id="DC" class="division-section hidden text-center py-8">
        <h1 class="text-4xl font-bold">DOCUMENTATION CREATIVE</h1>
        <p class="text-gray-700 max-w-2xl mx-auto mb-6">Description for DC division.</p>

        <!-- Crew Profiles -->
        <div class="flex flex-wrap justify-center gap-6 px-4">

            <!-- Profile Card 1 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/dc/billy.webp')}}" alt="billy" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Christ Billy</h3>
                    <p class="text-sm text-gray-600 w-32">Head Of Documentation Creative</p>
                </div>
            </div>

            <!-- Profile Card 2 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/dc/wk.webp')}}" alt="wk" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Wizart Keane</h3>
                    <p class="text-sm text-gray-600 w-32">Documentation Creative</p>
                </div>
            </div>

            <!-- Profile Card 3 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/dc/kenny.webp')}}" alt="kenny" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Kenny Rafael</h3>
                    <p class="text-sm text-gray-600 w-32">Documentation Creative</p>
                </div>
            </div>

        </div>
    </div>

    <div id="MA" class="division-section hidden text-center py-8">
        <h1 class="text-4xl font-bold">MEDIA AFFAIRS</h1>
        <p class="text-gray-700 max-w-2xl mx-auto mb-6">Description for AC division.</p>
        <!-- Crew Profiles -->
        <div class="flex flex-wrap justify-center gap-6 px-4">

            <!-- Profile Card 1 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/ma/mare.webp')}}" alt="mare" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Ammara Ghania</h3>
                    <p class="text-sm text-gray-600 w-32">Head of Media Affairs</p>
                </div>
            </div>

            <!-- Profile Card 2 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/ma/cecil.webp')}}" alt="cecil" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Cecillia Abbygail</h3>
                    <p class="text-sm text-gray-600 w-32">Media Affairs Of SERSAN</p>
                </div>
            </div>

            <!-- Profile Card 3 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/ma/bella.webp')}}" alt="bella" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Bella Felisha</h3>
                    <p class="text-sm text-gray-600 w-32">Media Affairs Of BILCIN</p>
                </div>
            </div>

            <!-- Profile Card 4 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/ma/andien.webp')}}" alt="andien" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Chiara Andini</h3>
                    <p class="text-sm text-gray-600 w-32">Media Affairs Of SODA</p>
                </div>
            </div>

            <!-- Profile Card 5 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/ma/haura.webp')}}" alt="haura" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Puan Haura</h3>
                    <p class="text-sm text-gray-600 w-32">Media Affairs Of MUSIKALITAS</p>
                </div>
            </div>

            <!-- Profile Card 6 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/ma/carla.webp')}}" alt="carla" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Carla Kaditha</h3>
                    <p class="text-sm text-gray-600 w-32">Media Affairs Of Charttopers</p>
                </div>
            </div>

        </div>
    </div>

    <div id="MD" class="division-section hidden text-center py-8">
        <h1 class="text-4xl font-bold">MUSIC DIRECTOR</h1>
        <p class="text-gray-700 max-w-2xl mx-auto mb-6">Description for AC division.</p>
         <!-- Crew Profiles -->
         <div class="flex flex-wrap justify-center gap-6 px-4">

            <!-- Profile Card 1 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/md/shannon.webp')}}" alt="shannon" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Shannon Valery</h3>
                    <p class="text-sm text-gray-600 w-32">Head of Music Director</p>
                </div>
            </div>

            <!-- Profile Card 2 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/md/pei.webp')}}" alt="pei" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Helena H. Haryadi</h3>
                    <p class="text-sm text-gray-600 w-32">Ast. Head of Music Director</p>
                </div>
            </div>

            <!-- Profile Card 3 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/md/ayu.webp')}}" alt="ayu" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Lungayu</h3>
                    <p class="text-sm text-gray-600 w-32">Music Director</p>
                </div>
            </div>

            <!-- Profile Card 4 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/md/mj.webp')}}" alt="mj" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Marfello Justin</h3>
                    <p class="text-sm text-gray-600 w-32">Music Director</p>
                </div>
            </div>

            <!-- Profile Card 5 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/md/rifat.webp')}}" alt="rifat" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Rifat</h3>
                    <p class="text-sm text-gray-600 w-32">Music Director</p>
                </div>
            </div>

            <!-- Profile Card 6 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/md/nata.webp')}}" alt="nata" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Serenata Sylvestra</h3>
                    <p class="text-sm text-gray-600 w-32">Music Director</p>
                </div>
            </div>

        </div>
    </div>

    <div id="EVNT" class="division-section hidden text-center py-8">
        <h1 class="text-4xl font-bold">EVENT</h1>
        <p class="text-gray-700 max-w-2xl mx-auto mb-6">Description for AC division.</p>
        <!-- Crew Profiles for EVENT -->
    <div class="flex flex-wrap justify-center gap-6 px-4">

        <!-- Profile Card 1 -->
        <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
            <img src="{{asset('images/crews/event/abel.webp')}}" alt="abel" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
            <div class="text-center w-full">
                <h3 class="font-bold text-lg">Christabell Chalin</h3>
                <p class="text-sm text-gray-600 w-32">Head of Event</p>
            </div>
        </div>

        <!-- Profile Card 2 -->
        <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
            <img src="{{asset('images/crews/event/oji.webp')}}" alt="oji" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
            <div class="text-center w-full">
                <h3 class="font-bold text-lg">A. Fakhrurozy</h3>
                <p class="text-sm text-gray-600 w-32">Event</p>
            </div>
        </div>

        <!-- Profile Card 3 -->
        <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
            <img src="{{asset('images/crews/event/cipa.webp')}}" alt="cipa" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
            <div class="text-center w-full">
                <h3 class="font-bold text-lg">Aurelia Syifa</h3>
                <p class="text-sm text-gray-600 w-32">Event</p>
            </div>
        </div>

        <!-- Profile Card 4 -->
        <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
            <img src="{{asset('images/crews/event/rara.webp')}}" alt="rara" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
            <div class="text-center w-full">
                <h3 class="font-bold text-lg">Khaira Khansa</h3>
                <p class="text-sm text-gray-600 w-32">Event</p>
            </div>
        </div>

        <!-- Profile Card 5 -->
        <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
            <img src="{{asset('images/crews/event/martina.webp')}}" alt="martina" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
            <div class="text-center w-full">
                <h3 class="font-bold text-lg">Martina Tandi</h3>
                <p class="text-sm text-gray-600 w-32">Event</p>
            </div>
        </div>

    </div>
</div>

<div id="PRTN" class="division-section hidden text-center py-8">
    <h1 class="text-4xl font-bold">PARTNERSHIP</h1>
    <p class="text-gray-700 max-w-2xl mx-auto mb-6">Description for Partnership division.</p>
    <!-- Crew Profiles for PARTNERSHIP -->
    <div class="flex flex-wrap justify-center gap-6 px-4">

        <!-- Profile Card 1 -->
        <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
            <img src="{{asset('images/crews/partner/joce.webp')}}" alt="joce" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
            <div class="text-center w-full">
                <h3 class="font-bold text-lg">Jocelyn Ancylla</h3>
                <p class="text-sm text-gray-600 w-32">Head of Partnership</p>
            </div>
        </div>

        <!-- Profile Card 2 -->
        <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
            <img src="{{asset('images/crews/partner/ricad.webp')}}" alt="ricad" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
            <div class="text-center w-full">
                <h3 class="font-bold text-lg">Richard S. Gunawan</h3>
                <p class="text-sm text-gray-600 w-32">Partnership</p>
            </div>
        </div>

        <!-- Profile Card 3 -->
        <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
            <img src="{{asset('images/crews/partner/qinsha.webp')}}" alt="qinsha" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
            <div class="text-center w-full">
                <h3 class="font-bold text-lg">Qinshasya</h3>
                <p class="text-sm text-gray-600 w-32">Partnership</p>
            </div>
        </div>

        <!-- Profile Card 4 -->
        <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
            <img src="{{asset('images/crews/partner/dayu.webp')}}" alt="dayu" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
            <div class="text-center w-full">
                <h3 class="font-bold text-lg">Ida Ayu Tretami</h3>
                <p class="text-sm text-gray-600 w-32">Partnership</p>
            </div>
        </div>

        <!-- Profile Card 5 -->
        <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
            <img src="{{asset('images/crews/partner/victor.webp')}}" alt="victor" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
            <div class="text-center w-full">
                <h3 class="font-bold text-lg">Manuel Victor</h3>
                <p class="text-sm text-gray-600 w-32">Partnership</p>
            </div>
        </div>

    </div>
</div>


    <div id="MNTE" class="division-section hidden text-center py-8">
        <h1 class="text-4xl font-bold">MAINTENANCE</h1>
        <p class="text-gray-700 max-w-2xl mx-auto mb-6">Description for AC division.</p>
        <!-- Crew Profiles for PROG -->
        <div class="flex flex-wrap justify-center gap-6 px-4">

            <!-- Profile Card 1 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/maint/dodo.webp')}}" alt="dodo" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Geraldo Nathanael</h3>
                    <p class="text-sm text-gray-600 w-32">Head of Maintenance</p>
                </div>
            </div>
    
            <!-- Profile Card 2 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/maint/darrent.webp')}}" alt="darrent" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Darrent Wijaya</h3>
                    <p class="text-sm text-gray-600 w-32">Maintenance of SERSAN</p>
                </div>
            </div>
    
            <!-- Profile Card 3 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/maint/chai.webp')}}" alt="chai" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">William Chairuddin</h3>
                    <p class="text-sm text-gray-600 w-32">Maintenance of BILCIN</p>
                </div>
            </div>
    
            <!-- Profile Card 4 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/maint/justin.webp')}}" alt="justin" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Justine Leonardo</h3>
                    <p class="text-sm text-gray-600 w-32">Maintenance of SODA</p>
                </div>
            </div>
    
            <!-- Profile Card 5 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/maint/pawas.webp')}}" alt="pawas" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Fawwaz</h3>
                    <p class="text-sm text-gray-600 w-32">Maintenance of MUSIKALITAS</p>
                </div>
            </div>
    
            <!-- Profile Card 6 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/maint/munung.webp')}}" alt="munung" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Angga</h3>
                    <p class="text-sm text-gray-600 w-32">Maintenance of Charttopers</p>
                </div>
            </div>
            <!-- Additional profiles for PROG -->
        </div>
    </div>

    <div id="NEWS" class="division-section hidden text-center py-8">
        <h1 class="text-4xl font-bold">NEWS</h1>
        <p class="text-gray-700 max-w-2xl mx-auto mb-6">Description for News division.</p>
        <!-- Crew Profiles for NEWS -->
        <div class="flex flex-wrap justify-center gap-6 px-4">
    
            <!-- Profile Card 1 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/news/viviene.webp')}}" alt="viviene" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Servina Viviene</h3>
                    <p class="text-sm text-gray-600 w-32">Editor In Chief</p>
                </div>
            </div>
    
            <!-- Profile Card 2 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/news/nelson.webp')}}" alt="nelson" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Nelson Nathan</h3>
                    <p class="text-sm text-gray-600 w-32">News</p>
                </div>
            </div>
    
            <!-- Profile Card 3 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/news/dey.webp')}}" alt="dey" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Denia Eryza</h3>
                    <p class="text-sm text-gray-600 w-32">News</p>
                </div>
            </div>
    
            <!-- Profile Card 4 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/news/willa.webp')}}" alt="willa" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Akwilla Immanuel</h3>
                    <p class="text-sm text-gray-600 w-32">News</p>
                </div>
            </div>
    
            <!-- Profile Card 5 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/news/icil.webp')}}" alt="icil" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Priscilla Victoria</h3>
                    <p class="text-sm text-gray-600 w-32">News</p>
                </div>
            </div>
    
        </div>
    </div>
    

    <div id="IT" class="division-section hidden text-center py-8">
        <h1 class="text-4xl font-bold">IT & SOFTWARE DEVELOPMENT</h1>
        <p class="text-gray-700 max-w-2xl mx-auto mb-6">Description for IT & Software Development division.</p>
        <!-- Crew Profiles for IT & SOFTWARE DEVELOPMENT -->
        <div class="flex flex-wrap justify-center gap-6 px-4">
    
            <!-- Profile Card 1 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/it/bon.webp')}}" alt="bon" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Bonifasius Martin</h3>
                    <p class="text-sm text-gray-600 w-32">Head IT & Software Development</p>
                </div>
            </div>
    
            <!-- Profile Card 2 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/it/handes.webp')}}" alt="handes" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Merhandes Gunawan</h3>
                    <p class="text-sm text-gray-600 w-32">IT & Software Development</p>
                </div>
            </div>
    
            <!-- Profile Card 3 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/it/acel.webp')}}" alt="acel" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Marcel Jonathan</h3>
                    <p class="text-sm text-gray-600 w-32">IT & Software Development</p>
                </div>
            </div>
    
            <!-- Profile Card 4 -->
            <div class="bg-white shadow-lg rounded-lg p-4 max-w-xs transform hover:rotate-3 transition-transform duration-300">
                <img src="{{asset('images/crews/it/lala.webp')}}" alt="lala" class="h-40 w-32 mx-auto mb-4 rounded-sm object-cover">
                <div class="text-center w-full">
                    <h3 class="font-bold text-lg">Graciella Nathania</h3>
                    <p class="text-sm text-gray-600 w-32">IT & Software Development</p>
                </div>
            </div>
    
        </div>
    </div>
    

    <script>
        function showDivision(divisionId) {
            console.log("Button clicked for division:", divisionId); 

            document.querySelectorAll('.division-section').forEach(section => {
                section.classList.add('hidden');
            });

            const selectedSection = document.getElementById(divisionId);
            if (selectedSection) {
                selectedSection.classList.remove('hidden');
            } else {
                console.log("Division ID not found:", divisionId); 
            }
        }
    </script>

</body>

</html>
