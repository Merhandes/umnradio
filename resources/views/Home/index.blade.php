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
                <h1 class="text-center font-semibold">Weekly Schedule</h1>
                <div class="border-t-2 border-pink-500 w-10 mx-auto mt-4"></div>
                <div class="tabs-group">
                    <div class="tabs-container flex">
                        <div class="tabs">
                            <p>Monday</p>
                        </div>
                        <div class="tabs">
                            <p>Tuesday</p>
                        </div>
                        <div class="tabs">
                            <p>Wednesday</p>
                        </div>
                        <div class="tabs">
                            <p>Thursday</p>
                        </div>
                        <div class="tabs">
                            <p>Friday</p>
                        </div>
            
                        <div class="indicator"></div>
                    </div>
            
                    <div class="tab-content mt-3">
                        <div class="tab-content-item flex justify-around">
                            <div>
                                <img src="{{ asset('assets/NF.webp') }}" alt="News Flash" class="w-20">
                                <p class="-ml-1.5">10.00 - 11.00</p>
                            </div>
                            
                            <div>
                                <img src="{{ asset('assets/SS.webp') }}" alt="SERSAN" class="w-20">
                                <p class="-ml-1.5">11.00 - 14.00</p>
                            </div>
                            
                            <div>
                                <img src="{{ asset('assets/SKOOB.webp') }}" alt="SKOOB" class="w-20">
                                <p class="-ml-1.5">14.00 - 17.00</p>
                            </div>
                        </div>
                        <div class="tab-content-item flex justify-around">
                            <div>
                                <img src="{{ asset('assets/M.webp') }}" alt="Musikalitas" class="w-20">
                                <p class="-ml-1.5">11.00 - 14.00</p>
                            </div>
                            
                            <div>
                                <img src="{{ asset('assets/CT.webp') }}" alt="Campus Troops" class="w-20">
                                <p class="-ml-1.5">15.00 - 17.00</p>
                            </div>
                        </div>
                        <div class="tab-content-item flex justify-around">
                            <div>
                                <img src="{{ asset('assets/SODA.webp') }}" alt="SODA" class="w-20">
                                <p class="-ml-1.5">10.00 - 13.00</p>
                            </div>

                            <div>
                                <img src="{{ asset('assets/NF.webp') }}" alt="News Flash" class="w-20">
                                <p class="-ml-1.5">13.00 - 14.00</p>
                            </div>
                        
                            <div>
                                <img src="{{ asset('assets/K.webp') }}" alt="KAJJA" class="w-20">
                                <p class="-ml-1.5">14.00 - 17.00</p>
                            </div>
                        </div>
                        <div class="tab-content-item flex justify-around">
                            <div>
                                <img src="{{ asset('assets/JM.webp') }}" alt="Jerit Malam" class="w-20">
                                <p class="-ml-1.5">11.00 - 14.00</p>
                            </div>
                            
                            <div>
                                <img src="{{ asset('assets/CT.webp') }}" alt="Campus Troops" class="w-20">
                                <p class="-ml-1.5">15.00 - 17.00</p>
                            </div>
                        </div>
                        <div class="tab-content-item flex justify-around">
                            <div>
                                <img src="{{ asset('assets/BC.webp') }}" alt="BILCIN" class="w-20">
                                <p class="-ml-1.5">10.00 - 13.00</p>
                            </div>

                            <div>
                                <img src="{{ asset('assets/NF.webp') }}" alt="News Flash" class="w-20">
                                <p class="-ml-1.5">13.00 - 14.00</p>
                            </div>
                            
                            <div>
                                <img src="{{ asset('assets/C.webp') }}" alt="Charttopppers" class="w-20">
                                <p class="-ml-1.5">14.00 - 17.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="m-10"></div>

            <footer>
                <div class="flex flex-col items-center text-center space-y-3 md:flex-row md:justify-around md:items-start md:text-left md:space-y-0">
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

                            <a href="https://www.youtube.com/channel/UCeVl4fsOVkU7yVCurgoq5Lg" class="text-black no-underline">
                                <div class="flex">
                                    <img src="{{ asset('assets/youtube.webp') }}" alt="line" class="w-4 mb-1 mr-1">
                                    <p>Youtube</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="text-xs">
                        <p class="mb-1">Get Our App</p>
                        <a href="https://play.google.com/store/apps/details?id=com.umnradio.umnradio&pcampaignid=web_share"><img src="{{ asset('assets/playstore.webp') }}" alt="playstore" class="w-20"></a>
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
                        indicator.classList.add('bg-blue-500', 'h-0.5', 'absolute', 'bottom-0', 'left-0', 'transition-all', 'duration-200');
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
                                oldContent.classList.remove('absolute', 'opacity-0', 'transition-all', 'duration-200');
                                oldContent.classList.add('hidden');
    
                                newContent.classList.add('!opacity-100');
    
                                newContent.classList.remove('!left-0', '!opacity-100', 'absolute', 'opacity-0', 'transition-all', 'duration-200');
                                newContent.classList.remove('hidden');
                            }, 200);
                        }
                    }
    
                    tabs.forEach((tab, index) => {
                        tab.classList.add('p-2', 'text-center', 'w-full', 'cursor-pointer', 'transition-all', 'duration-200', 'hover:bg-gray-200');
                        tab.addEventListener('click', () => {
                            let old = (String(indicator.style.transform || 'translateX(0%)').split('translateX(')).filter(Boolean).join('').split('%)')[0];
                            indicator.style.transform = `translateX(${index * 100}%)`;
                            updateContent(old, index);
                        })
                    });
    
                }
            });
        </script>
    </body>
</html>