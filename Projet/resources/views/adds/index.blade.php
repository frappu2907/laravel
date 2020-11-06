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
            <div id="changeWidth">
    <div class="justify-content-center">
        @if(session('msgCreated'))
            <div class=" alert alert-success" role="alert" >{{session('msgCreated')}}</div>
            @elseif(session('msgUpdated'))
            <div class="alert alert-warning" role="alert">{{session('msgUpdated')}}</div>
            @elseif(session('msgDeleted'))
            <div class="alert alert-danger" role="alert">{{session('msgDeleted')}}</div>
        @endif
        <h1>List of Adds</h1>
    </div>
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">published date</th>
                <th scope="col">Title</th>
                <th scope="col">Compagny name</th>
                <th scope="col">Add details</th>
            </tr>
        </thead>
        <tbody>
        @foreach($adds as $add)
            <tr>
                <th scope="row">{{$add->created_at}}</th>
                <td>{{$add->title}}</td>
                <td>{{$add->compagny_name}}</td>
                <td><a href="/user/adds/{{$add->id}}">Infos</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
            </div>
        </div>
    </div>
</body>
</html>
@endsection


