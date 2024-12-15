<footer class="bg-[#090a3a] text-white p-8 px-32">
    <div class="container mx-auto px-4 text-center mt-8">
        <div class="flex mb-4 justify-center">
            <div
                class="icon-container rounded-full w-[60px] h-[60px] max-lg:w-[52px] max-lg:h-[52px] flex items-center justify-center 
                        hover:bg-[var(--pink-hover)] hover:cursor-pointer hover:border-none">
                <a class="icon-link hover:cursor-pointer" href="">
                    <i
                        class="contact-icon fa-brands fa-instagram mx-3 text-3xl max-lg:text-2xl hover:cursor-pointer"></i>
                </a>
            </div>
            <div
                class="icon-container rounded-full w-[60px] h-[60px] max-lg:w-[52px] max-lg:h-[52px] flex items-center justify-center 
                        hover:bg-[var(--pink-hover)] hover:cursor-pointer hover:border-none">
                <a class="icon-link hover:cursor-pointer" href="">
                    <i
                        class="contact-icon fa-brands fa-facebook mx-3 text-3xl max-lg:text-2xl hover:cursor-pointer"></i>
                </a>
            </div>
            <div
                class="icon-container rounded-full w-[60px] h-[60px] max-lg:w-[52px] max-lg:h-[52px] flex items-center justify-center 
                    hover:bg-[var(--pink-hover)] hover:cursor-pointer hover:border-none">
                <a class="icon-link hover:cursor-pointer" href="">
                    <i
                        class="contact-icon fa-brands fa-linkedin mx-3 text-3xl max-lg:text-2xl hover:cursor-pointer"></i>
                </a>
            </div>
            <div
                class="icon-container rounded-full w-[60px] h-[60px] max-lg:w-[52px] max-lg:h-[52px] flex items-center justify-center 
                        hover:bg-[var(--pink-hover)] hover:cursor-pointer hover:border-none">
                <a class="icon-link hover:cursor-pointer" href="">
                    <i class="contact-icon fa-brands fa-youtube mx-3 text-3xl max-lg:text-2xl hover:cursor-pointer"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-4 flex flex-col lg:flex-row justify-between items-center">
        <div class="mb-4 lg:mb-0 flex flex-col items-center lg:items-start">
            <img src="{{ asset('assets/logo.png') }}" alt="Cashlez Logo" class="mb-4">
            <div class="space-y-2">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 10l1.5 1.5M8.5 15H19a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v5.5M21 14h-2" />
                    </svg>
                    <span>021-5745856</span>
                </div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 12H8m4 8V4" />
                    </svg>
                    <span>marketing@cashlez.com</span>
                </div>
            </div>
        </div>
        <div class="mb-4 lg:mb-0">
            <div class="flex flex-wrap justify-center space-x-4">
                <img src="{{asset('assets/footer.png')}}" alt="Logo 1" class=" h-36">
            </div>
        </div>
        <div class="flex flex-col items-center lg:items-end">
            <p class="mb-4">Subscribe to our newsletter</p>
            <form class="flex">
                <input type="email" placeholder="Email Address"
                    class="p-2 rounded-l-md border-none focus:ring-2 focus:ring-blue-500 outline-none">
                <button class="bg-blue-500 p-2 rounded-r-md text-white">Submit</button>
            </form>
        </div>
    </div>

    <div class="container mx-auto px-4 text-center mt-8">
        <p class="text-sm">&copy; 2024 All Rights Reserved Cashlez</p>
    </div>
</footer>