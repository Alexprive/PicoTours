@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add category</h1>
        {!! Form::open(['action' => 'TourCategoryController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

        <div class="form-group">
            {{Form::label('categoryname', 'Category')}}
            {{Form::text('categoryname', '', ['class' => 'form-control', 'placeholder' => 'Category'])}}
        </div>

        <div class="form-group">
            {{Form::label('categorydescription', 'Description')}}
            {{Form::textarea('categorydescription', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>

        {{Form::submit('Add category', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection