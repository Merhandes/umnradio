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
    <x-internal-nav></x-internal-nav>

    {{-- POST FORM --}}
    <div
        class="pt-20 md:pt-36 px-6 md:mx-12 font-poppins text-black pb-24 flex justify-center flex-wrap gap-10 h-full overflow-scroll">
        <div class="flex flex-col w-full md:w-[30%] gap-10">
            <div
                class="bg-white drop-shadow-[0_5px_5px_rgba(0,0,0,0.25)] h-fit rounded-lg flex flex-wrap justify-center p-6 gap-4">
                <h2 class="text-center font-poppins text-2xl font-bold h-fit">Upload Bukti Bayar</h2>
                @if (session()->has('success'))
                    {{-- <div class="text-sm text-green-500" role="alert">{{ session('success') }}</div> --}}
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 my-4 rounded relative w-fit"
                        role="alert">
                        <strong class="font-bold">Success!</strong>
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif
                <form action="/uang-kas/upload" id="kasForm" method="POST" enctype="multipart/form-data"
                    class="gap-4 w-full">
                    @csrf
                    <input type="file" accept="image/*" name="image" id="image" class="py-2 max-w-full"
                        onchange="previewImage()">
                    <img class="h-72 object-cover img-preview hidden" alt="">
                    @error('image')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                    <div class="my-2">
                        <p class="font-bold font-poppins text-xl">Select Month(s)</p>
                        <div class="flex flex-wrap gap-3 w-full">
                            @foreach (['jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec'] as $month)
                                <label class="inline-flex items-center space-x-2">
                                    <input type="checkbox" name="months[]" value="{{ $month }}"
                                        class="form-checkbox h-4 w-4 text-blue-500 focus:ring-blue-400 focus:border-blue-400">
                                    <span class="ml-2 text-lg text-gray-700">{{ ucfirst($month) }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                    @error('months')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                    <p class="font-bold font-poppins text-xl">Keterangan</p>
                    <textarea class="border border-black border-1 rounded-sm w-full p-2 max-w-full" name="keterangan"
                        placeholder="e.g. Uang Kas Feb/Uang Kas Feb-Apr/Uang Kas Apr + Denda/dsb"></textarea>
                    @error('keterangan')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                    <button type="submit"
                        class="bg-white border-2 border-[#021f3a] hover:bg-[#021f3a] rounded-full my-2 px-4 py-2 font-poppins text-[#021f3a] hover:text-white hover:border-white font-bold">
                        Submit
                    </button>
                </form>
            </div>
            <div
                class="bg-white drop-shadow-[0_5px_5px_rgba(0,0,0,0.25)] h-fit rounded-lg flex flex-wrap justify-center p-6">
                <h2 class="text-center font-poppins text-2xl font-bold h-fit">Change Password</h2>
                @if (session()->has('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mt-4 rounded relative w-fit"
                        role="alert">
                        <strong class="font-bold">Error!</strong>
                        <span class="block sm:inline">{{ session('error') }}</span>
                    </div>
                @endif
                @if (session()->has('successPass'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 mt-4 rounded relative w-fit"
                        role="alert">
                        <strong class="font-bold">Success!</strong>
                        <span class="block sm:inline">{{ session('successPass') }}</span>
                    </div>
                @endif
                <form action="/change-password/{{ auth()->user()->id }}" method="POST" enctype="multipart/form-data"
                    class="w-full m-4 flex flex-wrap">
                    @csrf
                    @method('put')
                    <div class="w-full">
                        <p class="font-bold font-poppins text-xl">Old Password</p>
                        <input type="password" name="password" id="password_old"
                            class="password border-black border-2 rounded-sm p-1 min-w-[70%] max-w-full">
                    </div>
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
                    <div class="w-full">
                        <p class="font-bold font-poppins text-xl">New Password</p>
                        <input type="password" name="password_new" id="password_new"
                            class="password border-black border-2 rounded-sm p-1 min-w-[70%] max-w-full">
                    </div>
                    <div class="pr-3 flex items-center text-sm leading-5">
                        <h2 class="font-bold font-poppins p-2 text-lg">View</h2>
                        <svg class="h-6 text-[#021f3a] hover:cursor-pointer" fill="none"
                            onclick="togglePasswordVisibility2()" id="showIcon2" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 576 512">
                            <path fill="currentColor"
                                d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                            </path>
                        </svg>
                        <svg class="h-6 text-[#021f3a] hidden hover:cursor-pointer" fill="none"
                            onclick="togglePasswordVisibility2()" id="hideIcon2" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 512">
                            <path fill="currentColor"
                                d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07a32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                            </path>
                        </svg>
                    </div>
                    <div class="w-full">
                        <p class="font-bold font-poppins text-xl">Confirm New Password</p>
                        <input type="password" name="password_new_confirmation" id="password_new_confirmation" oninput="checkPasswordMatch()"
                            class="password border-black border-2 rounded-sm p-1 min-w-[70%] max-w-full">
                    </div>
                    <div class="pr-3 flex items-center text-sm leading-5">
                        <h2 class="font-bold font-poppins p-2 text-lg">View</h2>
                        <svg class="h-6 text-[#021f3a] hover:cursor-pointer" fill="none"
                            onclick="togglePasswordVisibility3()" id="showIcon3" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 576 512">
                            <path fill="currentColor"
                                d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                            </path>
                        </svg>
                        <svg class="h-6 text-[#021f3a] hidden hover:cursor-pointer" fill="none"
                            onclick="togglePasswordVisibility3()" id="hideIcon3" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 512">
                            <path fill="currentColor"
                                d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07a32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                            </path>
                        </svg>
                    </div>
                    <div class="w-full flex justify-start">
                        <button type="submit" id="confirmButton"
                            class="bg-white border-2 border-[#021f3a] enabled:hover:bg-[#021f3a] rounded-full px-4 py-2 font-poppins text-[#021f3a] enabled:hover:text-white enabled:hover:border-white font-bold disabled:opacity-50" disabled>
                            Confirm
                        </button>
                    </div>
                </form>
            </div>
            <script>
                function togglePasswordVisibility() {
                    const passwordInput = document.getElementById('password_old');
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

                function togglePasswordVisibility2() {
                    const passwordNewInput = document.getElementById('password_new');
                    const showIcon = document.getElementById('showIcon2');
                    const hideIcon = document.getElementById('hideIcon2');

                    if (passwordNewInput.type === 'password') {
                        passwordNewInput.type = 'text';
                        showIcon.style.display = 'none';
                        hideIcon.style.display = 'block';
                    } else {
                        passwordNewInput.type = 'password';
                        showIcon.style.display = 'block';
                        hideIcon.style.display = 'none';
                    }
                }
                function togglePasswordVisibility3() {
                    const passwordConfInput = document.getElementById('password_new_confirmation');
                    const showIcon = document.getElementById('showIcon3');
                    const hideIcon = document.getElementById('hideIcon3');

                    if (passwordConfInput.type === 'password') {
                        passwordConfInput.type = 'text';
                        showIcon.style.display = 'none';
                        hideIcon.style.display = 'block';
                    } else {
                        passwordConfInput.type = 'password';
                        showIcon.style.display = 'block';
                        hideIcon.style.display = 'none';
                    }
                }

                function checkPasswordMatch() {
                    var password = document.getElementById('password_new').value;
                    var confirmation = document.getElementById('password_new_confirmation').value;
                    var confirmButton = document.getElementById('confirmButton');

                    if (password === confirmation) {
                        confirmButton.removeAttribute('disabled');
                    } else {
                        confirmButton.setAttribute('disabled', 'disabled');
                    }
                }
            </script>
        </div>
        <div
            class="bg-white drop-shadow-[0_5px_5px_rgba(0,0,0,0.25)] w-full md:w-[60%] rounded-lg flex flex-wrap justify-center items-baseline align-top p-6 h-fit">
            <h2 class="text-center font-poppins text-2xl font-bold h-fit">Transaction History</h2>
            <div id='table_container' class="p-4 mt-6 lg:mt-0 rounded shadow bg-white w-full">
                <table id="payment_table" class="stripe hover"
                    style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <thead>
                        <tr>
                            <th data-priority="0">ID</th>
                            <th data-priority="1">Upload Date</th>
                            <th data-priority="2">Image</th>
                            <th data-priority="3">Description</th>
                            <th data-priority="4">Month</th>
                            <th data-priority="5">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($payments as $payment)
                            <tr>
                                <td>{{ $payment->id }}</td>
                                <td>{{ $payment->created_at }}</td>
                                <td><a target="_" href="{{ asset('storage/' . $payment->image) }}"><img src="{{ asset('storage/' . $payment->image) }}" alt=""></a></td>
                                <td>{{ $payment->keterangan }}</td>
                                <td>{{ $payment->month }}</td>
                                <td class="text-white font-poppins font-bold rounded-lg text-center
                                @if ($payment->status == "PENDING")
                                    bg-yellow-500
                                @elseif ($payment->status == "REJECTED")
                                    bg-red-500
                                @else
                                    bg-green-500
                                @endif">{{ $payment->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

<script>
    function previewImage() {
        const image = document.querySelector('#image')
        const imgPreview = document.querySelector(".img-preview")

        imgPreview.style.display = 'block'
        const oFReader = new FileReader()

        oFReader.readAsDataURL(image.files[0])
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

    $('#kasForm').on('keydown', 'input', function(event) {
        if (event.which == 13) {
            event.preventDefault();
            var $this = $(event.target);
            var index = parseFloat($this.attr('data-index'));
            $('[data-index="' + (index + 1).toString() + '"]').focus();
        }
    });
</script>

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
                    {
                        width: '100px',
                        targets: 5
                    },
                ]
            })
            .columns.adjust()
            .responsive.recalc();
    });
</script>

</html>
