@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $tourcategory->categoryname }}</h1>
        <hr>
        <br><br>
        <div class="card padding15">
            <h3 style="color: black;">{!!   $tourcategory->categoryname !!}</h3>
            <hr>
            {!! $tourcategory->categorydescription !!}
        </div>
        <small>Created {{ $tourcategory->created_at->format('d/m/Y') }}</small>
        <hr>
        <a href="/cities" class="btn btn-success">Back</a>
        @if(!Auth::guest())
            <a href="/tourcategories/{{$tourcategory->id}}/edit" class="btn btn-primary">Edit</a>
            {!! Form::open(['action' => ['TourCategoryController@destroy', $tourcategory->id], 'method' => 'POST', 'class' => 'float-right']) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
        @endif
    </div>
@endsection