@extends('layouts.app')

@section('content')




<div class="container">
        <h1>Book tour</h1>
        {!! Form::open(['action' => 'PagesController@booktour', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('Name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>

        <div class="form-group">
                {{Form::label('email', 'E-mail')}}
                {{Form::text('E-mail', '', ['class' => 'form-control', 'placeholder' => 'E-mail'])}}
            </div>

        <div class="form-group">
                    {{Form::label('Date', 'Date')}}
                    {{Form::text('Date', '', ['class' => 'form-control', 'placeholder' => 'Date'])}}
                </div>

        <div class="form-group">
                        {{Form::label('time', 'Time')}}
                        {{Form::text('Time', '', ['class' => 'form-control', 'placeholder' => 'Time'])}}
                    </div>

                    <div class="form-group">
                            {{Form::label('people', 'Number of people')}}
                            {{Form::text('people', '', ['class' => 'form-control', 'placeholder' => 'Number of people'])}}
                        </div>
        

        <div class="form-group">
            {{Form::label('questions', 'Additional information and questions')}}
            {{Form::textarea('questions', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Additional information and questions'])}}
        </div>

        {{Form::submit('Book Tour', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
       





















@endsection

