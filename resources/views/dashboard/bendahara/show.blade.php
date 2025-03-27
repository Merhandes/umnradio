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
    <div
        class="pt-20 md:pt-36 px-6 md:mx-12 font-poppins text-black pb-24 flex justify-center flex-wrap gap-5 overflow-scroll">
        <div class="w-full">
            <a href="/uang-kas/dashboard"
                class="bg-white border-2 border-black text-black rounded-lg px-3 py-2 font-poppins font-bold justify-center align-middle items-center hover:invert hover:cursor-pointer hover:bg-[#fde0c5] transition ease-in-out delay-100 duration-200">Back to Dashboard</a>
        </div>
        <div
            class="bg-white drop-shadow-[0_5px_5px_rgba(0,0,0,0.25)] w-full rounded-lg flex flex-wrap justify-center items-baseline align-top p-6 h-fit">
            <h2 class="text-center font-poppins text-2xl font-bold h-fit">Transaction History</h2>
            <div id='table_container' class="p-4 mt-6 lg:mt-0 rounded shadow bg-white w-full">
                <table id="payment_table" class="stripe hover"
                    style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <thead>
                        <tr>
                            <th data-priority="1">ID</th>
                            <th data-priority="0">Upload Date</th>
                            <th data-priority="2">User</th>
                            <th data-priority="3">Image</th>
                            <th data-priority="4">Description</th>
                            <th data-priority="5">Month</th>
                            <th data-priority="6">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($payments as $payment)
                            <tr>
                                <td>{{ $payment->id }}</td>
                                <td>{{ $payment->created_at }}</td>
                                <td>{{ $payment->uploader->name}}</td>
                                <td><a target="_" href="{{ asset('storage/' . $payment->image) }}"><img class="h-72"
                                            src="{{ asset('storage/' . $payment->image) }}" alt=""></a></td>
                                <td>{{ $payment->keterangan }}</td>
                                <td>{{ $payment->month }}</td>
                                <td>
                                    <form id="statusForm{{$payment->id}}" action="/uang-kas/{{$payment->id}}/change-status" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <select name="status" id="" onchange="submitForm{{$payment->id}}()" class="text-white rounded px-2 py-1 border font-bold font-poppins border-1 
                                            @if ($payment->status == 'PENDING')
                                                bg-yellow-500
                                            @elseif ($payment->status == "REJECTED")
                                            bg-red-500
                                            @else
                                            bg-green-500
                                            @endif
                                            ">
                                            <option class="text-yellow-500 bg-white font-bold font-poppins" @if ($payment->status == 'PENDING') selected @endif value="PENDING">
                                                PENDING</option>
                                            <option class="text-red-500 bg-white font-bold font-poppins" @if ($payment->status == 'REJECTED') selected @endif value="REJECTED">
                                                REJECTED</option>
                                            <option class="text-green-500 bg-white font-bold font-poppins" @if ($payment->status == 'CONFIRMED') selected @endif value="CONFIRMED">
                                                CONFIRMED</option>
                                        </select>
                                    </form>
                                    <script>
                                        function submitForm{{$payment->id}}() {
                                            document.getElementById('statusForm{{$payment->id}}').submit();
                                        }
                                    </script>
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
                // ordering: false,
                order: [],
                responsive: true,
                autoWidth: false,
                columnDefs: [{
                        width: '50px',
                        targets: 0
                    },
                    {
                        width: '100px',
                        targets: 1
                    },
                    {
                        width: '150px',
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
                    {
                        width: '100px',
                        targets: 6
                    },
                ]
            })
            .columns.adjust()
            .responsive.recalc();
    });
</script>
@endsection