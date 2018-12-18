@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin Dashboard</div>
                    <table border="0" class="center" style="margin-top: 20px;">
                        <tr>
                            <td><a href="/cities/create" class="btn btn-primary">Add a City</a></td>
                            <td><a href="/tourcategories/create" class="btn btn-primary">Add a Categorie</a></td>
                            <td><a href="/tours/create" class="btn btn-primary">Create a Tour</a></td>
                        </tr>
                    </table>
                    <table border="0" class="center"  style="margin-top: 20px;">
                        <tr>
                            <td><a href="#" class="btn btn-danger">Guide overview</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

                    
@endsection