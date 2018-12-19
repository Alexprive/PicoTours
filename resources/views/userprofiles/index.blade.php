@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>User profiles</h1>
        @if (count($userprofiles) > 0)
            <ul class="list-group">
                @foreach ($userprofiles as $userprofile)
                    <div class="row mtop10">
                        <div class="col-md-2 col-sm-2">
                            <img style="width:150px; height: 90px; " src="/storage/profilepics/{{ $userprofile->profilepic }}">
                        </div>
                        <div class="col-md-10 col-sm-10">
                            <div class="card padding15">
                                <h3><a href="/userprofiles/{{$userprofile->id}}">{{ $userprofile->user->name}} &nbsp {{$userprofile->hometown}}</a></h3>
                                <small>Aangemeld {{$userprofile->created_at->format('d/m/Y')}}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $userprofiles->links() }}

            </ul>
        @else
            <p>No categories found!</p>
        @endif
    </div>
@endsection