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
        class="pt-20 md:pt-36 px-6 md:mx-12 font-poppins text-black pb-24 flex justify-center flex-wrap overflow-scroll gap-5">
        <div class="w-full">
            <a href="/crews-landing"
                class="bg-white border-2 border-black text-black rounded-lg px-3 py-2 font-poppins font-bold justify-center align-middle items-center hover:invert hover:cursor-pointer hover:bg-[#fde0c5] transition ease-in-out delay-100 duration-200">Back</a>
            <a href="/uang-kas/timeline"
                class="bg-white border-2 border-black text-black rounded-lg px-3 py-2 font-poppins font-bold justify-center align-middle items-center hover:invert hover:cursor-pointer hover:bg-[#fde0c5] transition ease-in-out delay-100 duration-200">Timeline</a>
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
                            <th data-priority="3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="text-center">{{ $user->id }}</td>
                                <td class="text-center">{{ $user->name }}</td>
                                <td class="text-center">{{ $user->email }}</td>
                                <td class="text-center">
                                    <a href="/uang-kas/{{ $user->id }}/details"
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
                ]
            })
            .columns.adjust()
            .responsive.recalc();
    });
</script>

</html>
