@extends('layouts.app', ['page' => __('User Profile'), 'pageSlug' => 'profile'])

@section('content')
    <div class="row">
        <div class="col-md-8 offset-1">
            <nav class="nav">
                <a class="nav-link active" href="/profile/{{{ auth()->user()->id }}}/edit">Edit profile</a>



            </nav>
            @include('alerts.success')
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-1">

            <div class="card card-user">

                <div class="card-body">
                    <p class="card-text">
                        <div class="author">
                            <div class="block block-one"></div>
                            <div class="block block-two"></div>
                            <div class="block block-three"></div>
                            <div class="block block-four"></div>
                            <a href="#">
                                <img class="avatar" src="{{ asset('white') }}/img/emilyz.jpg" alt="">
                                <h5 class="title">{{ auth()->user()->name }}</h5>
                            </a>
                            <h6>{{ $user->profile->title ?? 'Current title' }}</h6>
                            <p class="text-info">{{ $user->profile->place ?? 'Current place' }}</p>
                        </div>
                    </p>
                <div class="card-description">
                    {{ $user->profile->about ?? 'Every step you take toward a goal may seem insignificant, but you must have confidence in your destination. Be clear about your goal so you know that the steps you\'re taking will help you end up where you ultimately want to be.' }}
                </div>
            </div>
            <div class="card-footer">
                <div class="button-container">

                    @if ($user->profile->linkfacebook)
                        <button class="btn btn-icon btn-round btn-facebook">
                            <i class="fab fa-facebook"></i>
                        </button>
                    @endif
                    @if ($user->profile->linktwitter)
                        <button class="btn btn-icon btn-round btn-twitter">
                            <i class="fab fa-twitter"></i>
                        </button>
                    @endif
                    @if ($user->profile->linklinkedin)
                        <button class="btn btn-icon btn-round btn-linkedin">
                            <i class="fab fa-linkedin"></i>
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
