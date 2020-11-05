@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid p-o" id="fullHeight">
        <div class="row" id="fullHeight">
            <div class="col-2" id="side">
                <div class="side-bar" id="sidebar">
                    <div>
                        <h5 class="title_dashboard">Dashboard</h5>
                    </div>
                    <ul class="listDashboard">
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
