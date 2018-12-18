@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 15px;">
        <div style="width: 100%; height: 75vh; margin: 0; padding: 0;">
            <img style="width:100%; height: 75vh" class="group list-group-image img-fluid"
                 src="/storage/tour_images/{{ $tour->tour_img }}">
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12" id="profile_miniheader">
                        <div class="styled-heading">
                            <h3>{{ $tour->name }} in {{$city->name}}</h3>
                        </div>
                        <i>Tour location: {{ $city->name }}</i><br>
                        <p> SHORT TOUR DESCRIPTION </p>
                    </div>
                </div>
                <br>
                <h5>Summary</h5>
                <p>{{ $tour->tourshortdescription }}</p>

                <p><h5>Highlights:</h5><br>
                <ul>
                    <li>{{$tour->tourhighlights1}}</li>
                    <li>{{$tour->tourhighlights2}}</li>
                    <li>{{$tour->tourhighlights3}}</li>
                </ul></p>

                <p><h5>What’s Included:</h5><br>
                <ul>
                    <li>{{ $tour->whatsinc1 }}</li>
                    <li>{{ $tour->whatsinc2 }}</li>
                    <li>{{ $tour->whatsinc3 }}</li>
                </ul>
                </p>

                <h5>Description:</h5><br>
                <p>{!! $tour->tourdescription !!}</p>
            </div>

            <div class="col-md-4">
                <div class="card bg-faded" id="sidebar" style="margin-top: 15px;">
                    <h3>Tour details</h3>
                    <p>
                        <img style="width:100%; height: 350px;" class="group list-group-image img-fluid"
                             src="/storage/profilepics/{{$guide->profilepic}}">
                    <div class="form-group">
                        <input type="submit" name="btnSubmit" class="btnContact" value="Book Tour"/>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="btnSubmit" class="btnContact" value="View My Tours"/>
                    </div>
                    TOUR NAME:<br>
                    {{ $tour->name }}<br>
                    GUIDE NAME:<br>
                    {{ $user->name }}<br>
                    TOUR CATEGORY:<br>
                    {{ $category->categoryname }}<br>
                    START LOCATION<br>
                    {{ $tour->tourstartlocation }}<br>
                    PRICE<br>
                    {{ $tour->tourprice }}<br>
                    LANGUAGE(S) SPOKEN:<br>
                    {{ $guide->languages }}<br>
                    MEMBER SINCE<br>
                    {{ $guide->created_at }}<br>
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
@endsection