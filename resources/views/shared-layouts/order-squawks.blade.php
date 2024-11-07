<div class="mx-auto main-width d-flex justify-content-end mb-2">
    <div class="dropdown">
        <i data-feather="sliders" class="resize-icon margin-r-1" data-bs-toggle="dropdown"></i>
        <ul class="dropdown-menu">
            <li><h6 class="dropdown-header">Sort by</h6></li>
            <li>
                <a @class(["dropdown-item", "active" => !str_contains(URL::full(), "?sortBy=")])
                   href="{{ route(Route::current()->getName()) }}">Relevance
                </a>
            </li>
            <li>
                <a @class(["dropdown-item", "active" => str_contains(URL::full(), "?sortBy=")])
                   href="{{ route(Route::current()->getName(), ["sortBy" => "created_at"]) }}">Newest first
                </a>
            </li>
        </ul>
    </div>
</div>
