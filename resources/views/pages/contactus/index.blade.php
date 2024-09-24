@extends('layouts.app')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

<div class="container md:w-[90%] mx-auto mt-[125px] max-sm:px-3">
    <div class="py-16 grid md:grid-cols-2 md:gap-14">
        <div>
            <h3 class="text-4xl font-montserrat uppercase mb-10">Hubungi Kami</h3>
            <form action="#">
                <div class="grid md:grid-cols-2 md:gap-4">
                    <div class="mb-4">
                        <label for="name" class="block mb-2 text-sm font-medium">Nama <abbr class="text-red-500">*</abbr></label>
                        <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-800 font-light text-sm focus:ring-gray-300 focus:border-gray-300 block w-full p-3" required />
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block mb-2 text-sm font-medium">Email <abbr class="text-red-500">*</abbr></label>
                        <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-800 font-light text-sm focus:ring-gray-300 focus:border-gray-300 block w-full p-3" required />
                    </div>
                </div>
                <div class="mb-4">
                    <label for="topik" class="block mb-2 text-sm font-medium">Topik Pertanyaan <abbr class="text-red-500">*</abbr></label>
                    <select id="topik" class="bg-gray-50 border border-gray-300 text-gray-800 font-light text-sm focus:ring-gray-300 focus:border-gray-300 block w-full p-3">
                        <option value="Pertanyaan Umum">Pertanyaan Umum</option>
                        <option value="Tentang Produk dan Layanan INGING">Tentang Produk dan Layanan INGING</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="mb-10">
                    <label for="message" class="block mb-2 text-sm font-medium">Pesan <abbr class="text-red-500">*</abbr></label>
                    <textarea id="message" name="message" rows="5" class="bg-gray-50 border border-gray-300 text-gray-800 font-light text-sm focus:ring-gray-300 focus:border-gray-300 block w-full p-3" required></textarea>
                </div>
                <div class="mb-4">
                    <button class="py-3.5 px-10 text-xl font-bold bg-orange-500 border border-white text-white hover:bg-orange-600 hover:border-orange-600 rounded-md transition duration-150 ease-in">Submit</button>
                </div>
            </form>
        </div>
        <div class="about-us">
            <div class="description md:mt-[6.3rem!important]">
                <p>Hubungi tim kami untuk mengetahui lebih lanjut mengenai program, produk, dan layanan kami.</p>
                <p>Anda dapat menghubungi agen dan rekanan kami di lapangan, menggunakan form di samping ini, atau menghubungi nomor di bawah ini di dalam jam kerja Senin-Jumat, 08.00-17.00:</p>
                <p>Call: <a href="#">(+62-21) 8068 2356</a></p>
                <p>Whatsapp: <a href="#">(+62) 82113173446</a></p>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<!-- import another js file -->
@endsection