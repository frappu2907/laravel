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
                        <li><a href="/admin/ads">List All Ads</li></a> 
                        <li><a href="/admin/create/ad">Create Ad</li></a> 
                    </ul>
                </div>
            </div>
            <div class="col" id="dashboard">
            <div id="changeWidth">
    <div class="justify-content-center">
        @if(session('msgAdminCreateAd'))
            <div class=" alert alert-success" role="alert" >{{session('msgAdminCreateAd')}}</div>
            @elseif(session('msgAdminUpdated'))
            <div class="alert alert-success" role="alert">{{session('msgAdminUpdated')}}</div>
            @elseif(session('msgAdminDeletedAd'))
            <div class="alert alert-danger" role="alert">{{session('msgAdminDeletedAd')}}</div>
        @endif
        <h1>List of Adds</h1>
    </div>
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">published date</th>
                <th scope="col">User id</th>
                <th scope="col">Title</th>
                <th scope="col">Compagny name</th>
                <th scope="col">Ads details</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ads as $ad)
            <tr>
                <th scope="row">{{$ad->created_at}}</th>
                <td>{{$ad->user_id}}</td>
                <td>{{$ad->title}}</td>
                <td>{{$ad->compagny_name}}</td>
                <td><a href="/admin/ads/{{$ad->id}}">Infos</a></td>
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
