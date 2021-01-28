<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <title>@yield('title', '404') &mdash; {{ env('APP_NAME') }}</title>

        <!-- Fontawesome -->
        <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.css') }}">

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>

    <body>
        <div id="app">
            <section class="section">
                <div class="container mt-5">
                    <div class="page-error">
                        <div class="page-inner">
                            <h1>403</h1>
                            <div class="page-description">You do not have access to this page.</div>
                            <div class="page-search">
                                <form>
                                    <div class="form-group floating-addon floating-addon-not-append">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-search"></i>
                                        </div>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-append">
                                        <button class="btn btn-primary btn-lg">
                                            Search
                                        </button>
                                        </div>
                                    </div>
                                    </div>
                                </form>
                                <div class="mt-3">
                                    <a href="/">Back to Home</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="simple-footer mt-5">
                    Copyright &copy; <a target="_blank" href="https://github.com/KELOMPOK-2-RPL2-SMKN1SUBANG">Kelompok 2</a> {{ date('Y') }}
                    </div>
                </div>
            </section>
        </div>

        <!-- General JS Scripts -->
        <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}" charset="utf-8"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}" charset="utf-8"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}" charset="utf-8"></script>
        <script src="{{ asset('assets/js/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ asset('assets/js/momment.min.js') }}"></script>

        <!-- Script -->
        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
