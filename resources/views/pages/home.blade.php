@extends('layouts.main-layout')

@section('home-content')
    <div class="container second-width">
        <div class="card mx-auto mb-5">
            <div class="card-body">
                <div class="follow-row mt-3">
                    <div class="follow-img">
                        <img class="rounded-circle" width="40" src="{{ asset('images/fake-avatars/02.png') }}" alt="user avatar"/>
                    </div>
                    <div class="follow-name width-full">
                        <label for="homeSquawkContent"></label>
                        <textarea id="homeSquawkContent" class="form-control" rows="2" placeholder="What's up ?"></textarea>
                    </div>
                </div>

                <div class="container row mt-3 home-squawk">
                    <div class="col-3">
                        <i data-feather="image" class="action-icon"></i>
                        <i data-feather="gift" class="action-icon"></i>
                        <i data-feather="smile"></i>
                    </div>
                    <div class="col-9 d-flex justify-content-end">
                        <span class="numb-chara">
                            <span id="numberOfCharacter">280</span>/280
                        </span>
                        <a href="#" class="btn btn-dark rounded-pill custom-w-create-2">Squawk</a>
                    </div>
                </div>
            </div>
        </div>


        @include('shared-layouts.order-squawks')

        @include('shared-layouts.squawk-template')
    </div>
@endsection
