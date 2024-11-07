<div class="container">
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center pb-3 mb-3">
            <li class="nav-item">
                <a href="#" class="nav-link px-2 text-body-secondary">About</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link px-2 text-body-secondary">v{{ config('app.version')  }}</a>
            </li>
        </ul>
        <p class="text-center text-body-secondary mb-1">
            <img class="fs-5 d-none d-sm-inline" src="{{ asset('images/squawker-logo.png') }}" width="40" alt="Squawky the parrot"/>
        </p>
        <p class="text-center text-body-secondary">
            &copy; {{ config('app.name') }} 2024
        </p>
    </footer>
</div>

