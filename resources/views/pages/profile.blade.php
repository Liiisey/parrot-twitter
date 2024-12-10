@extends('layouts.main-layout')

@section('profile-content')
    <div class="container second-width">
        <div class="card">
            {{--@include('shared-layouts.back-section')--}}

            <img class="card-img-top img-fluid img-banner" src="{{ asset('images/placeholder-banner.png') }}" alt="banner">
            <div class="container" style="padding-top: 12px;">
                <div class="under-banner">
                    <div>
                        <img class="rounded-circle img-user-profile" src="{{ asset('images/placeholder-user.png') }}" alt="user-profile" width="80">
                    </div>
                    <div>
                        <a href="#" class="btn btn-dark rounded-pill">Edit</a>
                    </div>
                </div>
                <div class="mt-2">
                    <div>
                        userprofile
                        <span>
                            <i data-feather="check-circle" class="resize-certif-icon"></i>
                        </span>
                    </div>
                    <div>@username</div>
                </div>
                <div class="mt-2 mb-2">bio</div>
                <div class="row mb-2">
                    <div class="col-1">lieu</div>
                    <div class="col-1">lien(s)</div>
                    <div class="col-1">date</div>
                </div>
                <div class="row mb-4">
                    <div class="col-2">NB squawks</div>
                    <div class="col-2">NB following</div>
                    <div class="col-2">NB followers</div>
                </div>
            </div>

            <div class="container">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="squawks-tab" data-bs-toggle="tab" href="#squawks" role="tab" aria-controls="squawks" aria-selected="true">Squawks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="replies-tab" data-bs-toggle="tab" href="#replies" role="tab" aria-controls="replies" aria-selected="false">Replies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="media-tab" data-bs-toggle="tab" href="#media" role="tab" aria-controls="media" aria-selected="false">Media</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="likes-tab" data-bs-toggle="tab" href="#likes" role="tab" aria-controls="likes" aria-selected="false">Likes</a>
                    </li>
                </ul>
                <div class="container">
                    <div class="tab-content mt-3 mb-3" id="myTabContent">
                        <div class="tab-pane fade show active" id="squawks" role="tabpanel" aria-labelledby="squawks-tab">
                            <!-- Tous les squawks du "gens" connecté, trier par date (le plus récent en premier) -->
                            @include('shared-layouts.squawk-template')
                        </div>
                        <div class="tab-pane fade" id="replies" role="tabpanel" aria-labelledby="replies-tab">
                            <!-- Touste les réponses du "gens" connecté, trier par date (le plus récent en premier) -->

                        </div>
                        <div class="tab-pane fade" id="media" role="tabpanel" aria-labelledby="media-tab">
                            <!-- Tous les medias du "gens" connecté, trier par date (le plus récent en premier) -->

                        </div>
                        <div class="tab-pane fade" id="likes" role="tabpanel" aria-labelledby="likes-tab">
                            <!-- Tous les likes du "gens" connecté, trier par date (le plus récent en premier) -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
