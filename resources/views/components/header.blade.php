<header class="w-full fixed top-0 left-0 z-[1021]">
    <div class="max-w-[1800px] mx-auto" id="header" data-theme="@if(in_array(request()->route()->getName(), ['product','aboutus','contactus','newsarticle.detail'])) white @else transparent @endif">
        <div class="w-[90%] mx-auto py-1.5 visible h-auto text-right transition-all duration-500 ease-out" id="header-contact">
            <small class="font-medium">(+62-21) 8068 2356 (Monday to Friday: 08.00-17.00)</small>
        </div>
        <div class="border-y border-y-white/30 text-white bg-transparent transition duration-150 ease-in" id="navbars">
            <div class="w-[90%] mx-auto flex flex-wrap items-center justify-between h-full md:h-[90px] max-sm:px-2">
                <div class="">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/Logo-white.png') }}" class="h-16 md:h-[90px] block" alt="Logo" id="logo-white" />
                    </a>
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/Logo-orange.png') }}" class="h-16 md:h-[90px] hidden" alt="Logo" id="logo-orange" />
                    </a>
                </div>
                <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto max-sm:mb-10 max-sm:border-t max-sm:border-white max-sm:border-t-gray-300" id="navbar-default">
                    <ul class="flex flex-col items-center md:flex-row justify-evenly gap-10 font-light px-3 py-4 md:px-0 md:py-0 max-sm:mt-4">
                        <li class="">
                            <a href="{{ route('home') }}" class="nav-links font-medium hover:opacity-70 transition duration-150 ease-out hover:ease-in">
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('product') }}" class="nav-links font-medium hover:opacity-70 transition duration-150 ease-out hover:ease-in">
                                <span>Product</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('product') }}#service" class="nav-links font-medium hover:opacity-70 transition duration-150 ease-out hover:ease-in">
                                <span>Service</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('newsarticle') }}" class="nav-links font-medium hover:opacity-70 transition duration-150 ease-out hover:ease-in">
                                <span>News & Articles</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('aboutus') }}" class="nav-links font-medium hover:opacity-70 transition duration-150 ease-out hover:ease-in">
                                <span>About Us</span>
                            </a>
                        </li>
                        <li>
                            <div class="flex max-sm:flex-wrap max-sm:justify-center flex-row items-center gap-3">
                                <a href="#" class="py-2 px-6 text-sm font-medium border-2 border-gray-100 hover:opacity-70 transition duration-150 ease-out" id="btn-covid">
                                    Covid-19 Support
                                </a>
                                <a href="{{ route('contactus') }}" class="py-2 px-6 text-sm font-medium border-2 border-orange-500 bg-orange-500 text-white hover:opacity-70 transition duration-150 ease-out">
                                    Contact Us
                                </a>
                                <div class="relative">
                                    <a href="javascript:void(0);" class="px-3 cursor-pointer" id="navbar-search" data-dropdown-toggle="dropdown">
                                        <i class='bx bx-search text-xl'></i>
                                    </a>
                                    <!-- Dropdown menu -->
                                    <div id="dropdown" class="z-10 hidden mt-[1.9rem!important] bg-white divide-y divide-gray-100 rounded-lg shadow w-[320px] dark:bg-gray-700 mr-[-100px!important]">
                                        <div class="p-4" aria-labelledby="navbar-search">
                                            <form>
                                                <div class="relative">
                                                    <input type="text" id="email-address-icon" class="bg-gray-50 border border-gray-300 focus:ring-gray-300 focus:border-gray-300 text-gray-900 text-sm rounded-lg block w-full pe-10 p-2.5" placeholder="Search...">
                                                    <i class='bx bx-search text-xl text-black/80 absolute inset-y-0 end-0 flex items-center pe-3.5 pointer-events-none'></i>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>