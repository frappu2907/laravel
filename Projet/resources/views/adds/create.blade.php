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
                        <li><a href="/user/profile/{{Auth::user()->id}}">Update Profile</li></a>
                        <li>
                            <form action="/profile/{{Auth::user()->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete Your Account</button>
                        </form>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col" id="dashboard">
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Create a new Add</h1></div>
                <div class="card-body">
                    <form action="/adds" method="POST">
                    <input type="hidden" name="id">
                    @csrf
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Title</label>
                    </div>
                    <div class="col-md-12">
                    <input class="form-control" type="text" name="title">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Compagny name</label>
                    </div>
                    <div class="col-md-12">
                    <input  class="form-control" type="text" name="compagny_name">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Job description</label>
                    </div>
                    <div class="col-md-12">
                    <input class="form-control" type="text" name="description">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Location</label>
                    </div>
                    <div class="col-md-12">
                    <input class="form-control" type="text" name="location">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Experience</label>
                    </div>
                    <div class="col-md-12">
                    <input class="form-control" type="text" name="experience">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Email</label>
                    </div>
                    <div class="col-md-12">
                    <input class="form-control" type="email" name="email">
                    </div>
                    <div class="col-md-8 offset-5">
                    <input class="btn btn-primary" type="submit" value="Create add" name="btn" id="btn">
                    </div>
                    </form>
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

