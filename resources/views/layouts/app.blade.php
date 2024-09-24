<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Automotive Technology Startup | INGING Inc.</title>
    <meta name="publisher" content="RajaMobil.com">
	<meta name="description" content="INGING Inc., an automotive technology startup providing the best automotive experience for dealers and customers: buy, own, sell, finance." />
	<link rel="canonical" href="https://inging.id/" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Automotive Technology Startup | INGING Inc." />
	<meta property="og:description" content="INGING Inc., an automotive technology startup providing the best automotive experience for dealers and customers: buy, own, sell, finance." />
	<meta property="og:url" content="https://inging.id/" />
	<meta property="og:site_name" content="INGING Inc." />
	<meta property="article:publisher" content="https://www.facebook.com/inginginc/" />
	<meta property="article:modified_time" content="2021-08-06T08:24:54+00:00" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon" />

    <!-- import css file -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @yield('style')

    <!-- import js file -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" defer></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js" defer></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js" defer></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    @yield('scripts')
    @stack('push-scripts')
</head>

<body>

    <main role="main" class="max-w-[1800px] mx-auto">

        <x-header></x-header>
        
        @yield('main')

        <x-footer></x-footer>
        
    </main>

</body>

</html>