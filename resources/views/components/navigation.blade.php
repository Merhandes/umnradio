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
            <div class="pr-4 hidden space-x-6 lg:inline-block">
                <a href="/" class="font-poppins text-base text-white no-underline">Home</a>
                <a href="/programs" class="font-poppins text-base text-white no-underline">Programs</a>
                <a href="/podcasts" class="font-poppins text-base text-white no-underline">Podcasts</a>
                <a href="/charts" class="font-poppins text-base text-white no-underline">Charts</a>
                <a href="/articles" class="font-poppins text-base text-white no-underline">Articles</a>
                <a href="/about" class="font-poppins text-base text-white no-underline">About</a>
            </div>

            <div class="mobile-navbar">
                <div class="fixed left-0 w-full h-fit p-5 bg-white rounded-lg shadow-xl top-16" x-show="isOpen"
                    @click.away=" isOpen = false">
                    <div class="flex flex-col space-y-6">
                        <a href="/" class="font-poppins text-sm text-black">Home</a>
                        <a href="/programs" class="font-poppins text-sm text-black">Programs</a>
                        <a href="/podcasts" class="font-poppins text-sm text-black">Podcasts</a>
                        <a href="/charts" class="font-poppins text-sm text-black">Charts</a>
                        <a href="/articles" class="font-poppins text-sm text-black">Articles</a>
                        <a href="/about" class="font-poppins text-sm text-black">About</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
