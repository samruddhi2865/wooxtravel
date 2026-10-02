<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    <title>
        @yield('title', 'WoOx Travel')
    </title>


    <!-- Bootstrap -->

    <link
        rel="stylesheet"
        href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}"
    >


    <!-- Font Awesome -->

    <link
        rel="stylesheet"
        href="{{ asset('assets/css/fontawesome.css') }}"
    >


    <!-- WoOx -->

    <link
        rel="stylesheet"
        href="{{ asset('assets/css/templatemo-woox-travel.css') }}"
    >


    <!-- Owl -->

    <link
        rel="stylesheet"
        href="{{ asset('assets/css/owl.css') }}"
    >


    <!-- Animate -->

    <link
        rel="stylesheet"
        href="{{ asset('assets/css/animate.css') }}"
    >

    @stack('styles')

</head>


<body>


    <!-- Navigation -->

    @include('partials.navigation')


    <!-- Main Content -->

    <main>

        @yield('content')

    </main>


    <!-- jQuery -->

    <script
        src="{{ asset('vendor/jquery/jquery.min.js') }}"
    ></script>


    <!-- Bootstrap -->

    <script
        src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"
    ></script>


    <!-- WoOx JS -->

    <script
        src="{{ asset('assets/js/isotope.min.js') }}"
    ></script>

    <script
        src="{{ asset('assets/js/owl-carousel.js') }}"
    ></script>

    <script
        src="{{ asset('assets/js/wow.js') }}"
    ></script>

    <script
        src="{{ asset('assets/js/tabs.js') }}"
    ></script>

    <script
        src="{{ asset('assets/js/popup.js') }}"
    ></script>

    <script
        src="{{ asset('assets/js/custom.js') }}"
    ></script>


    @stack('scripts')

</body>

</html>