@extends('layouts.app')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

<div class="relative">
    <img src="{{ asset('images/news-article.jpg') }}" alt="images" class="w-full h-[39em] object-cover object-top brightness-[40%]">
    <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center">
        <div class="font-montserrat text-white w-3/4 text-center md:pt-10">
            <h2 class="text-[2.5rem] leading-[1] font-normal">Kumpulan berita & tulisan kami.</h2>
            <div class="w-16 h-0.5 bg-white mx-auto my-8"></div>
            <p class="text-lg text-white/90">Kami menjalankan perusahaan yang unik, perusahaan teknologi yang sangat berfokus di otomotif. Kami membagikan buah pikiran kami di sini. Semoga bermanfaat dan silahkan untuk berdiskusi bersama kami.</p>
        </div>
    </div>
</div>

<div class="container md:w-[90%] mx-auto max-sm:px-3 my-16">
    <div class="grid md:grid-cols-4 md:gap-10">
        <div class="max-sm:order-2 col-span-3">
            <div class="article">
                <div class="item">
                    <a href="{{ route('newsarticle.detail', ['slug'=>'press-conference']) }}">
                        <img data-src="{{ asset('images/about-us.jpg') }}" alt="images" class="lazy">
                    </a>
                    <div class="description">
                        <h3>Rajamobil.com Press Conference</h3>
                        <div class="tags">News</div>
                        
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem harum explicabo, quisquam repellendus tenetur a minus vitae, voluptas, ipsa eaque possimus nesciunt quo! Fugit molestiae officiis, animi aperiam explicabo deserunt?</p>
                        </div>
                        <p>6 Sept 2017</p>
                    </div>
                </div>
                <div class="item">
                    <a href="{{ route('newsarticle.detail', ['slug'=>'press-conference']) }}">
                        <img data-src="{{ asset('images/advertising.jpg') }}" alt="images" class="lazy">
                    </a>
                    <div class="description">
                        <h3>Rajamobil.com Press Conference</h3>
                        <div class="tags">News</div>
                        
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem harum explicabo, quisquam repellendus tenetur a minus vitae, voluptas, ipsa eaque possimus nesciunt quo! Fugit molestiae officiis, animi aperiam explicabo deserunt?</p>
                        </div>
                        <p>6 Sept 2017</p>
                    </div>
                </div>
                <div class="item">
                    <a href="{{ route('newsarticle.detail', ['slug'=>'press-conference']) }}">
                        <img data-src="{{ asset('images/about-us.jpg') }}" alt="images" class="lazy">
                    </a>
                    <div class="description">
                        <h3>Rajamobil.com Press Conference</h3>
                        <div class="tags">News</div>
                        
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem harum explicabo, quisquam repellendus tenetur a minus vitae, voluptas, ipsa eaque possimus nesciunt quo! Fugit molestiae officiis, animi aperiam explicabo deserunt?</p>
                        </div>
                        <p>6 Sept 2017</p>
                    </div>
                </div>
                <div class="item">
                    <a href="{{ route('newsarticle.detail', ['slug'=>'press-conference']) }}">
                        <img data-src="{{ asset('images/advertising.jpg') }}" alt="images" class="lazy">
                    </a>
                    <div class="description">
                        <h3>Rajamobil.com Press Conference</h3>
                        <div class="tags">News</div>
                        
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem harum explicabo, quisquam repellendus tenetur a minus vitae, voluptas, ipsa eaque possimus nesciunt quo! Fugit molestiae officiis, animi aperiam explicabo deserunt?</p>
                        </div>
                        <p>6 Sept 2017</p>
                    </div>
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