@extends('layouts.main')

@section('container')
    <style>
        div::-webkit-scrollbar {
            display: none;
            /* for Chrome, Safari, and Opera */
        }
    </style>

    {{-- SHOW PROGRAMS --}}
    <div class="w-screen md:w-full h-full overflow-scroll pt-16 pb-16 flex justify-center">
        <div class="container md:w-[90%] flex flex-wrap justify-center pt-8 md:p-16 font-poppins gap-5">
            @foreach ($podcasts as $podcast)
                <div class="w-[45%]">
                    {!! $podcast->embed_code !!}
                </div>
            @endforeach
        </div>
    </div>
@endsection