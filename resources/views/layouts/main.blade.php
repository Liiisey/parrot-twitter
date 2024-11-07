<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="theme-color" content="#ffffff">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://unpkg.com/feather-icons"></script>
    <meta name="version" content="{{ config('app.version') }}">
</head>

<body>
<!-- header line -->
<div class="color-line mb-2"></div>
<!-- ./header line -->

<!-- content -->
<div class="row">
    <!-- navigation -->
    <div class="first-column pt-3 col-md-2 d-flex align-items-center justify-content-center">
        @include('layouts.nav')
    </div>
    <!-- ./navigation -->


    <!-- home-content -->
    <div class="second-column scrollable-column pt-3 col-md-7 d-flex justify-content-center">
        @yield('home-content')
        @yield('trends-content')
        @yield('explore-content')
        @yield('profile-content')
    </div>
    <!-- ./home-content -->

    <!-- third-column -->
    <div class="third-column pt-2 col-md-3">
        @include('layouts.third-column')
    </div>
    <!-- ./third-column -->
</div>
<!-- ./vontent -->


<!-- footer -->
<div class="footer-color-background mt-1">
    @include('layouts.footer')
</div>
<!-- ./footer -->
</body>

<script>feather.replace();</script>
</html>
