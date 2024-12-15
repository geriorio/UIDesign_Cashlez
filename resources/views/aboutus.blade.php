@extends('layout')

@section('content')
<div class="relative w-full h-auto">
    <img src="{{asset('assets/map_cashlez.jpg')}}" alt="" class=" w-full h-[550px]">
    <div class="w-[300px] h-[300px] bg-white border p-5 rounded-md absolute bottom-0 left-[200px] mb-5 max-md:hidden">
        <p class="text-[20px] font-semibold">PT Cashlez Worldwide Indonesia Tbk</p>
        <p class="text-[15px]">
            Atria @Sudirman Lantai 23, Jl. Jenderal Sudirman No.Kav. 33A, RT.3/RW.2, Karet Tengsin, Kecamatan Tanah Abang Jakarta Pusat 10220, Indonesia
        </p>
        <div class="flex flex-row mt-3">
            <div class="w-[10%] mr-3">
                <img src="{{asset('assets/contact-phone.png')}}" alt="">
            </div>
            <div class="w-[90]%">
                <p class="text-[15px]">021-5745856</p>
            </div>
        </div>
        <div class="flex flex-row mt-3 mb-3">
            <div class="w-[10%] mr-3">
                <img src="{{asset('assets/contact-mail.png')}}" alt="">
            </div>
            <div class="w-[90]% text-[15px]">
                <p>marketing@cashlez.com</p>
            </div>
        </div>
    </div>
</div>
<div class="w-full h-[300px] bg-white border p-5 rounded-md mb-5 m-5 md:hidden">
    <p class="text-[20px] font-semibold">PT Cashlez Worldwide Indonesia Tbk</p>
    <p class="text-[15px]">
        Atria @Sudirman Lantai 23, Jl. Jenderal Sudirman No.Kav. 33A, RT.3/RW.2, Karet Tengsin, Kecamatan Tanah Abang Jakarta Pusat 10220, Indonesia
    </p>
    <div class="flex flex-row mt-3">
        <div class="w-[10%] mr-3">
            <img src="{{asset('assets/contact-phone.png')}}" alt="">
        </div>
        <div class="w-[90]%">
            <p class="text-[15px]">021-5745856</p>
        </div>
    </div>
    <div class="flex flex-row mt-3 mb-3">
        <div class="w-[10%] mr-3">
            <img src="{{asset('assets/contact-mail.png')}}" alt="">
        </div>
        <div class="w-[90]% text-[15px]">
            <p>marketing@cashlez.com</p>
        </div>
    </div>
</div>
<div class=" w-[74%] mx-auto mt-2 flex mb-12">
    <div>
    <p>
        Home
    </p>
    </div>
    <div class="mx-2">
        &#8594;
    </div>
    <div class=" text-cyan-300 font-bold">
        <i>Contact Us</i>
    </div>
</div>

<div class=" flex items-center justify-center">
    <div class="flex w-full h-auto justify-center max-md:flex-col max-md:items-center">
        <div class=" w-[20%] flex items-center flex-col ">
            <div>
                <p class=" text-[22px] font-semibold px-5 text-[#160f42]"> Supported Office</p>
            </div>
            <div>
                <img src="{{asset('assets/supported-office.png')}}" alt="">
            </div>
            <div>
            <button type="button"
                class=" mt-10 inline-block rounded-full bg-[#2CC4F3] px-12 pb-1 pt-1.5 text-s font-semibold leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-[#160f42] hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
                See More
            </button>
            </div>
        </div>
        <div class="w-[60%] max-md:w-[100%] flex flex-col max-md:justify-center max-md:text-center max-md:mt-10">
            <div class=" pl-[32px]">
                <p class=" text-[22px] font-semibold text-[#160f42] ">Tell Us Your Corners</p>
            </div>
            <div class=" pl-[32px]">
                <p class=" text-[15px] "> We would like to hear from you!</p>
            </div>
            <div class=" bg-white p-8 rounded-md shadow-lg">
                <form>
                  <div class="mb-4 flex justify-between">
                    <div class=" w-1/3">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Type of inquiry <span class=" text-red-500">*</span></label>
                    </div>
                    <div class=" w-2/3">
                        <select class="block w-full px-3 py-2 bg-white border border-black shadow-sm focus:outline-none focus:ring-black focus:border-black sm:text-sm">
                            <option>Choose Subject</option>
                            <option value="general">Distributor</option>
                            <option value="support">Products</option>
                            <option value="sales">Tips</option>
                            <option value="sales">Events</option>

                          </select>
                    </div>
                  </div>
              
                  <div class="mb-4 flex justify-between">
                    <div class=" w-1/3">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Name<span class=" text-red-500">*</span></label>
                    </div>
                    <div class=" w-2/3">
                        <input type="text" id="name" class="block w-full px-3 py-2 border border-black shadow-sm focus:outline-none focus:ring-black focus:border-black sm:text-sm" placeholder="Name">
                    </div>
                  </div>

                  <div class="mb-4 flex justify-between">
                    <div class=" w-1/3">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Email<span class=" text-red-500">*</span></label>
                    </div>
                    <div class=" w-2/3">
                        <input type="text" id="name" class="block w-full px-3 py-2 border border-black shadow-sm focus:outline-none focus:ring-black focus:border-black sm:text-sm" placeholder="Email">
                    </div>
                  </div>
                  
                  <div class="mb-4 flex justify-between">
                    <div class=" w-1/3">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Phone<span class=" text-red-500">*</span></label>
                    </div>
                    <div class=" w-2/3">
                        <input type="text" id="name" class="block w-full px-3 py-2 border border-black shadow-sm focus:outline-none focus:ring-black focus:border-black sm:text-sm" placeholder="Phone">
                    </div>
                  </div>

                  <div class="mb-4 flex justify-between">
                    <div class=" w-1/3">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Message<span class=" text-red-500">*</span></label>
                    </div>
                    <div class=" w-2/3">
                        <textarea placeholder="Message" cols="30" rows="" class=" border border-black w-full h-[200px]"> </textarea>
                    </div>
                  </div>

                  <div class="mb-4 flex justify-between">

                    <div class="w-4/12">
                      <label class="block text-gray-700 text-sm font-bold mb-2">
                        Captcha<span class="text-red-500">*</span>
                      </label>
                    </div>
                
                    <div class="flex w-8/12">
                      <div class="w-3/12">
                        <img src="{{asset('assets/captcha.jpeg')}}" alt="captcha" class="border border-black shadow-sm h-full">
                      </div>

                      <div class="w-full">
                        <input type="text" class="block w-full px-3 py-2 border border-black border-l-0  shadow-sm focus:outline-none focus:ring-black focus:border-black sm:text-sm" placeholder="Captcha">
                      </div>
                    </div>
                  </div>
                  

              
                  <div class=" flex justify-center">
                    <button type="button"
                        class=" mt-10 inline-block rounded-full bg-[#2CC4F3] px-12 pb-1 pt-1.5 text-s font-semibold leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-[#160f42] hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
                        Submit
                    </button>
                    </div>
                </form>
              </div>
              
        </div>
    
    
    </div>
    
</div>

@endsection
