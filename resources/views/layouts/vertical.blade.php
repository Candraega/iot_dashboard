@include('layouts.shared/main')

<head>
    @include('layouts.shared/title-meta', ['title' => $title])
    @yield('css')
    @include('layouts.shared/head-css')
</head>

<body>

    <div class="wrapper">

        @include('layouts.shared/sidenav')

        <div class="page-content">

            @include('layouts.shared/topbar')

            <main>
                <!-- Start Content-->
                @yield('content')
            </main>

            @include('layouts.shared/footer')

        </div>

    </div>

    </div>

    @include('layouts.shared/footer-scripts')

    @yield('script')

    @vite(['resources/js/app.js'])

</body>

</html>