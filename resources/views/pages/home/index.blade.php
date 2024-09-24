@extends('layouts.app')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

<div class="w-full h-[24vh] md:h-[76vh] relative overflow-hidden max-sm:mt-24">
    <iframe
        class="w-full h-full scale-[1.4] md:scale-[1.35]"
        src="https://www.youtube.com/embed/Y7-IPP4e-5Y?si=hApdWdV8g0q_1Q-C&autoplay=1&loop=1&playlist=Y7-IPP4e-5Y&controls=0&mute=1&start=4&end=150"
        frameborder="0"
        title="YouTube video player"
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture;"
        referrerpolicy="strict-origin-when-cross-origin"
        allowfullscreen>
    </iframe>
    <div class="absolute top-0 left-0 w-full h-full bg-black/10">
        <div class="relative w-[90%] mx-auto font-montserrat pt-[5vh] md:pt-[40vh] pb-6 text-white">
            <h2 class="text-xl md:text-5xl mb-3" style="text-shadow: #aaa 1px 0 1px;">Mulai berjualan mobil melalui digital sekarang!</h2>
            <h3 class="text-sm md:text-xl mb-2 md:mb-5" style="text-shadow: #aaa 1px 0 1px;">Cari tahu bagaimana kami melayani lebih dari 100 dealer di seluruh Indonesia.</h3>
            <div class="flex gap-4">
                <a href="#contact-us" class="bg-orange-500 w-[150px] md:w-[200px] py-0.5 md:py-2.5 flex items-center justify-center gap-2 text-xs md:text-lg hover:bg-orange-600 transition duration-150 ease-in">
                    Hubungi Kami
                </a>
                <a href="https://www.youtube.com/watch?v=Y7-IPP4e-5Y" target="_blank" class="bg-orange-500 w-[150px] md:w-[200px] py-0.5 md:py-2.5 flex items-center justify-center gap-2 text-xs md:text-lg hover:bg-orange-600 transition duration-150 ease-in">
                    Lihat Video
                    <i class='bx bxl-youtube text-2xl'></i>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="md:bg-gray-100">
    <div class="container md:w-[90%] mx-auto py-12">
        <div class="flex max-sm:flex-col items-center justify-center gap-10 bg-white md:border border-gray-200 p-6">
            <div>
                <img data-src="{{ asset('images/social-distancing.jpg') }}" alt="image" class="lazy bg-gray-100">
            </div>
            <div class="flex-1 font-light leading-6 text-md">
                <p>INGING Bersama Anda. Di masa yang tidak menentu ini, kami ingin memberikan dukungan terbaik yang dapat kami lakukan. Kami meng-gratiskan beberapa layanan kami untuk Anda dalam masa pandemi ini.</p>
                <p>#belimobildarirumah #covid19</p>
            </div>
            <div>
                <a href="#contact-us" class="bg-orange-500 w-[200px] py-2.5 flex items-center justify-center gap-2 text-white font-light text-sm hover:bg-orange-600 transition duration-150 ease-in">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </div>
</div>
<div class="container md:w-[90%] mx-auto py-24 bg-white">
    <h3 class="text-4xl font-montserrat text-center">Kenapa menggunakan produk INGING Online Showroom?</h3>
    <div class="relative mt-20 w-fit mx-auto">
        <img data-src="{{ asset('images/online-showroom.jpg') }}" alt="image" class="lazy max-w-full w-auto h-auto mx-auto max-sm:mb-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        <!-- 1 -->
        <div class="relative md:absolute md:top-[12%] md:left-[27%]" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-delay="400">
            <div class="relative flex items-center justify-center md:w-8 md:h-8">
                <span class="max-sm:hidden absolute flex w-6 h-6 bg-orange-300 rounded-full animate-ping"></span>
                <span class="max-sm:hidden z-[1] flex items-center justify-center w-6 h-6 bg-orange-500 rounded-full text-xs text-white cursor-pointer">1</span>

                <div class="max-sm:w-full relative md:absolute md:bottom-10 md:z-10">
                    <div class="w-full md:w-[230px] p-2.5 square text-justify shadow-lg">
                        <span class="italic font-medium text-orange-500">Instant! </span> Siap digital dalam maksimum 2 minggu!
                    </div>
                </div>
            </div>
        </div>
        <!-- 2 -->
        <div class="relative md:absolute md:top-[12%] md:left-[50%]" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-delay="600">
            <div class="relative flex items-center justify-center md:w-8 md:h-8">
                <span class="max-sm:hidden absolute flex w-6 h-6 bg-orange-300 rounded-full animate-ping"></span>
                <span class="max-sm:hidden z-[1] flex items-center justify-center w-6 h-6 bg-orange-500 rounded-full text-xs text-white cursor-pointer">2</span>

                <div class="max-sm:w-full relative md:absolute md:bottom-10 md:z-10">
                    <div class="w-full md:w-[230px] p-2.5 square text-justify shadow-lg">
                        <span class="italic font-medium text-orange-500">Beautiful commerce. </span> Tampilan showroom digital berorientasi sales, dan selalu mengikuti guideline ATPM.
                    </div>
                </div>
            </div>
        </div>
        <!-- 3 -->
        <div class="relative md:absolute md:top-[12%] md:left-[74%]" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-delay="800">
            <div class="relative flex items-center justify-center md:w-8 md:h-8">
                <span class="max-sm:hidden absolute flex w-6 h-6 bg-orange-300 rounded-full animate-ping"></span>
                <span class="max-sm:hidden z-[1] flex items-center justify-center w-6 h-6 bg-orange-500 rounded-full text-xs text-white cursor-pointer">3</span>

                <div class="max-sm:w-full relative md:absolute md:bottom-10 md:z-10">
                    <div class="w-full md:w-[230px] p-2.5 square text-justify shadow-lg">
                        <span class="italic font-medium text-orange-500">No technical headache. </span> Tidak usah pusing teknis lagi. Kita menjaga produk live 24 jam, dan bisa dibuka di multiple platforms. Kita yang selalu menyesuaikan.
                    </div>
                </div>
            </div>
        </div>
        <!-- 4 -->
        <div class="relative md:absolute md:top-[40%] md:left-[10%]" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-delay="1100">
            <div class="relative flex items-center justify-center md:w-8 md:h-8">
                <span class="max-sm:hidden absolute flex w-6 h-6 bg-orange-300 rounded-full animate-ping"></span>
                <span class="max-sm:hidden z-[1] flex items-center justify-center w-6 h-6 bg-orange-500 rounded-full text-xs text-white cursor-pointer">4</span>

                <div class="max-sm:w-full relative md:absolute md:bottom-10 md:z-10">
                    <div class="w-full md:w-[230px] p-2.5 square text-justify shadow-lg">
                        <span class="italic font-medium text-orange-500">Managed Contents. </span> Konten mobil tidak pernah ketinggalan, kita yang update, lengkap dengan gambar, spek, dan harga. Website tidak pernah tidak ter-update.
                    </div>
                </div>
            </div>
        </div>
        <!-- 5 -->
        <div class="relative md:absolute md:bottom-[40%] md:right-[10%]" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-delay="1300">
            <div class="relative flex items-center justify-center md:w-8 md:h-8">
                <span class="max-sm:hidden absolute flex w-6 h-6 bg-orange-300 rounded-full animate-ping"></span>
                <span class="max-sm:hidden z-[1] flex items-center justify-center w-6 h-6 bg-orange-500 rounded-full text-xs text-white cursor-pointer">5</span>

                <div class="max-sm:w-full relative md:absolute md:bottom-10 md:z-10">
                    <div class="w-full md:w-[230px] p-2.5 square text-justify shadow-lg">
                        <span class="italic font-medium text-orange-500">Inter-connected. </span> Semua terkoneksi, dengan sales, supervisor, cabang, hingga ATPM. Privasi terjaga, monitor dan manajemen penjualan digital menjadi lebih mudah. Kecepatan alur informasi meningkatkan peluang penjualan.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h4 class="text-lg mt-16 text-center">
        <span class="text-orange-500">Sudah punya website, tapi kurang efektif dan tidak update?</span>
        Sistem Online Showroom kami dapat menempel di website Anda dan menangani khusus di bagian showroom. Halaman lengkap dengan fitur commerce dan koleksi mobil dan harga yang up-to-date. Hubungi kami untuk menyalakan fitur ini di website Anda.
    </h4>
</div>
<div class="bg-gray-50 py-20">
    <div class="container w-[90%] mx-auto">
        <h2 class="font-montserrat text-2xl md:text-4xl text-center">Misi perusahaan kami untuk Anda</h2>
        <div class="w-20 h-0.5 bg-black/80 mx-auto mt-6"></div>
        <div class="mt-24 flex flex-col gap-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-10">
                <div>
                    <img data-src="{{ asset('images/misi-1.png') }}" alt="image" class="lazy max-w-full w-auto h-auto rounded-lg brightness-[90%]">
                </div>
                <div class="py-4">
                    <p class="text-gray-600 text-sm md:text-lg max-sm:text-justify">
                        <span class="text-orange-500">Siap melayani pelanggan secara digital.</span>
                        Kami membantu pelaku otomotif supaya dapat memberikan pelayanan terbaik untuk pelanggan yang datang dari digital dengan seperangkat produk dan layanan kami.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-10">
                <div>
                    <img data-src="{{ asset('images/misi-2.png') }}" alt="image" class="lazy max-w-full w-auto h-auto rounded-lg brightness-[90%]">
                </div>
                <div class="py-4">
                    <p class="text-gray-600 text-sm md:text-lg max-sm:text-justify">
                        <span class="text-orange-500">Selamat tinggal pusing mengurus aset digital Anda.</span>
                        Kami tim teknologi yang khusus bergerak di otomotif sejak 2012, jadi kami sangat memahami kebutuhan Anda. Kami bekerja untuk memastikan sistem Anda live 24 jam, tampilan dan konten kami yang update sesuai dengan arahan merk. Fitur selalu kami kembangkan non-stop untuk mendukung usaha Anda dan dunia otomotif.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-10">
                <div>
                    <img data-src="{{ asset('images/misi-3.png') }}" alt="image" class="lazy max-w-full w-auto h-auto rounded-lg brightness-[90%]">
                </div>
                <div class="py-4">
                    <p class="text-gray-600 text-sm md:text-lg max-sm:text-justify">
                        <span class="text-orange-500">Fokus dan sukses dalam bisnis.</span>
                        Ini tujuan kami, supaya Anda dapat fokus dalam mengembangkan bisnis. Semua urusan landasan digital Anda dapat dipercayakan kepada kami.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container w-[90%] mx-auto py-20 bg-white">
    <div class="">
        <img data-src="{{ asset('images/price-subscribe.jpg') }}" alt="image" class="lazy max-w-full w-full md:w-3/4 h-auto mx-auto">
        <img data-src="{{ asset('images/package.jpg') }}" alt="image" class="lazy max-w-full w-full md:w-3/4 h-auto mx-auto mt-10">
        <img data-src="{{ asset('images/package-2.jpg') }}" alt="image" class="lazy max-w-full w-full md:w-3/4 h-auto mx-auto">
    </div>
</div>
<div class="bg-gray-50 py-20">
    <div class="container w-[90%] mx-auto">
        <h2 class="font-montserrat text-2xl md:text-4xl text-center">100+ Happy Subscribing Dealers</h2>
        <div class="w-20 h-0.5 bg-black/80 mx-auto mt-6"></div>
        <div class="mt-20 flex max-sm:flex-wrap items-center justify-center gap-6">
            <img data-src="{{ asset('images/logo-toyota.png') }}" alt="images" class="lazy max-w-full w-auto h-auto grayscale transition duration-150 ease-in hover:grayscale-0">
            <img data-src="{{ asset('images/logo-suzuki.png') }}" alt="images" class="lazy max-w-full w-auto h-auto grayscale transition duration-150 ease-in hover:grayscale-0">
            <img data-src="{{ asset('images/logo-mini.png') }}" alt="images" class="lazy max-w-full w-auto h-auto grayscale transition duration-150 ease-in hover:grayscale-0">
            <img data-src="{{ asset('images/logo-bmw.png') }}" alt="images" class="lazy max-w-full w-auto h-auto grayscale transition duration-150 ease-in hover:grayscale-0">
        </div>
    </div>
</div>

@endsection

@section('scripts')
<!-- import another js file -->
@endsection