@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="center" style="color: black;">{{ $tours->name }}</h2>
        <br/>
        <div class="card padding15">
            <h4>Takes place in: {!!   $city->name !!} </h4>
            <h4>Tourtype: {!! $tourcategories->categoryname !!}</h4>
            <h4>Startlocation: {!! $tours->tourstartlocation !!}</h4>
            <h4>Departure time: {!! $tours->tourdeparturetime !!}</h4>
            <h4>Duration: {!! $tours->tourduration !!}</h4>
            <h4>Short description: {!! $tours->tourshortdescriptionm !!}</h4>
            <h4>Highlights: {!! $tours->tourhighlights1 !!}</h4>
            <h4>Highlights: {!! $tours->tourhighlights2 !!}</h4>
            <h4>Highlights: {!! $tours->tourhighlights3 !!}</h4>
            <h4>What is included: {!! $tours->whatsinc1 !!}</h4>
            <h4>What is included: {!! $tours->whatsinc2 !!}</h4>
            <h4>What is included: {!! $tours->whatsinc3 !!}</h4>
            <h4>Price: {!! $tours->tourprice !!}</h4>
            <h4>Description:</h4>
            <b> {!! $tours->tourdescription !!}</b>
            <br>
        </div>
        <p>Tour created at: {{$tours->created_at->format('d/m/Y')}}</p>
        <br>
        <a href="/tours" class="btn btn-success">Back</a>
        @if(!Auth::guest())
            @if (Auth::user()->id == $tours->user_id)
                <a href="/tours/{{$tours->id}}/edit" class="btn btn-primary">Bewerken</a>
                {!! Form::open(['action' => ['TourController@destroy', $tours->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!! Form::close() !!}
            @endif
        @endif
        <br/>
        <br/>
        <img style="width:100%" src="/storage/tour_images/{{$tours->tour_img}}">
    </div>

@endsection