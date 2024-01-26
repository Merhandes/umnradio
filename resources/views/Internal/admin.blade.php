<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-white">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ULTIMACREWS</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
    <style>
        :root {
            color-scheme: only light;
        }

        .dataTables_filter input {
            border: 1px solid;
        }
    </style>
</head>

<body class="h-screen bg-white">
    {{-- NAVBAR --}}
    <div x-data="{ isOpen: false }" class="fixed w-full flex justify-between p-3 z-40 bg-[#021f3a] lg:p-4">
        <a class="flex items-center" href="/">
            <img class="h-10 md:h-16 w-auto" src="{{ asset('images/logowhite.webp') }}" alt="">
        </a>

        <div class="flex items-center justify-between">
            <button @click="isOpen = !isOpen" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white lg:hidden" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <div class="pr-4 hidden space-x-6 lg:inline-block">
                <a href="/crews-landing" class="font-poppins text-base text-white no-underline">Home</a>
                <a href="/uang-kas" class="font-poppins text-base text-white no-underline">Uang Kas</a>
                @bendahara()
                    <a href="/uang-kas/dashboard" class="font-poppins text-base text-white no-underline">Bendahara</a>
                @endbendahara
                @news()
                <a href="/posts" class="font-poppins text-base text-white no-underline">News</a>
                @endnews()
                @admin()
                    <a href="/programs-charts" class="font-poppins text-base text-white no-underline">Program & Chart</a>
                    <a href="/crews-landing" class="font-poppins text-base text-white no-underline">Partnership</a>
                    <a href="/admin/dashboard" class="font-poppins text-base text-white no-underline">Admin</a>
                @endadmin
            </div>

            <div class="mobile-navbar">
                <div class="fixed left-0 w-full h-fit p-5 bg-white rounded-lg shadow-xl top-16" x-show="isOpen"
                    @click.away=" isOpen = false">
                    <div class="flex flex-col space-y-4">
                        <a href="/crews-landing" class="font-poppins text-sm text-black">Home</a>
                        <a href="/uang-kas" class="font-poppins text-sm text-black">Uang Kas</a>
                        @bendahara()
                            <a href="/uang-kas/dashboard"
                                class="font-poppins text-sm text-black">Bendahara</a>
                        @endbendahara
                        @news()
                        <a href="/posts" class="font-poppins text-sm text-black">News</a>
                        @endnews()
                        @admin()
                            <a href="/programs-charts" class="font-poppins text-sm text-black">Program &
                                Chart</a>
                            <a href="/crews-landing" class="font-poppins text-sm text-black">Partnership</a>
                            <a href="/admin/dashboard" class="font-poppins text-sm text-black">Admin</a>
                        @endadmin
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- POST FORM --}}
    <div
        class="pt-20 md:pt-36 px-6 md:mx-12 font-poppins text-black pb-24 flex justify-center flex-wrap h-full overflow-scroll gap-5">
        <div class="w-full">
            <a href="/crews-landing"
                class="bg-white border-2 border-black text-black rounded-lg px-3 py-2 font-poppins font-bold justify-center align-middle items-center hover:invert hover:cursor-pointer hover:bg-[#fde0c5] transition ease-in-out delay-100 duration-200">Back</a>
        </div>
        <div
            class="bg-white drop-shadow-[0_5px_5px_rgba(0,0,0,0.25)] w-full rounded-lg flex flex-wrap justify-center items-baseline align-top p-6 h-fit">
            <h2 class="text-2xl font-bold font-poppins">ADD NEW USER</h2>
            <form action="/admin/add-user" method="POST" enctype="multipart/form-data"
                class="w-full flex flex-wrap justify-start">
                @csrf
                <div class="gap-4 flex flex-wrap">
                    <div>
                        <p>Nama Lengkap</p>
                        <input type="text" name="name"
                            class="border-1 border-black py-2 px-3 text-lg font-poppins border rounded-lg mt-1 shadow w-full" value="{{ old('name') }}">
                        @error('name')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <p>Email</p>
                        <input type="email" name="email"
                            class="border-1 border-black py-2 px-3 text-lg font-poppins border rounded-lg mt-1 shadow w-full" value="{{ old('email') }}">
                        @error('email')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <p>Password</p>
                        <input type="password" name="password" id="password"
                            class="border-1 border-black py-2 px-3 text-lg font-poppins border rounded-lg mt-1 shadow w-full" value="{{ old('password') }}">
                        <div class="pr-3 flex items-center text-sm leading-5">
                            <h2 class="font-bold font-poppins p-2 text-lg">View</h2>
                            <svg class="h-6 text-[#021f3a] hover:cursor-pointer" fill="none"
                                onclick="togglePasswordVisibility()" id="showIcon" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                </path>
                            </svg>
                            <svg class="h-6 text-[#021f3a] hidden hover:cursor-pointer" fill="none"
                                onclick="togglePasswordVisibility()" id="hideIcon" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 512">
                                <path fill="currentColor"
                                    d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07a32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                </path>
                            </svg>
                        </div>
                        <script>
                            function togglePasswordVisibility() {
                                const passwordInput = document.getElementById('password');
                                const showIcon = document.getElementById('showIcon');
                                const hideIcon = document.getElementById('hideIcon');

                                if (passwordInput.type === 'password') {
                                    passwordInput.type = 'text';
                                    showIcon.style.display = 'none';
                                    hideIcon.style.display = 'block';
                                } else {
                                    passwordInput.type = 'password';
                                    showIcon.style.display = 'block';
                                    hideIcon.style.display = 'none';
                                }
                            }
                        </script>
                        @error('password')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <p>NIM</p>
                        <input type="text" name="nim" value="{{ old('nim') }}"
                            class="border-1 border-black py-2 px-3 text-lg font-poppins border rounded-lg mt-1 shadow w-full">
                        @error('nim')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <p>Tanggal Lahir</p>
                        <input type="date" name="birthdate" value="{{ old('birthdate') }}"
                            class="border-1 border-black py-2 px-3 text-lg font-poppins border rounded-lg mt-1 shadow w-full">
                        @error('birthdate')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <p>Nomor Telepon</p>
                        <input type="text" name="phone" value="{{ old('phone') }}"
                            class="border-1 border-black py-2 px-3 text-lg font-poppins border rounded-lg mt-1 shadow w-full">
                        @error('phone')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <p>Jurusan</p>
                        <input type="text" name="major" value="{{ old('major') }}"
                            class="border-1 border-black py-2 px-3 text-lg font-poppins border rounded-lg mt-1 shadow w-full">
                        @error('major')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <p>Angkatan</p>
                        <input type="number" name="year" value="{{ old('year') }}"
                            class="border-1 border-black py-2 px-3 text-lg font-poppins border rounded-lg mt-1 shadow w-full">
                        @error('year')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <p>Alamat</p>
                        <textarea name="address" id="" value="{{ old('address') }}"
                            class="border-1 border-black py-2 px-3 text-lg font-poppins border rounded-lg mt-1 shadow w-full"></textarea>
                        @error('address')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <p>Role</p>
                        <select name="role" id="role_select"
                            class="py-2 px-3 text-lg font-poppins border border-1 border-black rounded-lg mt-1 shadow w-full">
                            @foreach ($roledefs as $roledef)
                                @if ($roledef->id > 1)
                                    <option value='{{ $roledef->id }}'
                                        @if ($roledef->name == 'ultimacrews') selected @endif>{{ $roledef->id }} -
                                        {{ $roledef->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('role')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <div class="my-1 flex items-center space-x-2">
                        <input type="checkbox" id="confirmCheckbox" name="confirmCheckbox"
                            class="form-checkbox text-blue-500" onchange="toggleSubmitButton()">
                        <label for="confirmCheckbox" class="text-gray-700">I have inputted the correct data</label>
                    </div>
                    <button type="submit" id="submitButton"
                        class="font-bold text-white font-poppins bg-blue-600 px-2 py-1 rounded disabled:opacity-50"
                        disabled>
                        Submit
                    </button>
                </div>
                <script>
                    function toggleSubmitButton() {
                        // Get the checkbox and the submit button
                        const checkbox = document.getElementById('confirmCheckbox');
                        const submitButton = document.getElementById('submitButton');

                        // Enable or disable the submit button based on the checkbox state
                        submitButton.disabled = !checkbox.checked;
                    }
                </script>
            </form>
        </div>
        <div
            class="bg-white drop-shadow-[0_5px_5px_rgba(0,0,0,0.25)] w-full rounded-lg flex flex-wrap justify-center items-baseline align-top p-6 h-fit">
            <h2 class="text-center font-poppins text-2xl font-bold h-fit">Users</h2>
            <div id='table_container' class="p-4 mt-6 lg:mt-0 rounded shadow bg-white w-full">
                <table id="payment_table" class="stripe hover"
                    style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <thead>
                        <tr>
                            <th data-priority="0">ID</th>
                            <th data-priority="1">Name</th>
                            <th data-priority="2">Email</th>
                            <th data-priority="3">Roles</th>
                            <th data-priority="4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="text-center">{{ $user->id }}</td>
                                <td class="text-center">{{ $user->name }}</td>
                                <td class="text-center">{{ $user->email }}</td>
                                <td class="text-center">
                                    @foreach ($user->roles as $role)
                                        {{ $role->role }} -
                                        @foreach ($roledefs as $roledef)
                                            @if ($role->role == $roledef->id)
                                                {{$roledef->name}};
                                            @endif
                                        @endforeach
                                    @endforeach
                                </td>
                                <td class="text-center">
                                    <a href="/admin/{{ $user->id }}/details"
                                        class="font-bold text-white font-poppins bg-blue-600 hover:bg-blue-300 hover:text-black px-2 py-1 rounded">
                                        Details</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

<!-- jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!--Datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script>
    $(document).ready(function() {

        var table = $('#payment_table').DataTable({
                responsive: true,
                autoWidth: false,
                columnDefs: [{
                        width: '50px',
                        targets: 0
                    },
                    {
                        width: '200px',
                        targets: 1
                    },
                    {
                        width: '200px',
                        targets: 2
                    },
                    {
                        width: '200px',
                        targets: 3
                    },
                    {
                        width: '100px',
                        targets: 4
                    },
                ]
            })
            .columns.adjust()
            .responsive.recalc();
    });
</script>

</html>
