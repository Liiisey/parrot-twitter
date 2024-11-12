<div class="card pb-2 mb-4 right-card">
    <div class="d-flex flex-column flex-shrink-0 pt-3 px-3 pb-1 bg-body-tertiary">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <img class="reverse-logo" src="{{ asset('images/squawker-logo.png') }}" width="50" alt="Squawky the parrot"/>
        </a>

        <hr>

        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="/home" @class(["nav-link", str_contains(URL::full(), "/home") ? "active" : "link-body-emphasis" ])>
                    <i class="bi pe-none me-2" data-feather="home"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="/trends" @class(["nav-link", str_contains(URL::full(), "/trends") ? "active" : "link-body-emphasis" ])>
                    <i class="bi pe-none me-2" data-feather="star"></i>
                    Trends
                </a>
            </li>
            <li>
                <a href="/explore" @class(["nav-link", str_contains(URL::full(), "/explore") ? "active" : "link-body-emphasis" ])>
                    <i class="bi pe-none me-2" data-feather="hash"></i>
                    Explore
                </a>
            </li>
            <li>
                <a href="/profile" @class(["nav-link", str_contains(URL::full(), "/profile") ? "active" : "link-body-emphasis" ])>
                    <i class="bi pe-none me-2" data-feather="user"></i>
                    Profile
                </a>
            </li>
        </ul>
        <br>

        <div class="create-squawk-modal mt-2">
            @include('layouts.create-squawk-modal')
        </div>
    </div>
</div>
