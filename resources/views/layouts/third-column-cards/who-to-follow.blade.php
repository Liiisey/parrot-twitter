<div class="container">
    <div class="card w-100 mt-4">
        <div class="card-header">Who to follow</div>
        <ul class="list-group list-group-flush">
            @foreach($whoToFollow as $who)
            <li class="list-group-item custom-li">
                <div class="follow-row" style="max-height: 40px;">
                    <div class="follow-img">
                        @if($who['avatar'])
                            <img class="rounded-circle" width="40" src="{{ asset('images/fake-avatars/'. $who['avatar']) }}" alt="user avatar"/>
                        @else
                            <img class="rounded-circle" width="40" src="{{ asset('images/placeholder-user.png') }}" alt="user avatar"/>
                        @endif
                    </div>
                    <div class="follow-name width-full">
                        <div>
                            <div style="font-weight: bold; height: 20px;">
                                <span class="sm-weight-bold">{{ $who['profilename'] }}</span>
                                @if($who['certified'])
                                    @if($who['company'])
                                    <span>
                                        <i data-feather="check-square" class="resize-certif-icon"></i>
                                    </span>
                                    @else
                                     <span>
                                        <i data-feather="check-circle" class="resize-certif-icon"></i>
                                    </span>
                                    @endif
                                @endif
                            </div>
                            <div class="card-subtitle text-muted text-small">{{ "@" . $who['username'] }}</div>
                        </div>
                        <div class="d-grid gap-2 follow-btn-width">
                            <button class="btn btn-dark rounded-pill" type="button" data-bs-toggle="modal" data-bs-target="#squawkModal">Follow</button>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
