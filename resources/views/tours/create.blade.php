@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center top20">Create a Tour!</h1>
        <div class="formdiv">
            {!! Form::open(['action' => 'TourController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('name', 'Name')}}
                {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name of this tour...'])}}
            </div>
            <div class="form-group">
                {{Form::label('city_id', 'City')}}
                {{ Form::select('city_id', $city, NULL, ['id' => 'city_id', 'class' => 'form-control', 'placeholder' => 'Select your city']) }}
            </div>

            <div class="form-group">
                {{Form::label('tourcategory_id', 'Category')}}
                {{ Form::select('tourcategory_id', $tourcategories, NULL, ['id' => 'tourcategorie_id', 'class' => 'form-control', 'placeholder' => 'Pick a category for this tour']) }}
            </div>
            <div class="form-group">
                {{Form::label('tourstartlocation', 'Startlocation')}}
                {{Form::text('tourstartlocation', '', ['class' => 'form-control', 'placeholder' => 'Start location'])}}
            </div>
            <div class="form-group">
                {{Form::label('tourdeparturetime', 'Departuretime')}}
                {{Form::text('tourdeparturetime', '', ['class' => 'form-control', 'placeholder' => 'Departure time'])}}
            </div>
            <div class="form-group">
                {{Form::label('tourduration', 'Duration')}}
                {{Form::text('tourduration', '', ['class' => 'form-control', 'placeholder' => 'Duration'])}}
            </div>
            <div class="form-group">
                {{Form::label('tourprice', 'Price')}}
                {{Form::text('tourprice', '', ['class' => 'form-control textarea', 'placeholder' => 'Price for this tour..'])}}
            </div>
            <div class="form-group">
                {{Form::label('tourshortdescription', 'Shortdescription')}}
                {{Form::text('tourshortdescription', '', ['class' => 'form-control textarea', 'placeholder' => 'Short description for this tour..'])}}
            </div>
            <div class="form-group">
                {{Form::label('tourhighlights1', 'Highlights')}}
                {{Form::text('tourhighlights1', '', ['class' => 'form-control textarea', 'placeholder' => 'Highlights for this tour..'])}}
            </div>
            <div class="form-group">
                {{Form::label('tourhighlights2', 'Highlights')}}
                {{Form::text('tourhighlights2', '', ['class' => 'form-control textarea', 'placeholder' => 'Highlights for this tour..'])}}
            </div>
            <div class="form-group">
                {{Form::label('tourhighlights3', 'Highlights')}}
                {{Form::text('tourhighlights3', '', ['class' => 'form-control textarea', 'placeholder' => 'Highlights for this tour..'])}}
            </div>
            <div class="form-group">
                {{Form::label('whatsinc1', 'What is included')}}
                {{Form::text('whatsinc1', '', ['class' => 'form-control textarea', 'placeholder' => 'What is included for this tour..'])}}
            </div>
            <div class="form-group">
                {{Form::label('whatsinc2', 'What is included')}}
                {{Form::text('whatsinc2', '', ['class' => 'form-control textarea', 'placeholder' => 'What is included for this tour..'])}}
            </div>
            <div class="form-group">
                {{Form::label('whatsinc3', 'What is included')}}
                {{Form::text('whatsinc3', '', ['class' => 'form-control textarea', 'placeholder' => 'What is included for this tour..'])}}
            </div>
            <div class="form-group">
                {{Form::label('tourdescription', 'Description')}}
                {{Form::textarea('tourdescription', '', ['id' => 'article-ckeditor', 'class' => 'form-control textarea', 'placeholder' => 'Description for this tour..'])}}
            </div>
            <div class="form-group">
                {{Form::label('tour_img', 'Tour image:')}}
                {{Form::file('tour_img')}}
            </div>
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
    <br>
    <br>
@endsection
