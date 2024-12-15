@extends('layout')
@section('style')
    <style>
        .custom-shape-divider-bottom-1725791922 .shape-fill {
            fill: #FFFFFF;
        }

        .custom-shape-divider-bottom-1725791922 {
            position: absolute;
            bottom: 0;
            top: 10px;
            width: 100%;
            height: auto;
            z-index: 5;
            transform: rotate(180deg);
        }

        .swiper {
            width: 50%;
            height: 70%;
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

        .custom-shape-divider-bottom-1725791922 img {
            position: relative;
            display: block;
            width: 100%;
            margin-top: -1px;
            transform: scale(-1);
        }

        .swiper-pagination {
            position: absolute;
            z-index: 1000;
            left: 0;
            right: 0;
            text-align: center;
        }
    </style>
@endsection
@section('content')
    <div class="relative z-1 w-full">
        <div class="swiper2 !w-full !h-[650px] mySwiper2 relative overflow-x-hidden">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="relative z-0 filter brightness-75" src="{{ asset('assets/promo.png') }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img class="relative z-0 filter brightness-75" src="{{ asset('assets/promo.png') }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img class="relative z-0 filter brightness-75" src="{{ asset('assets/promo.png') }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img class="relative z-0 filter brightness-75" src="{{ asset('assets/promo.png') }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img class="relative z-0 filter brightness-75" src="{{ asset('assets/promo.png') }}" alt="">
                </div>
            </div>
            <div class="swiper-pagination max-sm:hidden"></div>
        </div>
        <div class="custom-shape-divider-bottom-1725791922 max-sm:hidden ">
            <img src="https://www.cashlez.com/img/wave.png" alt="image">
        </div>
    </div>

    <div class="flex flex-col lg:flex-row justify-center items-center m-6 xl:ml-32 gap-8 pt-6">
        <div class="text-justify justify-end pr-0 self-center w-[20%] max-lg:w-full " data-aos="fade-up"
            data-aos-duration="1000">
            <p class=" text-[13px] lg:text-[14px]"><b>Cashlez</b>, perusahaan teknologi keuangan yang memberikan proposisi
                nilai bagi pedagang, dan pengguna pembayaran mobile. Cashlez membantu pelaku usaha untuk mempermudah dan
                menggabungkan berbagai metode pembayaran nontunai. </p>
            <button
                class=" -ml-10  max-lg:ml-0 mt-5 relative rounded-full bg-transparent py-2 px-4 font-semibold text-[#2CC4F3] 
        transition-colors before:absolute before:left-0 before:top-0 before:-z-10 before:h-full before:duration-500
        before:w-10 before:origin-top-left before:bg-[#2CC4F3]  before:content-[''] hover:text-white before:hover:w-40 duration-500 before:rounded-full">
                <svg class="inline-block mr-5 -ml-1 -mt-1" width="17" height="16" viewBox="0 0 17 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M16.7071 8.70711C17.0976 8.31658 17.0976 7.68342 16.7071 7.29289L10.3431 0.928932C9.95262 0.538408 9.31946 0.538408 8.92893 0.928932C8.53841 1.31946 8.53841 1.95262 8.92893 2.34315L14.5858 8L8.92893 13.6569C8.53841 14.0474 8.53841 14.6805 8.92893 15.0711C9.31946 15.4616 9.95262 15.4616 10.3431 15.0711L16.7071 8.70711ZM0 9H16V7H0V9Z"
                        fill="white" />
                </svg>
                Learn more
            </button>
        </div>
        <div class=" flex justify-center lg:ml-10 sm:h-[400px] h-[300px] m-5 max-lg:mt-0 w-7/12 max-lg:w-full"
            data-aos="fade-up" data-aos-duration="1000">
            <iframe class=" w-[750px] h-auto"src="https://www.youtube.com/embed/4M0nimo953I" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>

    <div class="m-16 text-center">
        <h1 class="font-semibold text-[#160f42] text-[35px]">OUR PARTNER</h1>
    </div>

    <div class="swiper-container-wrapper">
        <div class="swiper-button-prev mx-auto"></div>

        <div class="w-[20%] sm:w-[60%] sm:h-[90%] swiper mySwiper">
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

    <div class="flex flex-col lg:flex-row justify-center items-start mt-44 mb-20 max-lg:m-[15%]">
        <div class= "flex w-[35%] max-lg:justify-center max-lg:w-full">
            <p class=" text-black max-lg:justify-center"><b class=" text-[40px]">CASHLEZ MPOS</b>
                <br>
                The feature from Cashlez to manage your sales and transaction for your small and efficient scale of
                business. It is a cloud-based POS systems that available for multi platform and operating system.
            </p>
        </div>
        <div class="w-[35%] flex justify-end max-lg:justify-start max-lg:w-full">
            <button
                class="relative rounded-full bg-transparent py-2 px-4 font-semibold text-[#2CC4F3] 
      transition-colors before:absolute before:left-0 before:top-0 before:-z-10 before:h-full before:duration-500
      before:w-10 before:origin-top-left before:bg-[#2CC4F3]  before:content-[''] hover:text-white before:hover:w-40 duration-500 before:rounded-full">
                <svg class="inline-block mr-5 -ml-1 -mt-1" width="17" height="16" viewBox="0 0 17 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M16.7071 8.70711C17.0976 8.31658 17.0976 7.68342 16.7071 7.29289L10.3431 0.928932C9.95262 0.538408 9.31946 0.538408 8.92893 0.928932C8.53841 1.31946 8.53841 1.95262 8.92893 2.34315L14.5858 8L8.92893 13.6569C8.53841 14.0474 8.53841 14.6805 8.92893 15.0711C9.31946 15.4616 9.95262 15.4616 10.3431 15.0711L16.7071 8.70711ZM0 9H16V7H0V9Z"
                        fill="white" />
                </svg>
                Learn more
            </button>
        </div>
    </div>

    <div class="flex justify-center">
        <img data-aos="zoom-in" data-aos-duration="500" src="{{ asset('assets/mpos.png') }}" alt=""
            class=" w-[70%]">
    </div>

    <div class=" bg-[#160f42] w-full h-auto mt-20 mb-20 py-20">
        <div class="flex justify-center w-[80%] mx-auto ">
            <div class=" w-full flex justify-between mb-16 max-sm:flex-col">
                <p class=" text-white text-[40px] font-semibold max-sm:text-center">HOW WE WORK</p>
                <div class="flex justify-center items-center">
                    <button
                        class=" z-10 relative rounded-full bg-transparent py-2 px-4 font-semibold text-[#2CC4F3] 
          transition-colors before:absolute before:left-0 before:top-0 before:-z-10 before:h-full before:duration-500
          before:w-10 before:origin-top-left before:bg-[#2CC4F3]  before:content-[''] hover:text-white before:hover:w-40 duration-500 before:rounded-full">
                        <svg class="inline-block mr-5 -ml-1 -mt-1" width="17" height="16" viewBox="0 0 17 16"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.7071 8.70711C17.0976 8.31658 17.0976 7.68342 16.7071 7.29289L10.3431 0.928932C9.95262 0.538408 9.31946 0.538408 8.92893 0.928932C8.53841 1.31946 8.53841 1.95262 8.92893 2.34315L14.5858 8L8.92893 13.6569C8.53841 14.0474 8.53841 14.6805 8.92893 15.0711C9.31946 15.4616 9.95262 15.4616 10.3431 15.0711L16.7071 8.70711ZM0 9H16V7H0V9Z"
                                fill="white" />
                        </svg>
                        See More
                    </button>
                </div>
            </div>
        </div>
        <div class="flex justify-center max-sm:flex-col max-sm: items-center">
            <div class=" w-[20%] flex-col flex justify-center items-center p-[14px] max-sm:w-[50%]">
                <img src="{{ asset('assets/regist.png') }}" alt="" class=" w-[80px] h-[115px] mb-[14px]"
                    data-aos="zoom-in" data-aos-duration="500">
                <p class=" text-[18px] text-cyan-300 mb-[5px]" data-aos="fade-up" data-aos-duration="500"> 1.
                    Registration </p>
                <p class=" text-center text-[15px] text-white" data-aos="fade-up" data-aos-duration="500">Register by
                    downloading the Cashlez application first on Google Play (Android) & App Store (iOS), select the list
                    menu in the Cashlez application.</p>
            </div>
            <div class=" w-[20%] flex-col flex justify-center items-center p-[14px] max-sm:w-[50%]">
                <img src="{{ asset('assets/npwp-kartu.png') }}" alt="" class=" w-[200px] h-[90px] mb-[14px]"
                    data-aos="zoom-in" data-aos-duration="500">
                <p class=" text-[18px] text-cyan-300 mb-[5px]" data-aos="fade-up" data-aos-duration="500"> 2. Fill
                    Application Form </p>
                <p class=" text-center text-[15px] text-white" data-aos="fade-up" data-aos-duration="500">You must enter
                    personal data correctly and correctly, prepare KTP and NPWP to complete the document.</p>
            </div>
            <div class=" w-[20%] flex-col flex justify-center items-center p-[14px] max-sm:w-[50%]">
                <img src="{{ asset('assets/notif.png') }}" alt="" class=" w-[120px] h-[115px] mb-[14px]"
                    data-aos="zoom-in" data-aos-duration="500">
                <p class=" text-[18px] text-cyan-300 mb-[5px]" data-aos="fade-up" data-aos-duration="500"> 3. Submission
                    Notification </p>
                <p class=" text-center text-[15px] text-white" data-aos="fade-up" data-aos-duration="500">Your Cashlez ID
                    will be processed for 3 working days. You will get a notification about your submission being accepted
                    or rejected by our system.</p>
            </div>
        </div>
    </div>

    <div class=" w-[80%] h-auto flex justify-end mx-auto mb-20">
        <p class=" text-[#160f42] text-[30px] font-semibold">MERCHANT'S WORD</p>
    </div>
    <div class="swiper-container-wrapper mb-10">
        <div class="swiper-button-prev mx-auto"></div>
        <div class="w-[80%] sm:w-[80%] sm:h-[90%] swiper mySwiper3">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="max-w-sm mx-auto bg-white rounded-xl hover:shadow-md overflow-hidden md:max-w-2xl">
                        <div class="flex">
                            <div class="shrink-0 h-20 md:h-48">
                                <img class="" src="{{ asset('assets/merch1.png') }}" alt="Chery Dunia Palmerah">
                            </div>
                            <div class="p-8 w-full">
                                <div class="w-1/4 mb-2">
                                    <img src="{{ asset('assets/petik.png') }}" alt="">
                                </div>
                                <p class="max-md:text-sm text-sm text-justify leading-tight font-medium text-black">
                                  Pelanggan Kedjora Coffee bisa mendapatkan aneka minuman manjah secara praktis! Tinggal pilih mau bayar pakai kartu kredit/debit, scan QR, online payment, sampai virtual account, semua tersedia hanya dengan satu alat CashlezONE.
                                </p>
                                <p class="mt-4 text-black text-start text-xs"><i>— Ivan Gunawan (Owner of Kedjora Coffee)</i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="max-w-sm mx-auto bg-white rounded-xl hover:shadow-md overflow-hidden md:max-w-2xl">
                        <div class="flex">
                            <div class="shrink-0 h-20 md:h-48">
                                <img class="" src="{{ asset('assets/merch2.jpeg') }}" alt="Chery Dunia Palmerah">
                            </div>
                            <div class="p-8 w-full">
                                <div class="w-1/4 mb-2">
                                    <img src="{{ asset('assets/petik.png') }}" alt="">
                                </div>
                                <p class="max-md:text-sm text-sm text-justify leading-tight font-medium text-black">
                                  Cukup pakai CashlezONE, aku dapat menerima berbagai opsi pembayaran nontunai dari pelanggan, mulai dari kartu debit/kredit, OVO, GoPay, hingga ShopeePay. Selain itu, Cashlez juga menyediakan opsi transaksi tanpa tatap muka seperti Virtual Account dan Online Card Payment.	
                                </p>
                                <p class="mt-4 text-black text-start text-xs"><i>— Michimomo (Owner of Bamsae)</i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="max-w-sm mx-auto bg-white rounded-xl hover:shadow-md overflow-hidden md:max-w-2xl">
                        <div class="flex">
                            <div class="shrink-0 h-20 md:h-48">
                                <img class="" src="{{ asset('assets/merch3.jpeg') }}" alt="Chery Dunia Palmerah">
                            </div>
                            <div class="p-8 w-full">
                                <div class="w-1/4 mb-2">
                                    <img src="{{ asset('assets/petik.png') }}" alt="">
                                </div>
                                <p class="max-md:text-sm text-sm text-justify leading-tight font-medium text-black">
                                  Penggunaan mesin Cashlez sangatlah membantu kami memberikan pelayanan terbaik bagi pelanggan. Apalagi, di restoran kami 90% pelanggan menggunakan pembayaran nontunai. Jadi, mereka bisa memilih sendiri metode cashless dan tidak perlu repot-repot menyiapkan uang tunai dalam jumlah yang besar.
                                </p>
                                <p class="mt-4 text-black text-start text-xs"><i>— Ayam Goreng Ny Suharti</i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="max-w-sm mx-auto bg-white rounded-xl hover:shadow-md overflow-hidden md:max-w-2xl">
                        <div class="flex">
                            <div class="shrink-0 h-20 md:h-48">
                                <img class="" src="{{ asset('assets/merch4.jpeg') }}" alt="Chery Dunia Palmerah">
                            </div>
                            <div class="p-8 w-full">
                                <div class="w-1/4 mb-2">
                                    <img src="{{ asset('assets/petik.png') }}" alt="">
                                </div>
                                <p class="max-md:text-sm text-sm text-justify leading-tight font-medium text-black">
                                  Dengan Cashlez App, aku tinggal input aja semua jenis scarf yang aku jual dan otomatis akan terekap deh kalo ada penjualan. Pembeli juga tinggal pilih bayar pake kartu kredit/debit OVO, Gopay, LinkAja, sampe Kredivo juga nggak masalah. Praktis banget!
                                </p>
                                <p class="mt-4 text-black text-start text-xs"><i>— Enno Lerian (Owner of Luma Scarf)</i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="swiper-button-next mx-auto"></div>
    </div>

    <div class=" bg-[#160f42] w-full h-auto mt-20 mb-20 pt-20 flex flex-row">
        <div class=" w-[50%] flex justify-center px-[15px] max-md:hidden">
            <img src="{{ asset('assets/hand.png') }}" alt="">
        </div>
        <div class=" w-[50%] flex text-start justify-start px-[15px] mb-20 max-md:w-full max-md:justify-center">
            <div class="flex flex-col">
                <div class=" w-full h-auto">
                    <p class=" text-white text-[26px] mb-[15px]">Start Accepting More Payments</p>
                </div>
                <div>
                    <img src="{{ asset('assets/now.png') }}" alt="">
                </div>
                <div class=" flex flex-row w-full max-sm:flex-col max-sm: justify-center items-center">
                    <div>
                        <a href="https://play.google.com/store/apps/details?id=com.cashlez.android.garuda&pli=1">
                            <img src="{{ asset('assets/gplay.png') }}" alt=""
                                class=" w-[180px] h-[60px] border border-white rounded-lg mt-[20px] mr-[20px] max-sm:mr-0"
                                data-aos="flip-left" data-aos-duration="500">
                        </a>
                    </div>
                    <div>
                        <a href="https://apps.apple.com/id/app/cashlez/id1116907654">
                            <img src="{{ asset('assets/appstore.png') }}" alt=""
                                class=" w-[180px] h-[60px] border border-white rounded-lg mt-[20px] mr-0"data-aos="flip-left"
                                data-aos-duration="500">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-20 mb-20 py-20">
        <div class="flex justify-center w-[80%] mx-auto ">
            <div class=" w-full flex justify-between mb-16 max-sm:flex-col">
                <p class=" text-black text-[30px] font-semibold max-sm:text-center uppercase">News & Blog</p>
                <div class="flex justify-center items-center">
                    <button
                        class=" z-10 relative rounded-full bg-transparent py-2 px-4 font-semibold text-[#2CC4F3] 
                            transition-colors before:absolute before:left-0 before:top-0 before:-z-10 before:h-full before:duration-500
                            before:w-10 before:origin-top-left before:bg-[#2CC4F3]  before:content-[''] hover:text-white before:hover:w-40 duration-500 before:rounded-full">
                        <svg class="inline-block mr-5 -ml-1 -mt-1" width="17" height="16" viewBox="0 0 17 16"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.7071 8.70711C17.0976 8.31658 17.0976 7.68342 16.7071 7.29289L10.3431 0.928932C9.95262 0.538408 9.31946 0.538408 8.92893 0.928932C8.53841 1.31946 8.53841 1.95262 8.92893 2.34315L14.5858 8L8.92893 13.6569C8.53841 14.0474 8.53841 14.6805 8.92893 15.0711C9.31946 15.4616 9.95262 15.4616 10.3431 15.0711L16.7071 8.70711ZM0 9H16V7H0V9Z"
                                fill="white" />
                        </svg>
                        See More
                    </button>
                </div>
            </div>
        </div>
        <div class="swiper-container-wrapper mb-10">
            <div class="swiper-button-prev mx-auto"></div>
            <div class="w-[70%] sm:w-[80%] sm:h-[90%] swiper mySwiper4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="max-w-sm mx-auto bg-white rounded-xl hover:shadow-md overflow-hidden md:max-w-2xl">
                            <div class="flex justify-center items-center h-10 md:h-48">
                                <img class="!w-[85%]  !sm:w-[100%] !lg:w-[80%] !h-[60%] "
                                    src="{{ asset('assets/news2.jpg') }}" alt="Chery Dunia Palmerah">
                            </div>
                            <div class="p-8 pt-0 w-full">
                                <p class="text-start"><b>Sosialisasi Perlindungan Data Pribadi</b> </p>
                                <p class="max-md:text-sm text-sm text-justify leading-tight font-medium text-black">
                                  Pada tanggal 29-30 Agustus 2024, PT Cashlez Worldwide Indonesia Tbk ("Cashlez") telah menyelenggarakan sosialisasi mengenai perlindungan data pribadi bagi seluruh karyawan Cashlez dalam rangka peningkatan pemahaman dan penerapan UU Nomor 27 Tahun 2022 tentang Pelindungan Data Pribadi.
                                </p>
                                <p class="mt-4 text-slate-500 text-start text-sm">10 May 2004
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="max-w-sm mx-auto bg-white rounded-xl hover:shadow-md overflow-hidden md:max-w-2xl">
                            <div class="flex justify-center items-center h-10 md:h-48">
                                <img class="!w-[85%]  !sm:w-[100%] !lg:w-[80%] !h-[60%] "
                                    src="{{ asset('assets/news3.jpg') }}" alt="Chery Dunia Palmerah">
                            </div>
                            <div class="p-8 pt-0 w-full">
                                <p class="text-start"><b>PT Cashlez WorldWide Indonesia Tbk dapat gelar Rapat Umum Pemegang Saham Tahunan</b> </p>
                                <p class="max-md:text-sm text-sm text-justify leading-tight font-medium text-black">
                                  JAKARTA, 31 Mei 2024 – PT Cashlez Worldwide Indonesia Tbk (“Perseroan”) menggelar Rapat Umum Pemegang Saham Tahunan (“RUPST”), Rapat Umum Pemegang Saham Luar Biasa (“RUPSLB”) dan Public Expose yang diselenggarakan pada hari Jumat, 31 Mei 2024, bertempat di Hotel Santika Premiere Slipi, Jakarta.
                                </p>
                                <p class="mt-4 text-slate-500 text-start text-sm">13 Januari 2018
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="max-w-sm mx-auto bg-white rounded-xl hover:shadow-md overflow-hidden md:max-w-2xl">
                            <div class="flex justify-center items-center h-10 md:h-48">
                                <img class="!w-[85%]  !sm:w-[100%] !lg:w-[80%] !h-[60%] "
                                    src="{{ asset('assets/news1.jpeg') }}" alt="Chery Dunia Palmerah">
                            </div>
                            <div class="p-8 pt-0 w-full">
                                <p class="text-start"><b>Peringatan!!! <br> Penipuan mengatasnamakan Cashlez!</b> </p>
                                <p class="max-md:text-sm text-sm text-justify leading-tight font-medium text-black">
                                  Dear Merchant Cashlez,

                                  Terima kasih atas kepercayaannya dalam menggunakan layanan pembayaran non tunai Cashlez. Hati- hati terhadap modus penipuan via telepon/ email/ whatsapp/ maupun media sosial mengatasnamakan PT Cashlez Worldwide Indonesia Tbk (“Cashlez") yang meminta untuk melakukan pembayaran/ transfer sejumlah uang.
                                </p>
                                <p class="mt-4 text-slate-500 text-start text-sm">30 November 2015
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="max-w-sm mx-auto bg-white rounded-xl hover:shadow-md overflow-hidden md:max-w-2xl">
                            <div class="flex justify-center items-center h-10 md:h-48">
                                <img class="!w-[85%]  !sm:w-[100%] !lg:w-[80%] !h-[60%] "
                                    src="{{ asset('assets/news4.jpeg') }}" alt="Chery Dunia Palmerah">
                            </div>
                            <div class="p-8 pt-0 w-full">
                                <p class="text-start"><b>Cashlez Jalin Kemitraan sebagai Penyedia Perangkat Pembayaran</b> </p>
                                <p class="max-md:text-sm text-sm text-justify leading-tight font-medium text-black">
                                  JAKARTA, 01 April 2024 – PT Cashlez Worldwide Indonesia Tbk (“Cashlez”) sebagai perusahaan solusi pembayaran yang terus berkembang dan inovatif, melakukan perluasan kemitraan dengan PT Bank Mayapada International Tbk (“Bank Mayapada”).
                                </p>
                                <p class="mt-4 text-slate-500 text-start text-sm">12 Maret 2020
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="max-w-sm mx-auto bg-white rounded-xl hover:shadow-md overflow-hidden md:max-w-2xl">
                            <div class="flex justify-center items-center h-10 md:h-48">
                                <img class="!w-[85%]  !sm:w-[100%] !lg:w-[80%] !h-[60%] "
                                    src="{{ asset('assets/news5.jpg') }}" alt="Chery Dunia Palmerah">
                            </div>
                            <div class="p-8 pt-0 w-full">
                                <p class="text-start"><b>Cashlez Gandeng SPNPay, Perluas Jaringan Layanan dan Aksesibilitas QRIS</b> </p>
                                <p class="max-md:text-sm text-sm text-justify leading-tight font-medium text-black">
                                  JAKARTA, 23 Februari 2024 – PT Cashlez Worldwide Indonesia Tbk (“Cashlez”) selaku acquiring QRIS (Quick Response Code Indonesian Standart), melakukan perluasan layanan pembayaran digital atau non-tunai melalui kerjasama dengan PT Solusi Pembayaran Nasional (“SPNPay”)
                                </p>
                                <p class="mt-4 text-slate-500 text-start text-sm">07 Juli 2008
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next mx-auto"></div>
        </div>
    </div>
    <div class="m-16 text-center">
        <h1 class="font-semibold text-[#160f42] text-[35px]">OUR MERCHANT</h1>
    </div>

    <div class="swiper-container-wrapper">
        <div class="swiper-button-prev mx-auto"></div>

        <div class="w-[60%] sm:w-[80%] sm:h-[90%] swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{ asset('assets/merchant1.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('assets/merchant2.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('assets/merchant3.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('assets/merchant4.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('assets/merchant5.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('assets/merchant6.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('assets/merchant7.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('assets/merchant8.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('assets/merchant9.png') }}" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('assets/merchant10.png') }}" alt=""></div>
            </div>
        </div>

        <div class="swiper-button-next mx-auto"></div>
    </div>
    <div class="m-16 text-center mt-52">
      <h1 class="font-semibold text-[#160f42] text-[35px]">MEDIA COVERAGE</h1>
  </div>

  <div class="swiper-container-wrapper mb-40">
      <div class="swiper-button-prev mx-auto"></div>

      <div class="w-[60%] sm:w-[80%] sm:h-[90%] swiper mySwiper">
          <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="{{ asset('assets/media1.png') }}" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('assets/media2.png') }}" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('assets/media3.png') }}" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('assets/media4.png') }}" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('assets/media5.png') }}" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('assets/media6.png') }}" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('assets/media7.png') }}" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('assets/media8.png') }}" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('assets/media9.png') }}" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('assets/media10.png') }}" alt=""></div>
          </div>
      </div>

      <div class="swiper-button-next mx-auto"></div>
  </div>

    <div class="relative text-center w-full h-auto">
        <img src="{{ asset('assets/paycard.jpeg') }}" alt="" class="w-full h-[350px] opacity-50">
        <div class="absolute inset-0 flex flex-col justify-center items-center">
            <p class="font-bold text-[#160f42] text-[35px]">GET IN TOUCH WITH US</p>
            <p class="text-[#160f42] text-[20px] mt-[20px]">We would like to hear from you!</p>
            <button type="button"
                class=" mt-10 inline-block rounded-full bg-[#2CC4F3] px-9 pb-2 pt-2.5 text-s font-semibold leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-[#160f42] hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
                Contact Us
            </button>
        </div>
    </div>
@endsection



@section('script')
    <script>
        var swiper4 = new Swiper(".mySwiper4", {
            slidesPerView: 4,
            spaceBetween: 200,
            freeMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                1500: {
                    slidesPerView: 4,
                    spaceBetween: 35,
                },
                1200: {
                    slidesPerView: 2,
                    spaceBetween: 5,
                },
                0: {
                    slidesPerView: 1,
                }
            }
        });
        var swiper3 = new Swiper(".mySwiper3", {
            slidesPerView: 3,
            spaceBetween: 120,
            freeMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                1500: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1200: {
                    slidesPerView: 2,
                    spaceBetween: 5,
                },
                0: {
                    slidesPerView: 1,
                }
            }
        });
        var swiper2 = new Swiper(".mySwiper2", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 8000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            }
        });
        var swiper = new Swiper(".mySwiper", {
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
