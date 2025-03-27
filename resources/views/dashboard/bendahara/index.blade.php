@extends('dashboard.layouts.main')

@section('container')
    <style>
        :root {
            color-scheme: only light;
        }

        .dataTables_filter input {
            border: 1px solid;
        }
    </style>

    {{-- POST FORM --}}
    <div class="pt-20 md:pt-36 px-6 md:mx-12 font-poppins text-black pb-24 flex justify-center flex-wrap overflow-scroll gap-5">
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
@endsection