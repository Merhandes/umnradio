@extends('dashboard.layouts.main')

@section('container')
<img src="{{ url('/images/backgroundnew.webp') }}" alt="Image" class="absolute z-0 h-full w-full object-cover object-top brightness-50" />
<div class="absolute z-0 h-full w-full bg-black/50 backdrop-blur-sm" />

{{-- POST FORM --}}
<div
    class="pt-24 md:pt-36 px-6 md:px-0 mx-6 font-poppins text-black pb-24 flex justify-center align-middle items-center h-full flex-wrap gap-10 overflow-scroll">
    <a href="/uang-kas"
        class="bg-white text-black rounded-lg p-4 md:aspect-square md:w-96 md:h-96 w-full h-40 font-poppins flex flex-wrap justify-center align-middle items-center hover:invert hover:cursor-pointer hover:bg-[#fde0c5] transition ease-in-out delay-100 duration-200 hover:scale-110">
        <div class="w-full flex justify-center flex-row md:flex-wrap gap-4 align-middle items-center">
            <img class="md:w-[50%]" src="{{ url('/images/icon-coin.webp') }}" alt="">
            <h1 class="font-bold text-2xl md:text-3xl text-center">BAYAR UANG KAS</h1>
        </div>
    </a>
    @bendahara()
        <a href="/uang-kas/dashboard"
            class="bg-white text-black rounded-lg p-4 md:aspect-square md:w-96 md:h-96 w-full h-40 font-poppins flex flex-wrap justify-center align-middle items-center hover:invert hover:cursor-pointer hover:bg-[#fde0c5] transition ease-in-out delay-100 duration-200 hover:scale-110">
            <div class="w-full flex justify-center flex-row md:flex-wrap gap-4 align-middle items-center">
                <img class="md:w-[50%]" src="{{ url('/images/icon-dashboard.webp') }}" alt="">
                <h1 class="font-bold text-2xl md:text-3xl text-center">DASHBOARD BENDAHARA</h1>
            </div>
        </a>
    @endbendahara
    @news()
        <a href="/dashboard/posts"
            class="bg-white text-black rounded-lg p-4 md:aspect-square md:w-96 md:h-96 w-full h-40 font-poppins flex flex-wrap justify-center align-middle items-center hover:invert hover:cursor-pointer hover:bg-[#fde0c5] transition ease-in-out delay-100 duration-200 hover:scale-110">
            <div class="w-full flex justify-center flex-row md:flex-wrap gap-4 align-middle items-center">
                <img class="md:w-[50%]" src="{{ url('/images/icon-news.webp') }}" alt="">
                <h1 class="font-bold text-2xl md:text-3xl text-center">DASHBOARD NEWS</h1>
            </div>
        </a>
    @endnews
    @admin()
        <a href="/programs-charts"
            class="bg-white text-black rounded-lg p-4 md:aspect-square md:w-96 md:h-96 w-full h-40 font-poppins flex flex-wrap justify-center align-middle items-center hover:invert hover:cursor-pointer hover:bg-[#fde0c5] transition ease-in-out delay-100 duration-200 hover:scale-110">
            <div class="w-full flex justify-center flex-row md:flex-wrap gap-4 align-middle items-center">
                <img class="md:w-[50%]" src="{{ url('/images/icon-music.webp') }}" alt="">
                <h1 class="font-bold text-2xl md:text-3xl text-center">DASHBOARD CHART & PROGRAM</h1>
            </div>
        </a>
        <a href="/partnership-mediapartner"
            class="bg-white text-black rounded-lg p-4 md:aspect-square md:w-96 md:h-96 w-full h-40 font-poppins flex flex-wrap justify-center align-middle items-center hover:invert hover:cursor-pointer hover:bg-[#fde0c5] transition ease-in-out delay-100 duration-200 hover:scale-110">
            <div class="w-full flex justify-center flex-row md:flex-wrap gap-4 align-middle items-center">
                <img class="md:w-[50%]" src="{{ url('/images/icon-partner.webp') }}" alt="">
                <h1 class="font-bold text-2xl md:text-3xl text-center">DASHBOARD PARTNERSHIP & MEDIA PARTNER</h1>
            </div>
        </a>
        <a href="/admin-landing"
            class="bg-white text-black rounded-lg p-4 md:aspect-square md:w-96 md:h-96 w-full h-40 font-poppins flex flex-wrap justify-center align-middle items-center hover:invert hover:cursor-pointer hover:bg-[#fde0c5] transition ease-in-out delay-100 duration-200 hover:scale-110">
            <div class="w-full flex justify-center flex-row md:flex-wrap gap-4 align-middle items-center">
                <img class="md:w-[50%]" src="{{ url('/images/icon-user.webp') }}" alt="">
                <h1 class="font-bold text-2xl md:text-3xl text-center">DASHBOARD ADMIN</h1>
            </div>
        </a>
    @endadmin
</div>
@endsection