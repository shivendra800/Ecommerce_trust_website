<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title')</title>

    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keyword')"">
    <meta name=" author" content="Shivendra Ecommer">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css')  }}">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">



    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />

    {{-- Owl Carousel --}}
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    {{-- End Owl Carousel --}}


    {{-- Ex Zoom - PrductImage--}}
    <link rel="stylesheet" href="{{ asset('assets/exzoom/jquery.exzoom.css') }}">
    {{-- End Ex Zoom --}}

    @livewireStyles
</head>
<body>
    <div id="app">
        @include('layouts.inc.frontend.navbar')

        <main class="">
            @yield('content')
        </main>
        @include('layouts.inc.frontend.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery-3.6.1.min.js')  }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')  }}"></script>

    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <script>
        window.addEventListener('message', event => {

            if (event.detail) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.notify(event.detail.text, event.detail.type);
            }

        });

    </script>

    <!-- Scripts  Owl Carousel -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- Scripts End Owl Carousel -->

    <!-- Scripts Ex Zoom - PrductImage -->
    <script src="{{ asset('assets/exzoom/jquery.exzoom.js') }}"></script>
    <!-- Scripts EndEx Zoom - PrductImage -->
    @yield('script')

    @livewireScripts
    @stack('scripts')

</body>
</html>
