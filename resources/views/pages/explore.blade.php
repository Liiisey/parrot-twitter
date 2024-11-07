@extends('layouts.main')

@section('explore-content')
    <div class="container second-width">
        <div class="card mx-auto mb-4">
            <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">Popular hashtags :</h6>
                <!-- loop for adding hashtags from json file -->
                @foreach($hashtags as $hashtag)
                    <a class="hashtag-list link-offset-2 link-offset-1-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">
                        #{{$hashtag['name']}}
                    </a>
                @endforeach
            </div>
        </div>

        @include('shared-layouts.order-squawks')

        @include('shared-layouts.squawk-template')
    </div>
@endsection
