@extends('layouts.app')
<link href="{{ mix('/css/app.css') }}" rel="stylesheet">



@section('content')

    @include ('inc.alt_slider')
    @include ('inc.header')
    @include ('inc.featuredcities')    
    @include ('inc.parallax_mini')
    @include ('inc.featuredguides')
    @include ('inc.contact')
    @include ('inc.footer')

@endsection