@extends('dashboard.layouts.main')

@section('container')
    <img src="{{ url('/images/backgroundnew.webp') }}" alt="Image"
        class="absolute z-0 h-full w-full object-cover object-top brightness-50" />
    <div class="absolute z-0 h-full w-full bg-black/50 backdrop-blur-sm" />

    {{-- POST FORM --}}
    <div class="pt-24 md:pt-36 px-6 md:px-0 mx-6 font-poppins text-black pb-24 flex justify-center align-middle items-center h-full flex-wrap gap-10 overflow-scroll">
        <a href="/dashboard/users"
            class="bg-white text-black rounded-lg p-4 md:aspect-square md:w-96 md:h-96 w-full h-40 font-poppins flex flex-wrap justify-center align-middle items-center hover:invert hover:cursor-pointer hover:bg-[#fde0c5] transition ease-in-out delay-100 duration-200 hover:scale-110">
            <div class="w-full flex justify-center flex-row md:flex-wrap gap-4 align-middle items-center">
                <h1 class="font-bold text-2xl md:text-3xl text-center">DASHBOARD USERS</h1>
            </div>
        </a>
        <a href="/dashboard/segments"
            class="bg-white text-black rounded-lg p-4 md:aspect-square md:w-96 md:h-96 w-full h-40 font-poppins flex flex-wrap justify-center align-middle items-center hover:invert hover:cursor-pointer hover:bg-[#fde0c5] transition ease-in-out delay-100 duration-200 hover:scale-110">
            <div class="w-full flex justify-center flex-row md:flex-wrap gap-4 align-middle items-center">
                <h1 class="font-bold text-2xl md:text-3xl text-center">DASHBOARD SEGMENTS</h1>
            </div>
        </a>
        <a href="/dashboard/variables"
        class="bg-white text-black rounded-lg p-4 md:aspect-square md:w-96 md:h-96 w-full h-40 font-poppins flex flex-wrap justify-center align-middle items-center hover:invert hover:cursor-pointer hover:bg-[#fde0c5] transition ease-in-out delay-100 duration-200 hover:scale-110">
        <div class="w-full flex justify-center flex-row md:flex-wrap gap-4 align-middle items-center">
            <h1 class="font-bold text-2xl md:text-3xl text-center">DASHBOARD VARIABLES</h1>
        </div>
    </a>
    </div>
@endsection