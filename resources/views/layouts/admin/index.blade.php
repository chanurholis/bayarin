<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>@yield('title', 'Dashboard') &mdash; {{ env('APP_NAME') }}</title>

<!-- Fontawesome -->
<link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.css') }}">

<!-- Sweet Alert -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">

<!-- CSS -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    <div id="app">
        <div class="main-wrapper">
        <div class="navbar-bg"></div>

        <!-- Navbar -->
        @include('partials.navbar')

        <!-- Sidebar -->
        @include('partials.sidebar')

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>@yield('title', 'Dashboard')</h1>
                </div>

                <div class="section-body">
                    @yield('content')
                </div>
            </section>
        </div>

        <!-- Footer -->
        @include('partials.footer')

        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('assets/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/momment.min.js') }}"></script>

    <!-- Script -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Sweet Alert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>

</body>

</html>
