@extends('layouts.main-layout')

@section('squawk-details-content')
    <div class="container second-width">
        <div class="card squawk-details-card">
            @include('shared-layouts.back-section')

            <div class="card-body">
                <h4 class="card-title">
                    @if($squawk['avatar'])
                        <img class="rounded-circle" width="40" src="{{ asset('images/fake-avatars/'. $squawk['avatar']) }}" alt="user avatar"/>
                    @else
                        <img class="rounded-circle" width="40" src="{{ asset('images/placeholder-user.png') }}" alt="user avatar"/>
                    @endif
                    <span class="weight-bold">{{ $squawk['userprofile'] }}</span>
                    <span class="card-subtitle mb-2 text-muted text-small">
                        {{ "@" . $squawk['username'] }}
                    </span>
                </h4>

                <p class="squawk-text-details">{{ $squawk['text'] }}</p>

                @if($squawk['img'])
                    <img class="card-img-top img-fluid img-border" src="{{ asset('images/placeholder-content.png') }}" alt="placeholder image">
                @endif

                <div class="container mt-3">
                    {{ \App\Helpers\DateHelper::formatFullDate($squawk['created_at']) }} · <span style="font-weight: bold;">{{ App\Helpers\NumberHelper::formatNumber(43500) }}</span> vues
                </div>

                <hr/>

                <div class="container row mt-3">
                    <div class="col-2">
                        <span style="font-weight: bold;">
                            {{ $squawk['resquawks'] > 0 ? \App\Helpers\NumberHelper::formatNumber($squawk['resquawks']) : 0 }}
                        </span>
                        {{ $squawk['resquawks'] > 1 ? "Re-squawks" : "Re-squawk" }}
                    </div>
                    <div class="col-2">
                        <span style="font-weight: bold;">
                            {{ $squawk['replies'] > 0 ? \App\Helpers\NumberHelper::formatNumber($squawk['replies']) : 0 }}
                        </span>
                        {{ $squawk['replies'] > 1 ? "Citations" : "Citation" }}
                    </div>
                    <div class="col-2">
                        <span style="font-weight: bold;">
                            {{ $squawk['likes'] > 0 ? \App\Helpers\NumberHelper::formatNumber($squawk['likes']) : 0 }}
                        </span>
                        {{ $squawk['likes'] > 1 ? "Likes" : "Like" }}
                    </div>
                </div>

                <hr/>

                <div class="container row mt-3">
                    <div class="col-3">
                        <i data-feather="message-circle" class="resize-icon"></i>
                    </div>
                    <div class="col-3">
                        <i data-feather="repeat" class="resize-icon"></i>
                    </div>
                    <div class="col-3">
                        <i data-feather="heart" class="resize-icon"></i>
                    </div>
                    <div class="col-3 d-flex justify-content-end">
                        <i data-feather="share-2" class="resize-icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
