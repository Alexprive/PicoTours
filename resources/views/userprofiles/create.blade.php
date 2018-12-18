@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Userprofile</h1>
        {!! Form::open(['action' => 'UserProfileController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

        <div class="form-group">
            {{Form::label('hometown', 'Hometown')}}
            {{Form::text('hometown', '', ['class' => 'form-control', 'placeholder' => 'Hometown'])}}
        </div>
        <div class="form-group">
            {{Form::label('languages', 'Languages')}}
            {{Form::text('languages', '', ['class' => 'form-control', 'placeholder' => 'Spoken languages'])}}
        </div>
        <div class="form-group">
            {{Form::label('shortdescription', 'Short description')}}
            {{Form::text('shortdescription', '', ['class' => 'form-control', 'placeholder' => 'Short description'])}}
        </div>
        <div class="form-group">
            {{Form::label('mobilephone', 'Mobilephone')}}
            {{Form::text('mobilephone', '', ['class' => 'form-control', 'placeholder' => 'Mobile phone number'])}}
        </div>

        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('profilepic', 'Profile picture')}}
            {{Form::file('profilepic')}}
        </div>
        <div class="form-group">
            {{Form::label('headerpic', 'Profile header picture')}}
            {{Form::file('headerpic')}}
        </div>
        {{Form::submit('Add profile', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
    <br>
    <br>
@endsection