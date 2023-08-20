<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UMN Radio</title>
    @vite('resources/css/app.css')
</head>

<body class="composer">
    <div class="container overflow-hidden mx-auto">
        <div id="schedule">
            <h1 class="text-center font-bold text-3xl">Weekly Schedule</h1>
            <div class="border-t-2 border-pink-500 w-56 mx-auto mt-4"></div>
            <div class="tabs-group">
                <div class="tabs-container flex">
                    <div class="tabs">
                        <p class="font-semibold text-xl">Monday</p>
                    </div>
                    <div class="tabs">
                        <p class="font-semibold text-xl">Tuesday</p>
                    </div>
                    <div class="tabs">
                        <p class="font-semibold text-xl">Wednesday</p>
                    </div>
                    <div class="tabs">
                        <p class="font-semibold text-xl">Thursday</p>
                    </div>
                    <div class="tabs">
                        <p class="font-semibold text-xl">Friday</p>
                    </div>

                    <div class="indicator"></div>
                </div>

                <div class="tab-content">
                    <div class="flex justify-around tab-content-item text-center lg:mb-3">
                        <div class="relative group cursor-pointer lg:p-10 p-5">
                            <div class="flex flex-col justify-center absolute h-5/6 w-full group-hover:scale-100 top-3 lg:top-6 -left-0 rounded-xl z-50 opacity-0 cursor-pointer bg-black/50 text-white transform-gpu group-hover:opacity-100 transition duration-300 ease-in-out">
                                <div class="font-bold text-xl">NEWS FLASH</div>
                                <div class="opacity-80 text-l">10.00 - 11.00</div>
                            </div>
                            <img alt=""
                                class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl h-full w-full"
                                src="{{ asset('assets/NF.webp') }}"
                            />
                        </div>

                        <div class="relative group cursor-pointer lg:p-10 p-5">
                            <div class="flex flex-col justify-center absolute h-5/6 w-full group-hover:scale-100 top-3 lg:top-6 -left-0 rounded-xl z-50 opacity-0 cursor-pointer bg-pink-400/50 text-white transform-gpu  group-hover:opacity-100 transition duration-300 ease-in-out">
                                <div class="font-bold text-xl">SERSAN</div>
                                <div class="opacity-80 text-l">11.00 - 14.00</div>
                            </div>
                            <img alt=""
                                class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl h-full w-full"
                                src="{{ asset('assets/SS.webp') }}"
                            />
                        </div>

                        <div class="relative group cursor-pointer lg:p-10 p-5">
                            <div class="flex flex-col justify-center absolute h-5/6 w-full group-hover:scale-100 top-3 lg:top-6 -left-0 rounded-xl z-50 opacity-0 cursor-pointer bg-orange-300/50 text-white transform-gpu  group-hover:opacity-100 transition duration-300 ease-in-out">
                                <div class="font-bold text-xl">SKOOB</div>
                                <div class="opacity-80 text-l">14.00 - 17.00</div>
                            </div>
                            <img alt=""
                                class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl h-full w-full"
                                src="{{ asset('assets/SKOOB.webp') }}"
                            />
                        </div>
                    </div>
                    <div class="flex justify-around tab-content-item text-center mx-32 lg:mx-60">
                        <div class="relative group cursor-pointer lg:p-10 p-5">
                            <div class="flex flex-col justify-center absolute h-5/6 w-full group-hover:scale-100 top-3 lg:top-6 -left-0 rounded-xl z-50 opacity-0 cursor-pointer bg-blue-800/50 text-white transform-gpu  group-hover:opacity-100 transition duration-300 ease-in-out">
                                <div class="font-bold text-xl">MUSIKALITAS</div>
                                <div class="opacity-80 text-l">11.00 - 14.00</div>
                            </div>
                            <img alt=""
                                class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl h-full w-full"
                                src="{{ asset('assets/M.webp') }}"
                            />
                        </div>

                        <div class="relative group cursor-pointer lg:p-10 p-5">
                            <div class="flex flex-col justify-center absolute h-5/6 w-full group-hover:scale-100 top-3 lg:top-6 -left-0 rounded-xl z-50 opacity-0 cursor-pointer bg-blue-500/50 text-white transform-gpu  group-hover:opacity-100 transition duration-300 ease-in-out">
                                <div class="font-bold text-xl">CAMPUS TROOPS</div>
                                <div class="opacity-80 text-l">15.00 - 17.00</div>
                            </div>
                            <img alt=""
                                class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl h-full w-full"
                                src="{{ asset('assets/CT.webp') }}"
                            />
                        </div>
                    </div>
                    <div class="flex justify-around tab-content-item text-center lg:mb-3">
                        <div class="relative group cursor-pointer lg:p-10 p-5">
                            <div class="flex flex-col justify-center absolute h-5/6 w-full group-hover:scale-100 top-3 lg:top-6 -left-0 rounded-xl z-50 opacity-0 cursor-pointer bg-purple-900/50 text-white transform-gpu  group-hover:opacity-100 transition duration-300 ease-in-out">
                                <div class="font-bold text-xl">SODA</div>
                                <div class="opacity-80 text-l">10.00 - 13.00</div>
                            </div>
                            <img alt=""
                                class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl h-full w-full"
                                src="{{ asset('assets/SODA.webp') }}"
                            />
                        </div>

                        <div class="relative group cursor-pointer lg:p-10 p-5">
                            <div class="flex flex-col justify-center absolute h-5/6 w-full group-hover:scale-100 top-3 lg:top-6 -left-0 rounded-xl z-50 opacity-0 cursor-pointer bg-black/50 text-white transform-gpu  group-hover:opacity-100 transition duration-300 ease-in-out">
                                <div class="font-bold text-xl">NEWS FLASH</div>
                                <div class="opacity-80 text-l">13.00 - 14.00</div>
                            </div>
                            <img alt=""
                                class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl h-full w-full"
                                src="{{ asset('assets/NF.webp') }}"
                            />
                        </div>

                        <div class="relative group cursor-pointer lg:p-10 p-5">
                            <div class="flex flex-col justify-center absolute h-5/6 w-full group-hover:scale-100 top-3 lg:top-6 -left-0 rounded-xl z-50 opacity-0 cursor-pointer bg-yellow-300/50 text-white transform-gpu  group-hover:opacity-100 transition duration-300 ease-in-out">
                                <div class="font-bold text-xl">KAJJA</div>
                                <div class="opacity-80 text-l">14.00 - 17.00</div>
                            </div>
                            <img alt=""
                                class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl h-full w-full"
                                src="{{ asset('assets/K.webp') }}"
                            />
                        </div>
                    </div>
                    <div class="flex justify-around tab-content-item text-center mx-32 lg:mx-60">
                        <div class="relative group cursor-pointer lg:p-10 p-5">
                            <div class="flex flex-col justify-center absolute h-5/6 w-full group-hover:scale-100 top-3 lg:top-6 -left-0 rounded-xl z-50 opacity-0 cursor-pointer bg-black/50 text-white transform-gpu  group-hover:opacity-100 transition duration-300 ease-in-out">
                                <div class="font-bold text-xl">JERIT MALAM</div>
                                <div class="opacity-80 text-l">11.00 - 14.00</div>
                            </div>
                            <img alt=""
                                class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl h-full w-full"
                                src="{{ asset('assets/JM.webp') }}"
                            />
                        </div>

                        <div class="relative group cursor-pointer lg:p-10 p-5">
                            <div class="flex flex-col justify-center absolute h-5/6 w-full group-hover:scale-100 top-3 lg:top-6 -left-0 rounded-xl z-50 opacity-0 cursor-pointer bg-blue-500/50 text-white transform-gpu  group-hover:opacity-100 transition duration-300 ease-in-out">
                                <div class="font-bold text-xl">CAMPUS TROOPS</div>
                                <div class="opacity-80 text-l">15.00 - 17.00</div>
                            </div>
                            <img alt=""
                                class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl h-full w-full"
                                src="{{ asset('assets/CT.webp') }}"
                            />
                        </div>
                    </div>
                    <div class="flex justify-around tab-content-item text-center lg:mb-3">
                        <div class="relative group cursor-pointer lg:p-10 p-5">
                            <div class="flex flex-col justify-center absolute h-5/6 w-full group-hover:scale-100 top-3 lg:top-6 -left-0 rounded-xl z-50 opacity-0 cursor-pointer bg-red-800/50 text-white transform-gpu  group-hover:opacity-100 transition duration-300 ease-in-out">
                                <div class="font-bold text-xl">BILCIN</div>
                                <div class="opacity-80 text-l">10.00 - 13.00</div>
                            </div>
                            <img alt=""
                                class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl h-full w-full"
                                src="{{ asset('assets/BC.webp') }}"
                            />
                        </div>

                        <div class="relative group cursor-pointer lg:p-10 p-5">
                            <div class="flex flex-col justify-center absolute h-5/6 w-full group-hover:scale-100 top-3 lg:top-6 -left-0 rounded-xl z-50 opacity-0 cursor-pointer bg-black/50 text-white transform-gpu  group-hover:opacity-100 transition duration-300 ease-in-out">
                                <div class="font-bold text-xl">NEWS FLASH</div>
                                <div class="opacity-80 text-l">13.00 - 14.00</div>
                            </div>
                            <img alt=""
                                class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl h-full w-full"
                                src="{{ asset('assets/NF.webp') }}"
                            />
                        </div>

                        <div class="relative group cursor-pointer lg:p-10 p-5">
                            <div class="flex flex-col justify-center absolute h-5/6 w-full group-hover:scale-100 top-3 lg:top-6 -left-0 rounded-xl z-50 opacity-0 cursor-pointer bg-purple-300/50 text-white transform-gpu  group-hover:opacity-100 transition duration-300 ease-in-out">
                                <div class="font-bold text-xl">CHARTTOPPERS</div>
                                <div class="opacity-80 text-l">14.00 - 17.00</div>
                            </div>
                            <img alt=""
                                class="object-cover group-hover:scale-110 transition duration-300 ease-in-out rounded-xl h-full w-full"
                                src="{{ asset('assets/C.webp') }}"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div
                class="flex flex-col items-center text-center space-y-3 md:flex-row md:justify-around md:items-start md:text-left md:space-y-0">
                <div>
                    <img src="{{ asset('assets/umnradio.webp') }}" alt="logo" class="w-20 mt-1">
                </div>
                <div class="text-xs">
                    <p>Jalan Scientia Boulevard</p>
                    <p>Universitas Multimedia Nusantara, Gedung B lt. 6</p>
                    <p>Tangerang, Banten 15811, ID</p>
                </div>
                <div class="text-xs">
                    <p class="mb-1">Contact Us</p>
                    <div class="flex-col">
                        <a href="http://line.me/ti/p/~@umnradio#~" class="text-black no-underline">
                            <div class="flex">
                                <img src="{{ asset('assets/line.webp') }}" alt="line" class="w-4 mb-1 mr-1">
                                <p>Line@</p>
                            </div>
                        </a>

                        <a href="https://twitter.com/UMNRADIO" class="text-black no-underline">
                            <div class="flex">
                                <img src="{{ asset('assets/twitter.webp') }}" alt="line" class="w-4 mb-1 mr-1">
                                <p>Twitter</p>
                            </div>
                        </a>

                        <a href="https://www.youtube.com/channel/UCeVl4fsOVkU7yVCurgoq5Lg"
                            class="text-black no-underline">
                            <div class="flex">
                                <img src="{{ asset('assets/youtube.webp') }}" alt="line" class="w-4 mb-1 mr-1">
                                <p>Youtube</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="text-xs">
                    <p class="mb-1">Get Our App</p>
                    <a
                        href="https://play.google.com/store/apps/details?id=com.umnradio.umnradio&pcampaignid=web_share"><img
                            src="{{ asset('assets/playstore.webp') }}" alt="playstore" class="w-20"></a>
                </div>
            </div>
        </footer>
    </div>

    <script>
        const allTabsGroup = document.querySelectorAll(".tabs-group");

        allTabsGroup.forEach((tabsGroup) => {
            for (let i = 0; i < tabsGroup.children.length; i++) {
                const tabs = tabsGroup.children[i].querySelectorAll('.tabs');
                const tabContent = tabsGroup.children[i].querySelectorAll('.tab-content-item');
                const indicator = tabsGroup.children[i].querySelector('.indicator');
                const tabsContainer = tabsGroup.children[0];
                const content = tabsGroup.children[1].querySelectorAll('.tab-content-item');

                if (indicator) {
                    indicator.classList.add('bg-blue-500', 'h-0.5', 'absolute', 'bottom-0', 'left-0',
                        'transition-all', 'duration-200');
                    indicator.style.width = `${100 / tabs.length}%`;
                }

                if (tabsContainer) {
                    tabsContainer.classList.add('relative', 'flex', 'flex-row', 'items-center', 'justify-center');
                }

                if (content) {
                    content.forEach((item) => {
                        item.classList.add('hidden', 'relative');
                    });
                    content[0].classList.remove('hidden');
                }

                const updateContent = (old, index) => {
                    let oldContent = content[old / 100];
                    let newContent = content[index];
                    if ((old / 100) === index) return;

                    if (oldContent && newContent) {
                        oldContent.classList.add('absolute', 'opacity-0', 'transition-all', 'duration-200');
                        newContent.classList.add('absolute', 'opacity-0', 'transition-all', 'duration-200');

                        setTimeout(() => {
                            oldContent.classList.remove('absolute', 'opacity-0', 'transition-all',
                                'duration-200');
                            oldContent.classList.add('hidden');

                            newContent.classList.add('!opacity-100');

                            newContent.classList.remove('!left-0', '!opacity-100', 'absolute',
                                'opacity-0', 'transition-all', 'duration-200');
                            newContent.classList.remove('hidden');
                        }, 200);
                    }
                }

                tabs.forEach((tab, index) => {
                    tab.classList.add('p-2', 'text-center', 'w-full', 'cursor-pointer', 'transition-all',
                        'duration-200', 'hover:bg-gray-200');
                    tab.addEventListener('click', () => {
                        let old = (String(indicator.style.transform || 'translateX(0%)').split(
                            'translateX(')).filter(Boolean).join('').split('%)')[0];
                        indicator.style.transform = `translateX(${index * 100}%)`;
                        updateContent(old, index);
                    })
                });

            }
        });
    </script>
</body>

</html>
