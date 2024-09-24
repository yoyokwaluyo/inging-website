@extends('layouts.app')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

<div class="container md:w-[90%] mx-auto mt-[125px] max-sm:px-3">
    <div class="py-16">
        <h3 class="text-4xl font-montserrat text-center">INGING Online Showroom</h3>
        <p class="text-center text-lg font-light">Produk unggulan kami yang telah membantu lebih dari 100 cabang dealer dan ATPM terkemuka di Indonesia.</p>
        <div class="relative mt-20 w-fit mx-auto">
            <img data-src="{{ asset('images/product-showroom.png') }}" alt="image" class="lazy max-w-full w-auto h-auto mx-auto max-sm:mb-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
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
        <div class="mt-16">
            <h4 class="text-lg mb-3">
                <span class="text-orange-500">Sudah punya website, tapi kurang efektif dan tidak update?</span>
                Sistem Online Showroom kami dapat menempel di website Anda dan menangani khusus di bagian showroom. Halaman lengkap dengan fitur commerce dan koleksi mobil dan harga yang up-to-date.
            </h4>
            <h4 class="text-lg mb-3">
                <span class="text-orange-500">Hubungi kami untuk demo lebih lanjut produk unggulan kami.</span>
            </h4>
            <a href="#contac-us" class="flex w-fit mt-4 py-2.5 px-6 text-sm font-medium border-2 text-gray-500 border-gray-400 hover:opacity-70 transition duration-150 ease-out" id="btn-covid">
                Hubungi Kami!
            </a>
        </div>
    </div>
</div>

<div class="bg-gray-100">
    <div class="container md:w-[90%] mx-auto max-sm:px-3 py-20">
        <div class="grid md:grid-cols-2 md:gap-4">
            <div class="wrapper-product">
                <h3 class="">INGING Sales Page</h3>
                <div class="divide"></div>
                <div class="text-description">
                    <h5 class="">Lebih dari 600 salesman berpromosi melalui showroom pribadi mereka! Mulai gratis!</h5>
                    <p>Kita mengerti, salesman juga sangat aktif berpromosi. Kita membantu dengan memberikan halaman yang bisa digunakan untuk kampanye digital. Terhubung dengan sistem Online Showroom Dealer, Sales Page nampak profesional dan terpercaya di mata konsumen dan merk.</p>
                    <p>Halaman ini dapat digunakan sebagai alat berjualan, seperti sebuah brosur elektronik, kemanapun mereka berada. Setiap customer dan leads masuk, salesman juga bisa menerima kontak tersebut di mana saja dan kapan saja.</p>
                    <p>Mulai gratis. Cari tahu lebih lanjut sekarang!</p>
                    <a href="https://my.rajamobil.com" class="btn" id="btn-covid">
                        Mulai Gratis!
                    </a>
                </div>
            </div>
            <div class="">
                <div class="relative w-fit mx-auto">
                    <img data-src="{{ asset('images/salespage.png') }}" alt="image" class="lazy max-w-full w-auto h-auto md:max-h-[900px] mx-auto max-sm:mb-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <!-- 1 -->
                    <div class="relative md:absolute md:top-[0%] md:right-[30%]" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-delay="400">
                        <div class="relative flex items-center justify-center md:w-8 md:h-8">
                            <span class="max-sm:hidden absolute flex w-6 h-6 bg-sky-300 rounded-full animate-ping"></span>
                            <span class="max-sm:hidden z-[1] flex items-center justify-center w-6 h-6 bg-blue-500 rounded-full text-xs text-white cursor-pointer">1</span>

                            <div class="max-sm:w-full relative md:absolute md:bottom-10 md:z-10">
                                <div class="w-full md:w-[230px] p-2.5 square text-justify shadow-lg">
                                    Domain resmi dari dealer. Halaman menjadi profesional dan meyakinkan.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="relative md:absolute md:top-[0%] md:left-[25%]" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-delay="600">
                        <div class="relative flex items-center justify-center md:w-8 md:h-8">
                            <span class="max-sm:hidden absolute flex w-6 h-6 bg-sky-300 rounded-full animate-ping"></span>
                            <span class="max-sm:hidden z-[1] flex items-center justify-center w-6 h-6 bg-blue-500 rounded-full text-xs text-white cursor-pointer">2</span>

                            <div class="max-sm:w-full relative md:absolute md:bottom-10 md:z-10">
                                <div class="w-full md:w-[230px] p-2.5 square text-justify shadow-lg">
                                    Identitas visual dan branding sesuai dengan aturan merk. Tampak profesional, resmi, dan meyakinkan.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 3 -->
                    <div class="relative md:absolute md:top-[30%] md:left-[30%]" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-delay="800">
                        <div class="relative flex items-center justify-center md:w-8 md:h-8">
                            <span class="max-sm:hidden absolute flex w-6 h-6 bg-sky-300 rounded-full animate-ping"></span>
                            <span class="max-sm:hidden z-[1] flex items-center justify-center w-6 h-6 bg-blue-500 rounded-full text-xs text-white cursor-pointer">3</span>

                            <div class="max-sm:w-full relative md:absolute md:bottom-10 md:z-10">
                                <div class="w-full md:w-[230px] p-2.5 square text-justify shadow-lg">
                                    Informasi dan branding secara pribadi.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 4 -->
                    <div class="relative md:absolute md:bottom-[35%] md:right-[30%]" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-delay="1100">
                        <div class="relative flex items-center justify-center md:w-8 md:h-8">
                            <span class="max-sm:hidden absolute flex w-6 h-6 bg-sky-300 rounded-full animate-ping"></span>
                            <span class="max-sm:hidden z-[1] flex items-center justify-center w-6 h-6 bg-blue-500 rounded-full text-xs text-white cursor-pointer">4</span>

                            <div class="max-sm:w-full relative md:absolute md:bottom-10 md:z-10">
                                <div class="w-full md:w-[230px] p-2.5 square text-justify shadow-lg">
                                    Kelengkapan lengkap. Informasi up-to-date, bisa termasuk promo leasing, sangat profesional seperti showroom sebenarnya dari sebuah Dealer. Semua informasi hanya milik Anda, tidak tercampur dengan milik rekan wiraniaga lain.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container md:w-[90%] mx-auto max-sm:px-3 py-20">
    <div class="grid md:grid-cols-2 md:gap-14 place-items-center">
        <div class="max-sm:order-2">
            <img data-src="{{ asset('images/device-inging.png') }}" alt="image" class="lazy max-w-full w-auto h-auto md:max-h-[650px] mx-auto max-sm:mb-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        </div>
        <div class="wrapper-product max-sm:order-1">
            <h3 class="">INGING Lead Management System</h3>
            <div class="divide"></div>
            <div class="text-description">
                <h5 class="">Tingkatkan konversi leads Anda hingga 60x!</h5>
                <p>Semua sistem kami saling terhubung, dari Dealer ke Sales. Hal ini memungkinkan sebuah data pelanggan atau leads, sampai ke tangan sales dalam waktu real-time atau instan. Kami dapat membangun solusi ini sesuai dengan keperluan Anda.</p>
                <p>Sebuah leads yang diproses kurang dari 1 jam, lebih efektif 7x dari leads yang diproses lebih dari 1 jam. Leads yang sama bahkan 60x lebih efektif daripada yang diproses lebih dari 24 jam (sumber: Harvard Business Review).</p>
                <p>Apakah Anda punya masalah yang sama dalam urusan distribusi leads? Hubungi kami untuk membantu membangun sistem Leads yang efektif untuk Anda.</p>
                <div class="flex gap-4 mb-10">
                    <a href="https://play.google.com/store/apps/details?id=com.toyota.newtpm&hl=id&gl=US" target="_blank">
                        <img data-src="{{ asset('images/googleplay.png') }}" alt="images" class="lazy max-w-full w-auto h-auto">
                    </a>
                    <a href="https://apps.apple.com/id/app/newtpm/id1484602164" target="_blank">
                        <img data-src="{{ asset('images/appstore.png') }}" alt="images" class="lazy max-w-full w-auto h-auto">
                    </a>
                </div>
                <a href="#contactUs" class="btn" id="btn-covid">
                    Hubungi Kami!
                </a>
            </div>
        </div>
    </div>
</div>

<div class="bg-gray-100">
    <div class="container md:w-[90%] mx-auto max-sm:px-3 py-20">
        <div class="grid md:grid-cols-2 md:gap-14 place-items-center">
            <div class="wrapper-product">
                <h3 class="">RajaMobil.com</h3>
                <div class="divide"></div>
                <div class="text-description">
                    <h5 class="">Portal mobil baru dengan lebih dari 5000 promosi pada satu saat.</h5>
                    <p>Portal mobil baru kami mengumpulkan semua promosi dari semua anggota dealer dan salesmen hingga sekitar 5000 promosi mobil dari segala merk setiap saat.</p>
                    <p>Saat ini ada lebih dari 300’000 pengunjung setiap bulannya. Lebih dari 3000 pengunjung di antaranya berinteraksi dengan salesmen di dalam ekosistem kami.</p>
                    <p>Coba sekarang. Tanpa biaya.</p>
                    <a href="https://my.rajamobil.com" class="btn" id="btn-covid">
                        Gratis tanpa biaya. Daftar sekarang!
                    </a>
                </div>
            </div>
            <div class="">
                <img data-src="{{ asset('images/rajamobil-web.png') }}" alt="image" class="lazy max-w-full w-auto h-auto mx-auto max-sm:mb-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            </div>
        </div>
    </div>
</div>

<div class="bg-gray-200" id="service">
    <div class="container md:w-[90%] mx-auto max-sm:px-3 py-20 max-sm:pb-6">
        <div class="wrapper-product text-center">
            <h3 class="">Layanan Tambahan dari INGING</h3>
            <div class="divide mx-auto"></div>
            <div class="text-description text-start">
                <p>Kami mengerti bahwa menjalankan kegiatan digital tidaklah mudah: berkampanye supaya mendatangkan pelanggan lebih banyak, mencoba menjaring dari channel lain seperti Facebook dan Instagram, atau bahkan harus mencoba memahami semua aspek digital ini yang berjalan dengan sangat cepat.</p>
                <p>Kami paham, membangun produk saja tidak cukup untuk membantu Anda. Banyak hal lain yang perlu dibantu. Maka kami menyediakan layanan di bawah ini untuk membantu Anda:</p>
            </div>
        </div>
    </div>
</div>
<div class="bg-gray-200">
    <div class="container md:w-[90%] mx-auto max-sm:px-3">
        <div class="tabs-service">
            <ul class="tabs" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                <li role="presentation">
                    <button class="" id="DT-tab" data-tabs-target="#DT" type="button" role="tab" aria-controls="DT" aria-selected="false">
                        <i class='bx bxs-graduation block text-4xl'></i>
                        Digital Training
                    </button>
                </li>
                <li role="presentation">
                    <button class="" id="CA-tab" data-tabs-target="#CA" type="button" role="tab" aria-controls="CA" aria-selected="false">
                        <i class='bx bxs-megaphone block text-4xl'></i>
                        1-Click Advertising
                    </button>
                </li>
                <li role="presentation">
                    <button class="" id="SMM-tab" data-tabs-target="#SMM" type="button" role="tab" aria-controls="SMM" aria-selected="false">
                        <i class='bx bxl-instagram-alt block text-4xl'></i>
                        Social Media Management
                    </button>
                </li>
                <li role="presentation">
                    <button class="" id="SEO-tab" data-tabs-target="#SEO" type="button" role="tab" aria-controls="SEO" aria-selected="false">
                        <i class='bx bx-desktop block text-4xl'></i>
                        Seo Optimization
                    </button>
                </li>
            </ul>
        </div>
    </div>
    <div class="content-service">
        <div class="container md:w-[90%] mx-auto max-sm:px-3 py-14" id="default-tab-content">
            <div class="hidden md:p-4" id="DT" role="tabpanel" aria-labelledby="DT-tab">
                <div class="wrapper">
                    <div>
                        <img src="{{ asset('images/digital-training.jpg') }}" alt="image" class="max-w-full w-auto h-auto md:max-h-[400px] mx-auto max-sm:mb-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    </div>
                    <div>
                        <div class="wrapper-product">
                            <h3 class="">Digital Training</h3>
                            <div class="divide"></div>
                            <div class="text-description">
                                <p>Kami sering berinteraksi dengan dealer, dan kami mengerti dunia digital memang kadang membingungkan. Maka kami menyiapkan kelas-kelas digital khusus otomotif untuk membantu dealer dapat beradaptasi dengan dunia digital.</p>
                                <p>Berikut beberapa materi yang sering kami berikan:</p>
                                <ol>
                                    <li>Beriklan melalui pencarian Google.</li>
                                    <li>Beriklan melalui Facebook dan Instagram.</li>
                                    <li>Manajemen Media Sosial Facebook dan Instagram.</li>
                                </ol>
                                <p>Atau kami bisa menyiapkan kelas custom sesuai kebutuhan. Hubungi kami untuk pemesananan dan mengatur jadwal training.</p>
                                <a href="#contactUs" class="btn" id="btn-covid">
                                    Hubungi Kami!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden md:p-4" id="CA" role="tabpanel" aria-labelledby="CA-tab">
                <div class="wrapper">
                    <div>
                        <img src="{{ asset('images/advertising.jpg') }}" alt="image" class="max-w-full w-auto h-auto md:max-h-[400px] mx-auto max-sm:mb-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    </div>
                    <div>
                        <div class="wrapper-product">
                            <h3 class="">1-click Advertising</h3>
                            <div class="divide"></div>
                            <div class="text-description">
                                <p>Tidak semua orang bisa dan punya waktu untuk menjalankan aktivitas pemasaran masing-masing. Kita membantu Anda untuk melakukan iklan di Google, Facebook, dan berbagai pilihan media lainnya sesuai pesanan Anda.</p>
                                <p>Kami menyediakan fasilitas di dalam aplikasi untuk bisa mengiklankan inventori mobil Anda di dalam web, atau berbagai macam bentuk iklan lain yang dibutuhkan.</p>
                                <p>Hubungi kami untuk keterangan lebih lanjut, atau temukan tombol beriklan di aplikasi Anda.</p>
                                <a href="#contactUs" class="btn" id="btn-covid">
                                    Hubungi Kami!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden md:p-4" id="SMM" role="tabpanel" aria-labelledby="SMM-tab">
                <div class="wrapper">
                    <div>
                        <img src="{{ asset('images/social-media.jpg') }}" alt="image" class="max-w-full w-auto h-auto md:max-h-[400px] mx-auto max-sm:mb-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    </div>
                    <div>
                        <div class="wrapper-product">
                            <h3 class="">Social Media Management</h3>
                            <div class="divide"></div>
                            <div class="text-description">
                                <p>Manajemen media sosial sangat membutuhkan dedikasi waktu dan konsistensi. Kualitas dan konsistensi konten sangatlah penting, tanpa istirahat hampir 24 jam. Tidak semua orang punya kapasitas membangun hal ini. Kami memahami adanya tuntutan untuk mengembangkan channel pemasaran di sini, dan kami siap membantu apabila dibutuhkan mengurus media sosial Anda secara profesional.</p>
                                <a href="#contactUs" class="btn" id="btn-covid">
                                    Hubungi Kami!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden md:p-4" id="SEO" role="tabpanel" aria-labelledby="SEO-tab">
                <div class="wrapper">
                    <div>
                        <img src="{{ asset('images/seo.jpg') }}" alt="image" class="max-w-full w-auto h-auto md:max-h-[400px] mx-auto max-sm:mb-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    </div>
                    <div>
                        <div class="wrapper-product">
                            <h3 class="">SEO Optimization</h3>
                            <div class="divide"></div>
                            <div class="text-description">
                                <p>Menunggu website kita naik ke ranking 1 kadang memang lama. Apabila kita beruntung, akan naik cepat dalam waktu 1 bulan. Tapi lebih sering memakan waktu berbulan-bulan, terutama di daerah yang kompetitif. Sering, website dengan struktur yang bagus seperti INGING tidak cukup untuk bisa naik dengan cepat. Apabila Anda tida sabar, ada trik-trik khusus yang bisa dilakukan untuk mempercepat naikya peringkat 1 website.</p>
                                <p>Kami menyediakan layanan ini, yang disebut SEO Optimization, dengan mengeluarkan sejumlah budget untuk menyebar link di penjuru internet, untuk meningkatkan ranking pencarian lebih cepat.</p>
                                <a href="#contactUs" class="btn" id="btn-covid">
                                    Hubungi Kami!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<!-- import another js file -->
@endsection