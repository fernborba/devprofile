@extends('layouts.app')

@section('content')
<div class="container">


    <div class="d-flex justify-content-center h-100">
        <div class="image_outer_container">
            <div class="green_icon"></div>
            <div class="image_inner_container">
                <img src="/img/fernando.png">
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center h-100">
        <div class="h4">{{ $user->name }}</div>
    </div>
    <div class="row">
        <div class="justify-content-center h-100">
                <span><strong>Skills: </strong></span>
                <span class="label label-warning">HTML5/CSS</span>
                <span class="label label-info">Adobe CS 5.5</span>
                <span class="label label-info">Microsoft Office</span>
                <span class="label label-success">Windows XP, Vista, 7</span>
        </div>
    </div>
    <div class="row">
        <div>
            <p class="text-left"><strong>Bio: </strong><br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
            <br>
        </div>
    </div>


</div>
@endsection
