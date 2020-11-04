@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add</div>
                <div class="card-body">
                <h1>{{$add->title}}</h1>
        <h3>{{$add->compagny_name}}</h3>
        <br>
        <h5>{{$add->location}}</h5>
        <p>{{$add->description}}</p>
        <p>{{$add->experience}}</p>
        <p>{{$add->email}}</p>
        <br>
    <form action="/adds/{{$add->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">DELETE ADD</button>
    </form>
    <a href="/user/adds/edit/{{$add->id}}"><button class="btn btn-warning">Update</button></a>
    <a href="/user/adds">back to product list</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection