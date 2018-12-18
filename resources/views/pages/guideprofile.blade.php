@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 15px;">

    <div style="width: 100%; height: 75vh; margin: 0; padding: 0;">
        <img style="width:100%; height: 75vh" class="group list-group-image img-fluid"
             src="/storage/profileheaders/{{ $userprofile->profileheader }}">
    </div>
    <br>

    <div class="row">

        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12" id="profile_miniheader">
                    <div class="styled-heading">
                        <h3>{{ $user->name }}</h3>
                    </div>
                    <i>{{ $userprofile->hometown }}</i><br>
                    <p> Tourguide since {{ $userprofile->created_at }}</p>
                </div>
            </div>
            <br>
            {!! $userprofile->description !!}
        </div>
        <div class="col-md-4">
            <div class="card bg-faded" id="sidebar">
                <h3>Guide details</h3>
                <p>
                    <img style="width:100%; height: 350px;" class="group list-group-image img-fluid"
                         src="/storage/profilepics/{{$userprofile->profilepic}}">
                <div class="form-group">
                    <input type="submit" name="btnSubmit" class="btnContact" value="Message"/>
                </div>
                <div class="form-group">
                    <input type="submit" name="btnSubmit" class="btnContact" value="View My Tours"/>
                </div>
                LIVES IN<br>
                {{ $userprofile->hometown }}<br>
                LANGUAGE(S) SPOKEN:<br>
                {{ $userprofile->languages }}<br>
                MEMBER SINCE<br>
                {{ $userprofile->created_at }}<br>
                </p>        <br><br>
                <p>
                <ul class="social-icon">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
                </p>
            </div>

        </div>
    </div>
</div>
    <br>
@endsection
