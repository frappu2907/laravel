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
                <div class="card-header"><h1>Add</h1></div>
                <div class="card-body">
                <h1>{{$ad->title}}</h1>
        <h3>{{$ad->compagny_name}}</h3>
        <br>
        <h5>{{$ad->location}}</h5>
        <p>{{$ad->description}}</p>
        <p>{{$ad->experience}}</p>
        <p>{{$ad->email}}</p>
        <br>
        <div class="col-md-8 offset-md-4">
            <form action="/admin/ad/delete/{{$ad->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Delete.</button>
        </form>
        </div>
        <div class="col-md-8 offset-md-4">
        <a href="/admin/ad/edit/{{$ad->id}}"><button class="btn btn-warning" id="btn">Update</button></a>
        </div>
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
