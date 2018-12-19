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
                    <div class="col-md-12" id="profile_miniheader" style="text-align: center; margin-top: 15px; padding: 15px;">
                        <div class="styled-heading" style="padding: 15px; margin-bottom: 0px;">
                            <h3>{{ $tour->name }} in {{$city->name}}</h3>
                        </div>
                        <i>This is the detailpage for {{ $tour->name }} in {{ $city->name }}. <br>
                            Book and check out additional details on the right.</i>
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
                    <h5><b>Tour details</b></h5>
                    <p>
                        <img style="width:50%; height: 50%" class="group list-group-image img-fluid"
                             src="/storage/profilepics/{{$guide->profilepic}}">
                             <div class="form-group">
                                    <a href="/pages/guideprofile/{{$user->id}}"><input type="submit" name="btnSubmit" class="btnContact" value="View Guide Profile"/></a>
                                </div>
                             <div class="form-group">
                        <input type="submit" name="btnSubmit" class="btnContact" value="Book This Tour"/>
                    </div>
                    <div class="form-group">
                            <a href="/pages/tourtemplate/{{$user->id}}">
                                <input type="submit" name="btnSubmit" class="btnContact" value="View All My Tours"/>
                            </a>
                    </div>
                    
                    <br>
                    <h5>Overview</h5>
                    <b>TOUR NAME:</b>
                    <p>{{ $tour->name }}</p>
                    <b>GUIDE NAME:</b>
                    <p>{{ $user->name }}</p>
                    <b>TOUR CATEGORY:</b>
                    <p>{{ $category->categoryname }}</p>
                    <b>START LOCATION</b>
                    <p>{{ $tour->tourstartlocation }}</p>
                    <b>PRICE</b>
                    <p>{{ $tour->tourprice }}</p>
                    <b>LANGUAGE(S) SPOKEN:</b>
                    <p>{{ $guide->languages }}</p>
                    <b>MEMBER SINCE</b>
                    <p>{{ $guide->created_at }}</p>
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
        <br>
    </div>
@endsection