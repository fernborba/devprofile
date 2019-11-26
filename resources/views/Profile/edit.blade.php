@extends('layouts.app', ['page' => __('User Profile'), 'pageSlug' => 'profile'])

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h5 class="title">{{ _('Edit Profile') }}</h5>
            </div>
            <!-- <form method="post" action="{{ route('profile.update', ['user' => auth()->user()->id]) }}" autocomplete="off" enctype="multipart/form-data">
            -->
                <form action="/profile/{{ auth()->user()->id }}" enctype="multipart/form-data" method="post">

                <div class="card-body">
                    @csrf
                    @method('PATCH')

                    @include('alerts.success')

                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <label>{{ _('Name') }}</label>
                        <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                               placeholder="{{ _('Name') }}"
                               value="{{ old('name', auth()->user()->name) }}">
                        @include('alerts.feedback', ['field' => 'name'])
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <label>{{ _('Email address') }}</label>
                        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                               placeholder="{{ _('Email address') }}"
                               value="{{ old('email', auth()->user()->email) }}">
                        @include('alerts.feedback', ['field' => 'email'])
                    </div>

                    <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                        <label>{{ _('Title') }}</label>
                        <input type="text" name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                               placeholder="{{ _('Title') }}"
                               value="{{ old('title', auth()->user()->profile->title) }}">
                        @include('alerts.feedback', ['field' => 'title'])
                    </div>

                    <div class="form-group{{ $errors->has('place') ? ' has-danger' : '' }}">
                        <label>{{ _('Place') }}</label>
                        <input type="text" name="place" class="form-control{{ $errors->has('place') ? ' is-invalid' : '' }}"
                               placeholder="{{ _('Place') }}"
                               value="{{ old('place', auth()->user()->profile->place) }}">
                        @include('alerts.feedback', ['field' => 'place'])
                    </div>

                    <div class="form-group{{ $errors->has('about') ? ' has-danger' : '' }}">
                        <label>{{ _('About') }}</label>
                        <input type="text" name="about" class="form-control{{ $errors->has('about') ? ' is-invalid' : '' }}"
                               placeholder="{{ _('About') }}"
                               value="{{ old('about', auth()->user()->profile->about) }}">
                        @include('alerts.feedback', ['field' => 'about'])
                    </div>

                    <div class="form-group{{ $errors->has('linkfacebook') ? ' has-danger' : '' }}">
                        <label>{{ _('Facebook link') }}</label>

                        <input type="text" name="linkfacebook" class="form-control{{ $errors->has('linkfacebook') ? ' is-invalid' : '' }}"
                               placeholder="{{ _('Facebook link') }}"
                               value="{{ old('linkfacebook', auth()->user()->profile->linkfacebook) }}">

                        @include('alerts.feedback', ['field' => 'linkfacebook'])
                    </div>

                    <div class="form-group{{ $errors->has('linktwitter') ? ' has-danger' : '' }}">
                        <label>{{ _('Twitter  link') }}</label>
                        <input type="text" name="linktwitter" class="form-control{{ $errors->has('linktwitter') ? ' is-invalid' : '' }}"
                               placeholder="{{ _('Twitter link') }}"
                               value="{{ old('linktwitter', auth()->user()->profile->linktwitter) }}">
                        @include('alerts.feedback', ['field' => 'linktwitter'])
                    </div>

                    <div class="form-group{{ $errors->has('linklinkedin') ? ' has-danger' : '' }}">
                        <label>{{ _('LinkedIn link') }}</label>
                        <input type="text" name="linklinkedin" class="form-control{{ $errors->has('linklinkedin') ? ' is-invalid' : '' }}"
                               placeholder="{{ _('Linkedin link') }}"
                               value="{{ old('linklinkedin', auth()->user()->profile->linklinkedin) }}">
                        @include('alerts.feedback', ['field' => 'linklinkedin'])
                    </div>




                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-fill btn-primary">{{ _('Save') }}</button>
                </div>
            </form>
        </div>

        <div class="card">
            <div class="card-header">
                <h5 class="title">{{ _('Password') }}</h5>
            </div>
            <form method="post" action="{{ route('profile.password') }}" autocomplete="off">
                <div class="card-body">
                    @csrf
                    @method('put')

                    @include('alerts.success', ['key' => 'password_status'])

                    <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                        <label>{{ __('Current Password') }}</label>
                        <input type="password" name="old_password" class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('Current Password') }}" value="" required>
                        @include('alerts.feedback', ['field' => 'old_password'])
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                        <label>{{ __('New Password') }}</label>
                        <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('New Password') }}" value="" required>
                        @include('alerts.feedback', ['field' => 'password'])
                    </div>
                    <div class="form-group">
                        <label>{{ __('Confirm New Password') }}</label>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirm New Password') }}" value="" required>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-fill btn-primary">{{ _('Change password') }}</button>
                </div>
            </form>
        </div>
    </div>

</div>


@endsection
