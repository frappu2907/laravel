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
                        <h5 class="title_dashboard">Dashboard Admin</h5>
                    </div>
                    <ul class="listDashboard">
                        <li><a href="/">CraigList</li></a>
                        <li><a href="/admin">List Users</li></a>
                        <li><a href="/admin/user/create">Create New User</li></a> 
                    </ul>
                </div>
            </div>
            <div class="col" id="dashboard">
            <div id="changeWidth">
    <div class="justify-content-center">
    @if(session('msgAdminCreated'))
            <div class=" alert alert-success" role="alert" >{{session('msgAdminCreated')}}</div>
            @elseif(session('msgAdminUpdated'))
            <div class="alert alert-sucess" role="alert">{{session('msgAdminUpdated')}}</div>
            @elseif(session('msgAdminDeleted'))
            <div class="alert alert-danger" role="alert">{{session('msgAdminDeleted')}}</div>
        @endif
        <h1>List of Users</h1>
    </div>
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Nickname</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope=>Role</th>
                <th scope="col">Update User</th>
                <th scope="col">Delete User</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td scope="row">{{$user->id}}</td>
                <td scope="row">{{$user->name}}</td>
                <td scope="row">{{$user->nickname}}</td>
                <td scope="row">{{$user->email}}</td>
                <td scope="row">{{$user->mobile}}</td>
                <td scope ="row">{{$user->is_admin}}</td>
                <td scope="row"><form action="/admin/user/edit/{{$user->id}}" action="POST">@csrf<button class="btn btn-warning">Update</button></form></td>
                <td scope="row"><form action="/admin/user/{{$user->id}}" method="POST">@csrf @method('DELETE')<button class="btn btn-danger">Delete</button></form></td>
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