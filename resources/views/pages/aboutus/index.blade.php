@extends('layouts.app')

@section('style')
<!-- import another style file -->
@endsection

@section('main')
<div class="bg-gray-100">
    <div class="container md:w-[60%] mx-auto mt-[125px] max-sm:px-3 py-10">
        <div class="about-us">
            <h2 class="title">About Us</h2>
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
</div>

@endsection

@section('scripts')
<!-- import another js file -->
@endsection