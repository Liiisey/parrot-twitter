<div class="container">
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center pb-4 mb-4">
            <li class="nav-item footer-about">
                <a href="/about" class="nav-link px-2 text-body-secondary">About</a>
            </li>
            <li class="nav-item footer-divider"></li>
            <li class="nav-item footer-version" data-bs-toggle="tooltip" title="😻 github">
                <a href="https://github.com/Liiisey/parrot-twitter" target="_blank" class="nav-link px-2 text-body-secondary target-blank-icon">
                    <span>v{{ config('app.version')  }}</span>
                </a>
            </li>
        </ul>
        <p class="text-center text-body-secondary pb-2 mb-2">
            <a href="/">
                <img class="fs-5 d-none d-sm-inline" src="{{ asset('images/squawker-logo.png') }}" width="40" alt="Squawky the parrot"/>
            </a>
        </p>
        <p class="text-center text-body-secondary mt-2">
            {{ config('app.name') }} 2024
        </p>
    </footer>
</div>

