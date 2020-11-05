@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<body>
    <div class="container-fluid p-o" id="fullHeight">
        <div class="row" id="fullHeight">
            <div class="col-2" id="side">
                <div class="side-bar" id="sidebar">
                    <div>
                        <h5 class="title_dashboard">Dashboard</h5>
                    </div>
                    <ul class="listDashboard">
                        <li><a href="/user">Home</a></li>
                        <li><a href="/user/adds">List adds</li></a>
                        <li><a href="/user/adds/create">Create add</li></a> 
                        <li><a href="">List users</li></a>
                        <li><a href="">Create user</li></a> 
                    </ul>
                </div>
            </div>
            <div class="col" id="dashboard">
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Update Add</h1></div>
                <div class="card-body">
                    <form action="/update" method="POST">
                    <input type="hidden" name="id" value="{{$add->id}}">
                    @csrf
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Title</label>
                    </div>
                    <div class="col-md-12">
                    <input class="form-control" type="text" name="UpdateTitle" value="{{$add->title}}">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Compagny name</label>
                    </div>
                    <div class="col-md-12">
                    <input  class="form-control" type="text" name="UpdateCompagny_name" value="{{$add->compagny_name}}">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Job description</label>
                    </div>
                    <div class="col-md-12">
                    <input class="form-control" type="text" name="UpdateDescription" value="{{$add->description}}">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Location</label>
                    </div>
                    <div class="col-md-12">
                    <input class="form-control" type="text" name="UpdateLocation" value="{{$add->location}}">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Experience</label>
                    </div>
                    <div class="col-md-12">
                    <input class="form-control" type="text" name="UpdateExperience" value="{{$add->experience}}">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Email</label>
                    </div>
                    <div class="col-md-12">
                    <input class="form-control" type="email" name="UpdateEmail" value="{{$add->email}}">
                    </div>
                    <div class="col-md-8 offset-md-4">
                    <input class="btn btn-warning" type="submit" value="Update" name="btn" id="btn">
                    </div>
                    </form>
                    <a href="/user/adds">back to product list</a>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection