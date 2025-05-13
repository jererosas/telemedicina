<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light" data-menu-styles="dark"
    data-width="fullwidth">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Laravel Tailwind Responsive Admin Web Dashboard Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="template admin, dashboard, laravel template, admin panel laravel, admin dashboard template, template dashboard, laravel, laravel vite, admin, laravel framework, tailwind css, laravel dashboard, dashboard admin template, laravel tailwind, tailwind admin template, dashboard tailwind, tailwind dashboard, tailwind dashboard template">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- TITLE -->
    <title>{{config('app.name') }}</title>

    <!-- FAVICON -->
    <link rel="icon" href="{{asset('build/assets/images/brand-logos/favicon.ico')}}" type="image/x-icon">

    <!-- ICONS CSS -->
    <link href="{{asset('build/assets/icon-fonts/icons.css')}}" rel="stylesheet">
    <link href="{{asset('styles.css')}}" rel="stylesheet">
    <!-- APP SCSS -->
    @vite(['resources/sass/app.scss'])


    <!-- APP CSS -->
    @vite(['resources/css/app.css'])


    @include('layouts.components.styles')

    <!-- MAIN JS -->
    <script src="{{asset('build/assets/main.js')}}"></script>

    @yield('styles')
    @livewireStyles
</head>

<body>

    <!-- SWITCHER -->
    @include('layouts.components.switcher')

    <!-- END SWITCHER -->



    <div class="min-h-screen pb-16">

        <!-- HEADER -->
        @if (Auth::user()->admin == '1')
        @livewire('header')
        @endif
        <!-- END HEADER -->

        <!-- SIDEBAR -->

        @if (Auth::user()->admin == '1')
        @include('layouts.components.siderbar-admin')
        @endif


        <!-- END SIDEBAR -->

        <!-- MAIN-CONTENT -->
     

    
            <div class="container-fluid">

                {{ $slot }}
            </div>
  
        <!-- MAIN-CONTENT -->

        <!-- FOOTER -->

        @if (Auth::user()->admin == NULL)
        @livewire('menu-users')
        @endif
        <!-- END FOOTER -->

    </div>

    <!-- SCRIPTS -->
    @include('layouts.components.scripts')

    @yield('scripts')
    @livewireScripts

    <!-- STICKY JS -->
    <script src="{{asset('build/assets/sticky.js')}}"></script>

    <!-- APP JS -->
    @vite('resources/js/app.js')


    <!-- CUSTOM-SWITCHER JS -->
    @vite('resources/assets/js/custom-switcher.js')


    <!-- END SCRIPTS -->
</body>

</html>