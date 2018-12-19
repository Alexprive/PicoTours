@extends('layouts.app')

@section('content')
    <div class="container">
        <div style="width: 100%; height: 75vh; margin: 0; padding: 0;">
            <img style="width:100%; height: 75vh" class="group list-group-image img-fluid"
                 src="/storage/profileheaders/{{ $userprofile->profileheader }}">
        </div>

        <h2 class="center" style="color: black;">{{ $user->name }}</h2>
        <br/>
        <div class="row">
            <div class="col-md-4">
                <img style="width:250px; height:250px;" class="group list-group-image img-fluid"
                     src="/storage/profilepics/{{$userprofile->profilepic}}">
            </div>
            <div class="col-md-8">
                <div class="card padding15">
                    <h4>Hometown: {{ $userprofile->hometown }}</h4>
                    <h4>Languages: {{ $userprofile->languages }}</h4>
                    <h4>Short description: {{ $userprofile->shortdescription }}</h4>
                    <h4>Description: {!! $userprofile->description !!}</h4>
                    <h4>Mobile phone nr. : {{ $userprofile->mobilephone }}</h4>
                    <br>
                </div>
                <p>Profile created at: {{$userprofile->created_at->format('d/m/Y')}}</p>
            </div>
        </div>

            <br>
            <a href="/userprofiles" class="btn btn-success">Back</a>
            @if(!Auth::guest())
                <a href="/userprofiles/{{$userprofile->id}}/edit" class="btn btn-primary">Edit</a>
                {!! Form::open(['action' => ['UserProfileController@destroy', $userprofile->id], 'method' => 'DELETE', 'class' => 'float-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!! Form::close() !!}
            @endif

        <br/>
        <br/>
    </div>

@endsection