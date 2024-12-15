@extends('layout')

@section('style')
    <style>
        html,
        body {
            position: relative;
            height: 80%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiper-container-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }


        .swiper-button-prev,
        .swiper-button-next {
            position: relative;
            top: auto;
        }
    </style>
@endsection

@section('script')
    <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
            },
        });
        var swiper3 = new Swiper(".mySwiper3", {
            slidesPerView: 1,
            spaceBetween: 0,
            freeMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {

                0: {
                    slidesPerView: 1,
                }
            }
        });
        var swiper = new Swiper(".mySwiper2", {
            slidesPerView: 5,
            spaceBetween: 120,
            freeMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                1500: {
                    slidesPerView: 5,
                    spaceBetween: 120,
                },
                1150: {
                    slidesPerView: 4,
                    spaceBetween: 100,
                },
                900: {
                    slidesPerView: 3,
                    spaceBetween: 80,
                },
                600: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                0: {
                    slidesPerView: 1,
                }
            }
        });
    </script>
@endsection

@section('content')
    <div class="relative text-center w-full h-auto">
        <img src="{{ asset('assets/headproduct.jpg') }}" alt="" class="w-full h-[450px] opacity-100">
        <div
            class="absolute bottom-0 flex flex-col justify-start items-start mb-12 pl-20 max-sm:text-center max-sm:justify-center max-sm:pl-0 max-sm:items-center">
            <p class="font-bold text-white text-[35px] pl-10 max-sm:pl-0">Grow Your Business with Cashlez</p>
            <p class="text-white text-[15px] pl-10 mt-[20px] max-sm:pl-0">Solusi bisnis Anda dalam satu aplikasi</p>
            <p class="text-white text-[15px] pl-10 mt-[20px] leading-3 max-sm:pl-0">#JualanJadiGampang</p>
        </div>
    </div>

    <div class=" w-[100%] mt-2 flex mb-12 pl-32 max-sm:pl-0 max-sm:justify-center">
        <div>
            <p>
                Home
            </p>
        </div>
        <div class="mx-2">
            &#8594;
        </div>
        <div class=" text-cyan-300 font-bold">
            <i>Cashlez Product</i>
        </div>
    </div>
    <div class=" w-[80%] flex mx-auto my-28 max-md:flex-col max-md:justify-center items-center">
        <div class=" w-[60%] text-justify max-md:w-[80%] max-md:justify-center max-md:mb-5">
            <p class=" text-[#160f42] text-[50px] font-bold max-md: text-start">Cashlez mPos</p>
            <p class=" text-[20px] text-[#160f42]">Cashlez POS mengatur penjualan dan transaksi pelaku usaha agar menjadi
                efisien. Aplikasi ini menggunakan sistem berbasis cloud POS yang dapat digunakan pada berbagai platform dan
                sistem operasi.</p>
        </div>
        <div class=" w-[70%] relative justify-end items-center max-md:w-full">
            <img src="{{ asset('assets/handphone.png') }}" alt="" class=" h-[500px] max-md:h-[300px] -mt-56 w-[1200px] max-md:mt-0">
        </div> 
    </div>

    <div class=" bg-[#160f42] w-full h-auto flex items-center">
        <div class=" w-[80%] flex mx-auto my-28 max-md:flex-col max-md:items-center">
            <div class=" w-[50%] flex items-end max-md:w-full">
                <img src="{{ asset('assets/bca.png') }}" alt="" class=" h-[280px] w-[500px]">
            </div>
            <div class=" w-[50%] text-justify pl-[10px] max-md: items-center max-md:w-full">
                <p class=" text-cyan-300 text-[50px] font-bold max-md:text-center">Cashlez Product</p>
                <p class=" text-white text-[30px] font-bold max-md:text-center"><i>CashlezOne</i></p>
                <p class=" text-[20px] text-white">Mobile <i>Point-of-Sales </i>dan Payment Solusi berbasi Android.
                    <i>CashlezOne dapat digunakan sebagai POS tanpa bantuan alat tambahan, kareana semuanya telah
                        terintegrasi dalam satu perangkat</i>
            </div>
        </div>
    </div>

    <div class=" w-[80%] flex mx-auto my-28 max-md:flex-col max-md:justify-center items-center">
        <div class=" w-[40%] text-justify max-md:w-[80%] max-md:justify-center max-md:mb-5">
            <p class=" text-[#160f42] text-[50px] font-bold max-md: text-center">Cashlez Report</p>
            <p class=" text-[20px] text-[#160f42]">Sebuah instrumen kokoh yang dibuat agar Anda bisa mengurus bisnis,
                termasuk seluruh transaksi, tagihan, serta laporan pencapaian. Anda tidak perlu lagi merekonsiliasi
                transaksi-transaksi Anda karena semuanya akan terekonsiliasi secara otomatis.</p>
        </div>
        <div class=" w-[60%] flex justify-end items-center max-md:w-full">
            <img src="{{ asset('assets/laptop.png') }}" alt="" class=" h-[280px] w-[500px]">
        </div>
    </div>

    <div class=" bg-[#160f42] w-full h-auto flex items-center">
        <div class=" w-[80%] flex mx-auto my-28 max-md:flex-col max-md:items-center">
            <div class=" w-[50%] flex justify-start max-md:w-full">
                <img src="{{ asset('assets/integration.jpg') }}" alt="" class=" h-[280px] w-[500px]">
            </div>
            <div class=" w-[50%] text-justify pl-[10px] max-md: items-center max-md:w-full">
                <p class=" text-cyan-300 text-[50px] font-bold max-md:text-center">Integration Service</p>
                <p class=" text-[20px] text-white">Layanan yang dapat diintegrasikan dengan sistem pembayaran bisnis Kamu.
                    Beberapa contoh Merchant Cashlez yang telah melakukan integrasi ialah <a
                        href="https://www.wartaekonomi.co.id/read237701/informa-cashlez-rilis-mobile-cashier-permudah-transaksi-nontunai.html"
                        class=" text-blue-500">INFORMA</a>,&nbsp;<a
                        href="https://www.kompas.tv/article/59285/layanan-pembayaran-tanpa-antre-cashlez-di-gramedia"
                        class="text-blue-500">Gramedia</a>, dan <a
                        href="https://investor.id/finance/gandeng-fabelio-cashlez-hadirkan-layanan-baru-cashlezondelivery"
                        class="text-blue-500">Fabelio</a></p>
                <div class=" flex max-md:justify-center">
                    <button type="button"
                        class=" mt-10 inline-block rounded-full bg-[#2CC4F3] px-12 pb-1 pt-1.5 text-s font-semibold leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-[#160f42] hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
                        See More
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="m-16 text-center">
        <h1 class="font-semibold text-[#160f42] text-[35px]">WE ACCEPT</h1>
    </div>

    <div class="swiper-container-wrapper mb-20">
        <div class="swiper-button-prev mx-auto"></div>

        <div class="w-[20%] sm:w-[60%] sm:h-[90%] swiper mySwiper2">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{ asset('assets/payment1.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('assets/payment2.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('assets/payment3.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('assets/payment4.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('assets/payment5.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('assets/payment6.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('assets/payment7.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('assets/payment8.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('assets/payment9.png') }}" alt=""></div>
            </div>
        </div>

        <div class="swiper-button-next mx-auto"></div>
    </div>
@endsection
