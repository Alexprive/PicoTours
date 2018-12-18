@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body"><a href="{{url('admin/routes')}}">Admin</a></div>

                    <table border="0" class="center" style="margin-top: 20px;">
                        <tr>
                            <td><a href="/cities/create" class="btn btn-primary">Add a City</a></td>
                            <td><a href="/tourcategories/create" class="btn btn-primary">Add a Categorie</a></td>
                            <td><a href="/tours/create" class="btn btn-primary">Create a Tour</a></td>
                        </tr>
                    </table>

                    @if(!$hasProfile)
                    <table border="0" class="center"  style="margin-top: 20px;">
                        <tr>
                            <td><a href="/userprofiles/create" class="btn btn-danger">Create userprofile page</a></td>
                        </tr>
                    </table>
                    @endif

                    @if($hasProfile)
                        <table border="0" class="center"  style="margin-top: 20px;">
                            <tr>
                                <td><a href="/userprofiles/{{auth::user()->id}}/edit" class="btn btn-danger">Edit userprofile page</a></td>
                            </tr>
                        </table>
                    @endif

                    <hr>
                    <h2 class="center" style="color: black;">My Tours:</h2>
                    <hr>

                    @foreach ($tours as $tour)
                        <div class="row top">
                            <div class="col-md-12 col-sm-12">
                                <div class="card padding15">
                                    <h3><a href="/tours/{{$tour->id}}">{{$tour->name}}</a></h3>
                                    <small>Added at {{$tour->created_at}}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
