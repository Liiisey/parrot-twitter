@foreach($squawks as $squawk)
    <div class="card mx-auto main-width mb-3">
        <div class="card-body">
            <a href="{{ route('squawk.show', $squawk['id']) }}" class="nav-link">
                <h4 class="card-title">
                    @if($squawk['avatar'])
                        <img class="rounded-circle" width="40" src="{{ asset('images/fake-avatars/'. $squawk['avatar']) }}" alt="user avatar"/>
                    @else
                        <img class="rounded-circle" width="40" src="{{ asset('images/placeholder-user.png') }}" alt="user avatar"/>
                    @endif
                    <span class="weight-bold">{{ $squawk['userprofile'] }}</span>
                    <span class="card-subtitle mb-2 text-muted text-small">
                        {{ "@" . $squawk['username'] }} · {{ \App\Helpers\DateHelper::formatDate($squawk['created_at']) }}
                    </span>
                </h4>
            </a>
            <p class="card-text">{{ $squawk['text'] }}</p>
            @if($squawk['img'])
                <img class="card-img-top img-fluid img-border" src="{{ asset('images/placeholder-content.png') }}" alt="placeholder image">
            @endif
            <div class="container row mt-3">
                <div class="col-2">
                    <i data-feather="message-circle" class="resize-icon"></i>
                    @if($squawk['replies'] > 0)
                        {{ \App\Helpers\NumberHelper::formatNumber($squawk['replies']) }}
                    @endif
                </div>
                <div class="col-2">
                    <i data-feather="repeat" class="resize-icon"></i>
                    @if($squawk['resquawks'] > 0)
                        {{ \App\Helpers\NumberHelper::formatNumber($squawk['resquawks']) }}
                    @endif
                </div>
                <div class="col-2">
                    <i data-feather="heart" class="resize-icon"></i>
                    @if($squawk['likes'] > 0)
                        {{ \App\Helpers\NumberHelper::formatNumber($squawk['likes']) }}
                    @endif
                </div>
                <div class="col-2">
                    <i data-feather="share-2" class="resize-icon"></i>
                </div>
            </div>
        </div>
    </div>
@endforeach
