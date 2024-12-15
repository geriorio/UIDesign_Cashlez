<nav class="  z-50 lg:px-28 fixed border-b-[0.1px] border-slate-500 flex w-full flex-wrap items-center justify-between bg-[#160F42] py-1 shadow-dark-mild dark:bg-neutral-700"
    data-twe-navbar-ref>
    <div class="flex w-full flex-wrap items-center justify-between px-3 max-lg:flex-row-reverse">
        <div>
            <a class="mx-2 my-1 flex items-center lg:mb-0 lg:mt-0" href="#">
                <img class=" mx-auto" src="{{ asset('assets/logo.png') }}" style="height: 70px" alt="TE Logo"
                    loading="lazy" />
            </a>
        </div>
        <button id="open-sidebar"
            class="block border-0 bg-transparent px-2 text-black/50 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 xl:hidden"
            type="button" data-twe-collapse-init data-twe-target="#navbarSupportedContent4"
            aria-controls="navbarSupportedContent4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="[&>svg]:w-7 [&>svg]:stroke-black/50 dark:[&>svg]:stroke-neutral-200">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                        clip-rule="evenodd" />
                </svg>
            </span>
        </button>

        <div class="mt-2 hidden flex-grow basis-[100%] items-center lg:mt-0 lg:flex lg:basis-auto"
            id="navbarSupportedContent4" data-twe-collapse-item>
            <ul class="max-xl:hidden list-style-none ms-auto flex flex-col ps-0 lg:mt-1 lg:flex-row"
                data-twe-navbar-nav-ref>
                <li class="text-sm my-4 ps-2 lg:my-0 lg:pe-1 lg:ps-2" data-twe-nav-item-ref>
                    <a class="uppercase font-bold text-white transition duration-200 hover:text-[#1AC4F4] hover:ease-in-out focus:text-[#1AC4F4] active:text-[#1AC4F4] motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2"
                        aria-current="page" href="#1AC4F4" data-twe-nav-link-ref>Company</a>

                </li>
                <li class="text-sm my-4 ps-2 lg:my-0 lg:pe-1 lg:ps-2" data-twe-nav-item-ref="">
                    <div class="flex" id="dropdownButton1">
                        <button
                            class="uppercase font-bold text-white transition duration-200 hover:text-[#1AC4F4] hover:ease-in-out focus:text-[#1AC4F4] active:text-[#1AC4F4] motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2"
                            href="">Product & Service</button>
                        <svg class="w-4 h-4" aria-hidden="true" fill="none" stroke="white" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>

                    <div id="dropdownMenu1"
                        class="hidden absolute right-30 z-10 mt-2 w-44 origin-top-right bg-white border border-gray-200  shadow-lg">
                        <div class="">
                            <a href="{{route('product')}}"
                                class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-[#1AC4F4]">
                                <span class="ml-2">Cashlez Product</span>
                            </a>
                            <a href="#"
                                class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-[#1AC4F4]">
                                <span class="ml-2">How to join</span>
                            </a>
                            <a href="#"
                                class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-[#1AC4F4]">
                                <span class="ml-2">Fees</span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="text-sm my-4 ps-2 lg:my-0 lg:pe-1 lg:ps-2" data-twe-nav-item-ref="">
                    <div class="flex" id="dropdownButton2">
                        <button
                            class="uppercase font-bold text-white transition duration-200 hover:text-[#1AC4F4] hover:ease-in-out focus:text-[#1AC4F4] active:text-[#1AC4F4] motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2"
                            href="">Support</button>
                        <svg class="w-4 h-4" aria-hidden="true" fill="none" stroke="white" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>

                    <div id="dropdownMenu2"
                        class="hidden absolute right-30 z-10 mt-2 w-44 origin-top-right bg-white border border-gray-200  shadow-lg">
                        <div class="">
                            <a href="#"
                                class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-[#1AC4F4]">
                                <span class="ml-2">FAQ</span>
                            </a>
                            <a href="{{route('contact')}}"
                                class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-[#1AC4F4]">
                                <span class="ml-2">Contact</span>
                            </a>
                            <a href="#"
                                class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-[#1AC4F4]">
                                <span class="ml-2">Fees</span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="text-sm my-4 ps-2 lg:my-0 lg:pe-1 lg:ps-2" data-twe-nav-item-ref="">
                    <a class="uppercase font-bold text-white transition duration-200 hover:text-[#1AC4F4] hover:ease-in-out focus:text-[#1AC4F4] active:text-[#1AC4F4] motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2"
                        href="">News & Blog</a>
                </li>
                <li class="text-sm my-4 ps-2 lg:my-0 lg:pe-1 lg:ps-2" data-twe-nav-item-ref="">
                    <a class="uppercase font-bold text-white transition duration-200 hover:text-[#1AC4F4] hover:ease-in-out focus:text-[#1AC4F4] active:text-[#1AC4F4] motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2"
                        href="">Login</a>
                </li>
            </ul>

            <div class="flex items-center space-x-3 ml-6">
                <button type="button" data-twe-ripple-init data-twe-ripple-color="light"
                    class="bg-[#1AC4F4] font-semibold inline-block rounded-md px-6 pb-2 pt-2.5 text-[14px] uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
                    SIGN UP
                </button>
                <div class="relative inline-block text-left">
                    <button type="button" id="dropdownButton" class="flex items-center pl-4  focus:outline-none">
                        <svg width="30" height="30" viewBox="0 0 80 60" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_31_30)">
                                <path d="M0 0H80V30H0V0Z" fill="#E70011" />
                                <path d="M0 30H80V60H0V30Z" fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_31_30">
                                    <rect width="80" height="60" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div id="dropdownMenu"
                        class="hidden absolute right-0 z-10 mt-2 w-44 origin-top-right bg-white border border-gray-200 rounded-md shadow-lg">
                        <div class="py-1">
                            <a href="#"
                                class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <img src="https://upload.wikimedia.org/wikipedia/en/a/a4/Flag_of_the_United_States.svg"
                                    alt="English" class="w-6 h-4">
                                <span class="ml-2">English</span>
                            </a>
                            <a href="#"
                                class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg"
                                    alt="Bahasa" class="w-6 h-4">
                                <span class="ml-2">Bahasa</span>
                            </a>
                        </div>
                    </div>
                </div>
                <svg width="25" height="25" viewBox="0 0 90 90" fill="none"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="90" height="90" fill="url(#pattern0_32_33)" />
                    <defs>
                        <pattern id="pattern0_32_33" patternContentUnits="objectBoundingBox" width="1"
                            height="1">
                            <use xlink:href="#image0_32_33" transform="scale(0.0111111)" />
                        </pattern>
                        <image id="image0_32_33" width="90" height="90"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAE0klEQVR4nO2cS49URRSADyaOAsOCEV9bY3Qh0URR1GhkQUATDejvmIHZKa4MMdENOAO6NQSfTGKMJhhjCKgRH6wV3KBCEHGA2bhgRuJ85qQPptPeqnt76Ln16PqS3nTf1D11uu6pU+dxRQqFQqFQKBQKhUKh8H+A1cBWYBdwAPgeOA3MAQv2mbPvvrNr9NotwKqKIQvXAG4DJoGvTZFLZcHG2Klj/neDYQd4EvgEuMrg+dvGfkKGFeAp4Cva40v9U2VYAO4ADgKLhGEGuF1yBnjBNrHQzAHbJTeAEWC6z1V8HngPmDBv4m5gLXCjfdbad/rbDrv2jz7GV1ne0LEkB4BR4IuGk58FpoCHruN+G+xPvdjwnp+rjJIywC3AiQaTPQOMAysHeO+V9jScbXD/H1RWSRE9OADfNnC/ppdzRZnCXwHma2Q5kdzKNptcZy5+Au5rUab1wMkGZiQdm22r1McHIY7KdI726t752CspADxX4128CdwQUL4VwB6PfCr785LAYcTnJ++TSAD2e+S8HHWcBHinxlwEW8m9qCw1ZuSARBy7cJmMH2MMX9Lx8U85ZF6MMhjlCRDNt+ld9Atwvycse1RiAnjM8wjulsgBXvPIH8+qtpiv68Q3sNPeMrt95xxz+FgiyozoCa+KcUkEOtmdKnRut8Ys4GwKq7knZOAKRE1IaCw/V8WUJAawzzGXYzHYNteO/aAkBvCwx3MK93Ra0L2K85IgdI7nFxxz2hxSsJcdQr0riULnBFvFiyGF0sKVODePJWL1IFW8LaGwKqEqtkiiAE875nQ8pFC/OoS6SxKFTsK3il9CCqXhxCrGJO08ZxUXQwrlcu1GJFHopOGqmA8pVI6Kvskxp4WQQuVoOtY55nQ5pFDDtBmeidG92yqJAjzjmNM3MR5Ydkii4I5GHgwplLYzVPG+JArwoWNOu0IKpX0mVWhgZoXkFVTaFDpY7nLxNkhiABs9WZbVsQb+pyUxcBfVHIk52jUbYy1HzdN5KdrcZ01ydiKT5OydEnm5wdkUVjWdlNzvjjkckljQIhPcvCqRA7yeRAGNYn18rsTmeokU4AGP5xR+E3R0wLqKHE8Gd48qANYAPztk1rk8KjFijZouZiIs2/0oubJdRTtSawrR90skAG955NSKpXUSM8CzGbRWbJcUsI5UaszIaCCb7DMX6TQLKdZCrK1kPk5pEXjL3oVr4+vmsKazJLEj7fGGDZ1rllmOJg2d3egiuVkSS91r+28d5yxmsmrACp70nPiyW9mjDcxI926vpbOPLCWebRvdRovCuQJEWStbbfbePl8jccEKDndamdY99uqIEfuMAffab5OWGfmzj/EXTabDWSlbAbZ5ShTaRJ+cbV11HFkqe8w2wH8Iw0xvT4o9Ia4IZJobZE/E7yjtccQXu8h2ZV8DeFxbzDzJg+tBxzzUNNSZvbK7SrH0jTHH+vR5e7lqq3d8KZmRoVB2z1tjNgMvaaW9vcnmtG2kC7ZSNXj1m1YQWdRQa0w2DSIc21DZn2Wh7NBkvUHGRlF2+8r+tKzsFijKbpGi7BYpym4Rc/3UtSuuXyTKTu7tDqkq+68Ua8RTVPaVmOpYclZ2uCb9zJU9ZebiisVn0npzb0pYzrLY5UKhUCgUCoVCQZaXfwHTxUWk6obW8wAAAABJRU5ErkJggg==" />
                    </defs>
                </svg>

            </div>

        </div>
    </div>
</nav>




<div class="bg-gray-100">

    <div class="flex overflow-hidden">
        <div class="fixed z-10 bg-[#160F42] text-white w-56 min-h-screen overflow-y-auto transition-transform transform -translate-x-full ease-in-out duration-300"
            id="sidebar">
            <div class="">
                <h1 class="text-2xl font-semibold">Sidebar</h1>
                <ul class="mt-14">
                    <li class="mb-2 border-b-2 border-slate-400"><a href="#"
                            class="block hover:text-indigo-400 p-2 uppercase text-xs font-semibold">Company</a></li>
                    <li class="mb-2 border-b-2 border-slate-400"><a href="#"
                            class="block hover:text-indigo-400 p-2 uppercase text-xs font-semibold">Product &
                            Service</a></li>
                    <li class="mb-2 border-b-2 border-slate-400"><a href="#"
                            class="block hover:text-indigo-400 p-2 uppercase text-xs font-semibold">Support</a></li>
                    <li class="mb-2 border-b-2 border-slate-400"><a href="#"
                            class="block hover:text-indigo-400 p-2 uppercase text-xs font-semibold">News & Blog</a>
                    </li>
                    <li class="mb-2 border-b-2 border-slate-400"><a href="#"
                            class="block hover:text-indigo-400 p-2 uppercase text-xs font-semibold">Login</a></li>

                </ul>
            </div>
        </div>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const openSidebarButton = document.getElementById('open-sidebar');

        openSidebarButton.addEventListener('click', (e) => {
            e.stopPropagation();
            sidebar.classList.toggle('-translate-x-full');
        });

        document.addEventListener('click', (e) => {
            if (!sidebar.contains(e.target) && !openSidebarButton.contains(e.target)) {
                sidebar.classList.add('-translate-x-full');
            }
        });
        const dropdownButton = document.getElementById('dropdownButton');
        const dropdownButton1 = document.getElementById('dropdownButton1');
        const dropdownMenu = document.getElementById('dropdownMenu');
        const dropdownMenu1 = document.getElementById('dropdownMenu1');
        const dropdownButton2 = document.getElementById('dropdownButton2');
        const dropdownMenu2 = document.getElementById('dropdownMenu2');


        dropdownButton.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });
        document.addEventListener('click', (e) => {
            if (!dropdownButton.contains(e.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });
        dropdownButton1.addEventListener('click', () => {
            dropdownMenu1.classList.toggle('hidden');
        });
        document.addEventListener('click', (e) => {
            if (!dropdownButton1.contains(e.target)) {
                dropdownMenu1.classList.add('hidden');
            }
        });
        dropdownButton2.addEventListener('click', () => {
            dropdownMenu2.classList.toggle('hidden');
        });
        document.addEventListener('click', (e) => {
            if (!dropdownButton2.contains(e.target)) {
                dropdownMenu2.classList.add('hidden');
            }
        });
    </script>

</div>
