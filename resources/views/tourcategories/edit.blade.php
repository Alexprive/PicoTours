@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Category</h1>
        {!! Form::open(['action' => ['TourCategoryController@update', $tourcategory->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('catergoryname', 'Category')}}
            {{Form::text('categoryname', $tourcategory->categoryname, ['class' => 'form-control', 'placeholder' => 'Category'])}}
        </div>

        <div class="form-group">
            {{Form::label('categorydescription', 'Description')}}
            {{Form::textarea('categorydescription', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Edit', ['class' => 'btn btn-primary'])}}

        {!! Form::close() !!}
    </div>

@endsection