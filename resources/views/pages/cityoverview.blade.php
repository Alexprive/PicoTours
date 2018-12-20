@extends('layouts.app')

@section('content')

    <style>
        #city_overview_sidebar {
            background: #95C3C9;
            padding: 25px;
        }

    </style>
    <div class="container">
        <div class="styled-heading" style="margin-top: 20px; margin-bottom: 20px">
            <h3>Find your sustainable city tour!</h3>
           <i>Our {{ $guidecount }} guides offer {{ $tourcount }} tours in {{ $citycount }} cities. Find tours the city
            you want to visit.</i>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card bg-faded" id="city_overview_sidebar">

                    <div class="styled-heading">
                        <h3>Select a city</h3>
                    </div>
                    <p>
                        Rediscover cities through the eyes of a local, enjoy unique tours, the local taste & much
                        more!<br><br>

                        Pico Tours is aimed at sustainable tourism, which means our guides will only serve small groups.
                        We want to make a difference in the tourism industry and facilitate the change it needs for the
                        next decades.<br><br>

                        We are happy to answer any of our questions and wish you a very good stay!
                    </p>
                    <img src="{{asset('img/worldmap.jpeg')}}" width=100%>

                    <div class="styled-heading" style="margin-bottom: 0px; margin-top: 10px;">
                        <h3>About Pico Tours</h3>
                    </div>
                    <div style="text-align: center">
                   <p> {{ $guidecount }} guides in {{ $citycount }} cities / countries.<br><br>
                    <a href="/about/" style="color: black">Learn more about Pico Tours.</a>
                    </p>
                    {{-- @include ('inc.animation') --}}
                </div>
                </div>
                <br>
                <br>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12" style="text-align:center">
                        <div class="styled-heading">
                            <h3>All City Tours</h3>
                        </div>
                        <p>Check out tours at your next destination! </p>
                        <!-- buttons will get other names but use classes for style purposes only now -->
                        <div class="form-group">
                            <br> <a href="/register"><input type="submit" name="btnSubmit" class="btnContact" value="Register As Guide"/></a>
                        </div>
                    </div>
                </div>
                <br>

                <!-- Card container with foreach, final working version -->
                <div class="container">
                    <div class="row pt-4">
                        @foreach($cities as $city)
                            <div class="col-lg-4 col-sm-6 py-2">

                                <!-- card -->
                                <div class="card h-100">
                                    <div class="card-img-top">
                                        <img style="width:100%; height:100px;"
                                             src="/storage/city_images/{{$city->city_image}}"
                                             class="img-fluid mx-auto d-block" alt="card image 1">
                                    </div>
                                    <div class="card-block d-flex flex-column">
                                        <h5 class="card-title">{{ $city->name }}</h5>
                                        <p class="text-justify">{!! $city->description !!} </p>
                                        <div class="text-center mt-auto pt-3">
                                            <a class="btn btn-info" href="/pages/citytemplate/{{$city->id}}">View All Tours<i class="fas fa-angle-double-right"></i></a></div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
