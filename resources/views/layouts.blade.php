<!DOCTYPE html>
<html lang="en">
<head>
    <!-- PAGE TITLE HERE -->
    <title>Mediqu Laravel | @yield('page-title', 'Dashboard')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add required CSS files here -->
    <link href="{{ asset('vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/chartist/css/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        /* Preloader wrapper styling */
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7); /* Black with 70% opacity */
            z-index: 9999; /* Ensures it sits on top of other content */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Keyframes for spinner */
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

    </style>
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <!-- Main Wrapper -->
    <div id="main-wrapper">
        @include('partials.navbar')
        <!-- Header -->
        @include('partials.header')

        <!-- Sidebar -->
        @include('partials.sidebar')

        <!-- Main Content -->
        <div class="content-body default-height">
            @yield('content')
        </div>

        <!-- Footer -->
        @include('partials.footer')
    </div>




    <script src="{{ asset('vendor/global/global.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/chart.js/Chart.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/apexchart/apexchart.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/lightgallery/dist/lightgallery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/lightgallery/dist/plugins/thumbnail/lg-thumbnail.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/lightgallery/dist/plugins/zoom/lg-zoom.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/custom.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/deznav-init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/demo.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/styleSwitcher.js') }}" type="text/javascript"></script>
</body>
</html>
