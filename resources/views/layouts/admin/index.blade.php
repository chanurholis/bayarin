<!-- Header -->
@include('partials.header')

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
