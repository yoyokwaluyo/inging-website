@extends('layouts.app')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

<div class="container md:w-[90%] mx-auto max-sm:px-3 my-16 mt-40">
    <div class="grid md:grid-cols-4 md:gap-10">
        <div class="max-sm:order-2 col-span-3">
            <div class="about-us">
                <h2 class="title">Press Conference</h2>
                <div class="divide"></div>
                <img data-src="{{ asset('images/about-us.jpg') }}" alt="image" class="lazy" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                <div class="description">
                    <h3 class="subtitle">Tentang Kami</h3>
                    <p>PT. INGING Teknologi Internasional atau INGING, adalah perusahaan teknologi otomotif yang ditemukan dengan landasan untuk membuat urusan otomotif menjadi lebih baik dengan digital.</p>
                    <p>INGING didirikan tahun 2012 oleh seorang pencinta otomotif, dan juga pebisnis otomotif. Dilihat bahwa banyak hal yang bisa dibenahi di industri ini melalui digital, maka didirikanlah perusahaan teknologi otomotif ini.</p>
                    <p>Pertama berdiri sebagai RajaMobil.com pada tahun 2012, perusahaan banyak berpusat pada portal dan marketplace. Sejalan dengan matangnya sistem dan pengalaman di teknologi otomotif, RajaMobil.com mulai mengembangkan layanannya dengan memberikan sistem yang selama ini dibangun ke para Dealer Mobil Baru pada tahun 2019.</p>
                    <p>Suksesnya produk dan layanan baru ini, membuat perusahaan ini berkembang, dan berganti nama menjadi INGING, membawahi beberapa Produk tersebut, dan RajaMobil.com menjadi salah satu produk dari INGING.</p>
                    <p><i>PT. INGING Teknologi Internasional or INGING is an <a href="/">automotive technology startup</a> company, which founded to make everything related with auto is better through technology.</i></p>
                    <p><i>The company was founded in 2012 by a car afficionados, also an automotive businessman. He seen that many things can be made better through digital and technology, which become the embrio of the company.</i></p>
                    <p><i>First, it was built as a portal and classified site. Along the journey, as the system got matured, more complex, gained experiences, we started to lease the system to the new car dealers in 2019.</i></p>
                    <p><i>It was a success. With the fast growth, we decided to change the name into INGING, continuing to develop the Products and Services, and put RajaMobil.com as one of the product under INGING.</i></p>
                    <br><br>
                    <h3 class="subtitle">Visi</h3>
                    <p><i>Kami ingin membuat pengalaman berurusan dengan mobil yang lebih baik.</i></p>
                    <p><i>We want to create a better experience of dealing with car.</i></p>
                    <br><br>
                    <h3 class="subtitle">Mission</h3>
                    <p>Kami memulai dengan membenahi semua proses, alat, dan komunikasi berjualan supaya pengalaman dalam berjualan dan membeli mobil bisa senyaman mungkin, dan dimungkinkan dilakukan melalui teknologi.</p>
                    <p>Penjual bisa melayani pelanggan dengan mudah, memahami mau pelanggan dan melayani hingga penjualan, purna jual, hingga saatnya mobil tersebut untuk dijual kembali.</p>
                    <p>Pembeli pun bisa mendapatkan mobil idamannya dengan mudah, membeli dan memiliki dengan nyaman, transparan, dan aman, hingga saatnya menjual mobilnya kembali.</p>
                    <p>Kita yang akan membereskan semua landasan (digital)-nya, sehingga penjual dan pembeli dan seluruh ekosistem bisa melakukan aktivitas masing-masing dengan nyaman dan lebih baik.</p>
                    <p><i>We start with preparing the foundation for the process and tools, as the communication means, so the experience of buying and selling will be smooth and comfortable for both sides, made possible by technology.</i></p>
                    <p><i>Seller can server the customer easily, understanding them more, from the buying process, after-sales, until the end of the life-cycle.</i></p>
                    <p><i>Buyer too will be able to get the right dream car easily, buy, own, comfortably, safe, and transparent, without worry, until the end of the car life-cycle.</i></p>
                    <p><i>We will take care all of the (digital) foundation. So all stakeholders can be focused on their each activities without worry, and better.</i></p>
                </div>
            </div>
        </div>
        <div class="max-sm:order-1">
            <div class="py-4">
                <div>
                    <form>
                        <div class="relative">
                            <input type="text" id="email-address-icon" class="bg-gray-50 border border-gray-300 focus:ring-gray-300 focus:border-gray-300 text-gray-900 text-sm rounded-lg block w-full pe-10 p-2.5" placeholder="Search...">
                            <i class='bx bx-search text-xl text-black/80 absolute inset-y-0 end-0 flex items-center pe-3.5 pointer-events-none'></i>
                        </div>
                    </form>
                </div>
                <div class="mt-10">
                    <h3 class="text-xl">Categories</h3>
                    <div class="w-16 h-0.5 bg-black/90 mt-3 mb-6"></div>
                    <a href="#" class="bg-orange-100 hover:bg-orange-200 text-orange-500 text-sm font-medium me-2 px-2.5 py-0.5 rounded border border-orange-400 inline-flex items-center justify-center">Article</a>
                    <a href="#" class="bg-orange-100 hover:bg-orange-200 text-orange-500 text-sm font-medium me-2 px-2.5 py-0.5 rounded border border-orange-400 inline-flex items-center justify-center">Covid-19</a>
                    <a href="#" class="bg-orange-100 hover:bg-orange-200 text-orange-500 text-sm font-medium me-2 px-2.5 py-0.5 rounded border border-orange-400 inline-flex items-center justify-center">Artikel</a>
                    <a href="#" class="bg-orange-100 hover:bg-orange-200 text-orange-500 text-sm font-medium me-2 px-2.5 py-0.5 rounded border border-orange-400 inline-flex items-center justify-center">News</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<!-- import another js file -->
@endsection