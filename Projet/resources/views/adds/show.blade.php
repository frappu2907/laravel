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
                <div class="card-header"><h1>Add</h1></div>
                <div class="card-body">
                <h1>{{$add->title}}</h1>
        <h3>{{$add->compagny_name}}</h3>
        <br>
        <h5>{{$add->location}}</h5>
        <p>{{$add->description}}</p>
        <p>{{$add->experience}}</p>
        <p>{{$add->email}}</p>
        <br>
        <div class="col-md-8 offset-md-4">
            <form action="/adds/{{$add->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Delete.</button>
        </form>
        </div>
        <div class="col-md-8 offset-md-4">
        <a href="/user/adds/edit/{{$add->id}}"><button class="btn btn-warning" id="btn">Update</button></a>
        </div>
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
