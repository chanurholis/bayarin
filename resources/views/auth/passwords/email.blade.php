<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title', 'Forgot Password') &mdash; {{ config('app.name') }}</title>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
    <div id="app">
        <section class="section">
        <div class="container mt-5">
            <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="login-brand">
                    <h2>{{ config('app.name') }}</h2>
                </div>

                <div class="card card-primary">
                <div class="card-header"><h4>Forgot Password</h4></div>

                <div class="card-body">
                    @if (session('status'))
                    <p class="muted">{{ session('status') }}</p>
                    @endif
                    <form method="post" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control" name="email" tabindex="1" autocomplete="email">
                            <div class="invalid-feedback">
                                @error('email') {{ $message }}  @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="2">
                            Forgot Password
                            </button>
                        </div>
                    </form>
                </div>
                </div>
                <div class="simple-footer">
                    Copyright &copy; <a href="https://github.com/KELOMPOK-2-RPL2-SMKN1SUBANG">Kelompok 2</a> <div class="bullet"></div> {{ date('Y') }}
                </div>
            </div>
            </div>
        </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/momment.min.js') }}"></script>

    <!-- Script -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
