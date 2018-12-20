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
                <div class="col-md-12" id="profile_miniheader" style="text-align:center">
                    <div class="styled-heading" style="margin-bottom: 10px">
                        <h3>Guide profile of <b>{{ $user->name }}</b></h3>
                    </div><br>
                    <i>Get to know the person behind the tours. <br>
                    View all tours the guide has to offer and the or message the guide for inquiries. </i>
                </div>
            </div>
            
            <p style="padding: 10px;">
            {!! $userprofile->description !!}</p>
        </div>
        <div class="col-md-4">
            <div class="card bg-faded" id="sidebar">
                <h3>Guide details</h3>
                <p>
                    <img style="width:50%; height: 50%;" class="group list-group-image img-fluid"
                         src="/storage/profilepics/{{$userprofile->profilepic}}">
                <div class="form-group">
                    <input type="submit" name="btnSubmit" class="btnContact" value="Message" onclick="location.href='/booktour';"/>
                </div>
                <div class="form-group">
                        <a href="/pages/tourtemplate/{{$user->id}}"><input type="submit" name="btnSubmit" class="btnContact" value="View All My Tours"/></a>
                </div><br>
                <h5>Overview</h5>
                <b>SUMMARY:</b>
                <p>{{ $userprofile->shortdescription }}</p>
                <b>GUIDENAME</b>
                <p>{{ $user->name }}</p>
                <b>LIVES IN</b>
                <p>{{ $userprofile->hometown }}</p>
                <b>LANGUAGE(S) SPOKEN:</b>
                <p>{{ $userprofile->languages }}</p>
                <b>MEMBER SINCE</b>
                <p>{{ $userprofile->created_at }}</p>
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
