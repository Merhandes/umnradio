<div>
    {{-- NAVBAR --}}
    <div x-data="{ isOpen: false }"
        class="fixed w-full flex justify-between z-40 drop-shadow-[0_5px_5px_rgba(0,0,0,0.5)] px-3 pt-3 pb-3 lg:px-4 lg:pt-2">
        <img src="{{asset('assets/paper/4-blue.webp')}}" class="absolute top-0 start-0 w-full h-20 lg:h-28 -z-20" alt="">
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
            <div class="pr-4 hidden space-x-6 w-fit lg:flex flex-row">
                <a href="/" class="relative flex justify-center items-center align-middle w-fit hover:scale-110 hover:rotate-3">
                    <img class="absolute -z-10 h-full w-full" src="{{ asset('assets/tapes/15.webp') }}" alt="">
                    <p class="font-nexarust font-bold text-black no-underline z-20 text-xl mx-4 my-3">Home</p>
                </a>
                <a href="/articles" class="relative flex justify-center items-center align-middle w-fit hover:scale-110 hover:rotate-3">
                    <img class="absolute -z-10 h-full w-full" src="{{ asset('assets/tapes/34.webp') }}" alt="">
                    <p class="font-nexarust font-bold text-black no-underline z-20 text-xl mx-4 my-3">Articles</p>
                </a>
                <a href="/programs" class="relative flex justify-center items-center align-middle w-fit hover:scale-110 hover:rotate-3">
                    <img class="absolute -z-10 h-full w-full" src="{{ asset('assets/tapes/14.webp') }}" alt="">
                    <p class="font-nexarust font-bold text-black no-underline z-20 text-xl mx-4 my-3">Programs</p>
                </a>
                <a href="https://open.spotify.com/show/6ytg0qKpDz9ehq2fjklepU?si=2e339706e5754214" target="_" class="relative flex justify-center items-center align-middle w-fit hover:scale-110 hover:rotate-3">
                    <img class="absolute -z-10 h-full w-full" src="{{ asset('assets/tapes/34.webp') }}" alt="">
                    <p class="font-nexarust font-bold text-black no-underline z-20 text-xl mx-4 my-3">U PODCAST</p>
                </a>
                <a href="/charts" class="relative flex justify-center items-center align-middle w-fit hover:scale-110   hover:rotate-3">
                    <img class="absolute -z-10 h-full w-full" src="{{ asset('assets/tapes/65.webp') }}" alt="">
                    <p class="font-nexarust font-bold text-black no-underline z-20 text-xl mx-4 my-3">Charts</p>
                </a>
                <a href="/about" class="relative flex justify-center items-center align-middle w-fit hover:scale-110    hover:rotate-3">
                    <img class="absolute -z-10 h-full w-full rotate-180" src="{{ asset('assets/tapes/15.webp') }}"
                        alt="">
                    <p class="font-nexarust font-bold text-black no-underline z-20 text-xl mx-4 my-3">About</p>
                </a>
                <a href="https://drive.google.com/file/d/1x452--2-B7-fmVHvy5CWf2LNZa-m1GRw/view?fbclid=PAY2xjawGdHH9leHRuA2FlbQIxMQABphdVZ4G57rTTqWFUEGQzKujmnLviGlc_uppTLUaeoDpz_zGyWWS-jBGYTQ_aem_FW50Bz-E1I2JWZel50TKLg" class="relative flex justify-center items-center align-middle w-fit hover:scale-110    hover:rotate-3" target="_blank">
                    <img class="absolute -z-10 h-full w-full rotate-180" src="{{ asset('assets/tapes/100.webp') }}"
                        alt="">
                    <p class="font-nexarust font-bold text-black no-underline z-20 text-xl mx-4 my-3">First Stage</p>
                </a>
                {{-- <a href="/" class="font-poppins text-base text-white no-underline">Home</a> 
                    <a href="/programs" class="font-poppins text-base text-white no-underline">Programs</a>
                <a href="/podcasts" class="font-poppins text-base text-white no-underline">Podcasts</a>
                <a href="/charts" class="font-poppins text-base text-white no-underline">Charts</a>
                <a href="/articles" class="font-poppins text-base text-white no-underline">Articles</a>
                <a href="/about" class="font-poppins text-base text-white no-underline">About</a> --}}
            </div>

            <div class="mobile-navbar">
                <div class="fixed left-0 w-full h-fit p-5 bg-white rounded-lg shadow-xl top-16" x-show="isOpen"
                    @click.away=" isOpen = false">
                    <div class="flex flex-col space-y-6">
                        <a href="/" class="font-poppins text-sm text-black">Home</a>
                        <a href="/articles" class="font-poppins text-sm text-black">Articles</a>
                        <a href="/programs" class="font-poppins text-sm text-black">Programs</a>
                        <a href="https://open.spotify.com/show/6ytg0qKpDz9ehq2fjklepU?si=2e339706e5754214" target="_" class="font-poppins text-sm text-black">Podcasts</a>
                        <a href="/charts" class="font-poppins text-sm text-black">Charts</a>
                        <a href="/about" class="font-poppins text-sm text-black">About</a>
                        <a href="https://drive.google.com/file/d/1x452--2-B7-fmVHvy5CWf2LNZa-m1GRw/view?fbclid=PAY2xjawGdHH9leHRuA2FlbQIxMQABphdVZ4G57rTTqWFUEGQzKujmnLviGlc_uppTLUaeoDpz_zGyWWS-jBGYTQ_aem_FW50Bz-E1I2JWZel50TKLg" target="_blank" class="font-poppins text-sm text-black">First Stage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
