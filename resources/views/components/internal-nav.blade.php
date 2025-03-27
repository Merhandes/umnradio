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
                    <a href="/partnership-mediapartner" class="font-poppins text-base text-white no-underline">Partnership</a>
                    <a href="/admin-landing" class="font-poppins text-base text-white no-underline">Admin</a>
                @endadmin
            </div>
            <div class="relative hover:cursor-pointer" id="parent">
                <div
                    class="h-10 flex flex-row align-middle justify-center items-center gap-2 bg-white rounded-full p-1 ml-2 hover:scale-110 ease-in-out duration-100">
                    <img class="object-cover h-full" src="/images/avatar.webp" alt="Logo">
                    <p class="text-[#021f3a] text-xs md:text-md">{{ auth()->user()->name }}</p>
                </div>
                <!-- Dropdown menu -->
                <form action="/logout" method="POST">
                    @csrf
                    <div id="logoutDropdown" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg hidden">
                        <button type="submit" class="block w-full text-left px-4 py-2 text-[#021f3a] hover:bg-gray-200">
                            Logout
                        </button>
                    </div>
                </form>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const dropdown = document.getElementById('logoutDropdown');
                    const parentDiv = document.getElementById('parent');

                    // Toggle dropdown visibility
                    parentDiv.addEventListener('click', function(event) {
                        event.stopPropagation(); // Prevent dropdown from closing immediately
                        dropdown.classList.toggle('hidden');
                    });

                    // Close dropdown when clicking outside
                    document.addEventListener('click', function(event) {
                        if (!parentDiv.contains(event.target)) {
                            dropdown.classList.add('hidden');
                        }
                    });
                });
            </script>

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
                            <a href="/partnership-mediapartner" class="font-poppins text-sm text-black">Partnership</a>
                            <a href="/admin-landing" class="font-poppins text-sm text-black">Admin</a>
                        @endadmin
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="font-poppins text-sm text-black">Logout</button>
                            {{-- <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button> --}}
                        </form>
                        {{-- <a href="/logout" class="font-poppins text-sm text-black">Logout</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
