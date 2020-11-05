@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<body>
    <div class="container-fluid p-o" id="fullHeight">
        <div class="row"  id="fullHeight">
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
                <h1>Welcome {{ Auth::user()->name }}</h1>
            </div>
        </div>
    </div>
</body>
</html>
@endsection