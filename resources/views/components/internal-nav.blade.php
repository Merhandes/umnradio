<div>
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
            <div class="pr-4 hidden space-x-6 lg:inline-block w-fit">
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
            <div class="h-10 flex flex-row align-middle justify-center items-center gap-2 bg-white rounded-full p-1 ml-2">
                <img class="object-cover h-full" src="/images/avatar.webp" alt="Logo">
                <p class="text-[#021f3a] text-md">{{ auth()->user()->name }}</p>
            </div>

            <div class="mobile-navbar">
                <div class="fixed left-0 w-full h-fit p-5 bg-white rounded-lg shadow-xl top-16" x-show="isOpen"
                    @click.away=" isOpen = false">
                    <div class="flex flex-col space-y-4">
                        <a href="/crews-landing" class="font-poppins text-sm text-black">Home</a>
                        <a href="/uang-kas" class="font-poppins text-sm text-black">Uang Kas</a>
                        @bendahara()
                            <a href="/uang-kas/dashboard" class="font-poppins text-sm text-black">Bendahara</a>
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
                        <a href="/logout" class="font-poppins text-sm text-black">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
