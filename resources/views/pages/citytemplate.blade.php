@extends('layouts.app')

@section('content')

    <script>
        $(document).ready(function () {
            $('#list').click(function (event) {
                event.preventDefault();
                $('#products .item').addClass('list-group-item');
            });
            $('#grid').click(function (event) {
                event.preventDefault();
                $('#products .item').removeClass('list-group-item');
                $('#products .item').addClass('grid-group-item');
            });
        });
    </script>



    <div style="width: 100%; height: 75vh; margin: 0; padding: 0;">
        <img style="width:100%; height: 75vh;" class="group list-group-image img-fluid"
             src="/storage/city_images/{{$city->city_image}}">
    </div>

    <div class="container">

        <div class="styled-heading" style="margin-bottom: 0px; margin-top: 10px">
            <h3>Find your sustainable {{ $city->name }} tour!</h3>
            Our guides offer {{ $tourcount }} tours in {{ $city->name }}. <br><br>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card bg-faded" id="sidebar">
                    <div class="styled-heading" style="margin-bottom: 0px">
                        <h3>Local guides in {{ $city->name }}</h3>
                    </div>
                    <div class="featured_cityguides" style="text-align:center">
                        <i>There are {{ $guidecount }} local guides<br></i>
                       
                        <!-- <a href="#"><img title="profile image" class="img-circle img-responsive"
                                         src="{{asset('img/matthijs.png')}}" width=30%></a>
                        <a href="#"><img title="profile image" class="img-circle img-responsive"
                                         src="{{asset('img/pasfoto-sven.png')}}" width=30%></a>
                        <a href="#"><img title="profile image" class="img-circle img-responsive"
                                         src="{{asset('img/matthijs.png')}}" width=30%></a><br>
                        <a href="#"><img title="profile image" class="img-circle img-responsive"
                                         src="{{asset('img/pasfoto-sven.png')}}" width=30%></a>
                        <a href="#"><img title="profile image" class="img-circle img-responsive"
                                         src="{{asset('img/matthijs.png')}}" width=30%></a>
                        <a href="#"><img title="profile image" class="img-circle img-responsive"
                                         src="{{asset('img/pasfoto-sven.png')}}" width=30%></a>-->

                        <div class="cta" style="text-align:center"><br>
                            <input type="submit" name="btnSubmit" class="btnContact" value="Meet our Guides"/>
                        </div>
                    </div>

                    <div class="styled-heading" style="margin-bottom: 0px;">
                        <br>
                        <h3>{{ $city->name }} Private Tours</h3>
                    </div>
                    <p>{!! $city->description !!}</p>
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


            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12" style="text-align:center">
                        <div class="styled-heading" style="margin-bottom: 0px">
                            <h3>{{ $city->name }} City Tours</h3>
                        </div>
                        <p> Book now for your next trip! </p>

                    @include ('inc.categorytags')

                    <!-- buttons will get other names but use classes for style purposes only now -->
                        <div class="form-group">
                            <br> <input type="submit" name="btnSubmit" class="btnContact" value="All City Tours"/>
                        </div>
                    </div>
                </div>
                <br>
            <div>

                   


            </div>    
            <br>
            
                        <div class="container">

                    @foreach($tours as $tour)
                        <div id="products" class="row view-group">
                            <div class="item col-xs-4 col-lg-4">
                                <div class="thumbnail card">
                                    <div class="img-event">
                                        <img style="width:100%; height:100px;" class="group list-group-image img-fluid"
                                             src="/storage/tour_images/{{ $tour->tour_img }}">
                                    </div>
                                    <div class="caption card-body">
                                        <h4 class="group card-title inner list-group-item-heading">
                                            {{ $tour->name }}</h4>
                                        <p class="group inner list-group-item-text">
                                            {!! $tour->tourdescription !!}</p>
                                        <div class="row">
                                            <div class="col-xs-12 col-md-12" style="text-align:center">
                                                <a class="btn btn-info" href="/pages/tourdetails/{{$tour->id}}">View All Tours</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection