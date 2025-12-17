<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title') — MilosGo</title>

    <!-- General CSS -->
    <link rel="stylesheet" href="{{ asset('backend/asset/library/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    @stack('style')

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('backend/asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/asset/css/components.css') }}">
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">

            <!-- Header -->
            @include('components.header')

            <!-- Sidebar -->
            @include('components.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                @yield('main')
            </div>

            <!-- Footer -->
            @include('components.footer')

        </div>
    </div>

    <!-- General JS -->
    <script src="{{ asset('backend/asset/library/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/asset/library/popper.js/dist/umd/popper.js') }}"></script>
    <script src="{{ asset('backend/asset/library/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/asset/library/jquery.nicescroll/dist/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('backend/asset/library/moment/min/moment.min.js') }}"></script>

    <!-- Stisla JS -->
    <script src="{{ asset('backend/asset/js/stisla.js') }}"></script>

    @stack('scripts')

    <!-- Template JS -->
    <script src="{{ asset('backend/asset/js/scripts.js') }}"></script>
    <script src="{{ asset('backend/asset/js/custom.js') }}"></script>

</body>

</html>
