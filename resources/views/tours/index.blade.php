@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tours</h1>
        @if (count($tours) > 0)
            <ul class="list-group">
                @foreach ($tours as $tour)
                    <div class="row mtop10">
                        <div class="col-md-2 col-sm-2">
                            <img style="width:100%; height:100px;" src="/storage/tour_images/{{$tour->tour_img}}">
                        </div>
                        <div class="col-md-10 col-sm-10">
                            <h3><a href="/tours/{{$tour->id}}">{{$tour->name}}</a></h3>
                            <small>Added at {{$tour->created_at->format('d/m/Y')}}</small>
                        </div>
                    </div>
                @endforeach
                {{ $tours->links() }}
            </ul>
        @else
            <p>No tours found!</p>
        @endif
    </div>

@endsection