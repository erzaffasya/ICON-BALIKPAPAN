<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="facebook-domain-verification" content="nnibcx9yzicszvc5ndbdvatrhlwt1w" />

    <title>@yield('title', 'ICONNET - Layanan Internet Broadband dan TV dari Indonesia Comnets Plus (ICON+)')</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <!-- Leaflet Control Geocoder CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.14/dist/full.min.css" rel="stylesheet" type="text/css" />

    @yield('header')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('landing.components.navbar')
    <div class="min-h-screen">
        @yield('content')
    </div>
    @include('landing.components.footer')
    <!-- Please paste the script inside -->
    <script src="https://storage.googleapis.com/f8a350-taplive-prd-public/static/launcher/web/v1.0/main.js" async defer
        onload="onLoadOneTalk()"></script>

    <script>
        function onLoadOneTalk() {
            TapTalkLive.init("0ab067d767cd33ff7f65a64fe5acd0312bf1d7e53a0b70836e82eeaa67fbc35d");
        }
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    @yield('script')
</body>

</html>
