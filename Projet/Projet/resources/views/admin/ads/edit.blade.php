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
                        <li><a href="/">CraigList</a></li>
                        <li><a href="/admin">List Users</a></li>
                        <li><a href="/admin/user/create">Create User</li></a>
                        <li><a href="/admin/ads">List All Ads</li></a>
                        <li><a href="/admin/create/ad">Create Ad</li></a> 
                    </ul>
                </div>
            </div>
            <div class="col" id="dashboard">
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Update Ad</h1></div>
                <div class="card-body">
                    <form action="/admin/ad/update" method="POST">
                    <input type="hidden" name="id" value="{{$ad->id}}">
                    @csrf
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Title</label>
                    </div>
                    <div class="col-md-12">
                    <input class="form-control" type="text" name="UpdateTitle" value="{{$ad->title}}">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Compagny name</label>
                    </div>
                    <div class="col-md-12">
                    <input  class="form-control" type="text" name="UpdateCompagny_name" value="{{$ad->compagny_name}}">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Job description</label>
                    </div>
                    <div class="col-md-12">
                    <input class="form-control" type="text" name="UpdateDescription" value="{{$ad->description}}">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Location</label>
                    </div>
                    <div class="col-md-12">
                    <input class="form-control" type="text" name="UpdateLocation" value="{{$ad->location}}">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Experience</label>
                    </div>
                    <div class="col-md-12">
                    <input class="form-control" type="text" name="UpdateExperience" value="{{$ad->experience}}">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Email</label>
                    </div>
                    <div class="col-md-12">
                    <input class="form-control" type="email" name="UpdateEmail" value="{{$ad->email}}">
                    </div>
                    <div class="col-md-8 offset-md-4">
                    <input class="btn btn-warning" type="submit" value="Update" name="btn" id="btn">
                    </div>
                    </form>
                    <a href="/admin/ads">back to product list</a>
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