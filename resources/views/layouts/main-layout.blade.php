@extends('layouts.master-layout')

@section('main-content')
    <!-- navigation -->
    <div class="first-column pt-3 col-md-2 d-flex align-items-center justify-content-center">
        @include('layouts.nav')
    </div>
    <!-- ./navigation -->


    <!-- content -->
    <div class="second-column scrollable-column pt-3 col-md-7 d-flex justify-content-center">
        @yield('home-content')
        @yield('trends-content')
        @yield('explore-content')
        @yield('profile-content')
    </div>
    <!-- .content -->

    <!-- third-column -->
    <div class="third-column pt-2 col-md-3">
        @include('layouts.third-column')
    </div>
    <!-- ./third-column -->
@endsection
