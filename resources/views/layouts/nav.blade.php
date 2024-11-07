<div class="card pb-3 w-100 right-card">
    <div class="container">
        <div class="container row">
            <div class="d-flex flex-column align-items-center justify-content-center px-3 pt-2 text-white">
                <a href="/" class="pb-3">
                    <img class="reverse-logo" src="{{ asset('images/squawker-logo.png') }}" width="80"
                         alt="Squawky the parrot"/>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center w-75" id="menu">
                    <li class="nav-item">
                        <a href="/home" class="nav-link align-middle px-0">
                            <i data-feather="home"></i>
                            <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/trends" class="nav-link align-middle px-0">
                            <i data-feather="star"></i>
                            <span class="ms-1 d-none d-sm-inline">Trends</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/explore" class="nav-link align-middle px-0">
                            <i data-feather="hash"></i>
                            <span class="ms-1 d-none d-sm-inline">Explore</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/profile" class="nav-link align-middle px-0">
                            <i data-feather="user" class="fs-4 bi-house"></i>
                            <span class="ms-1 d-none d-sm-inline">Profile</span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>

        <div class="create-squawk-modal">
            @include('layouts.create-squawk-modal')
        </div>
    </div>
</div>
