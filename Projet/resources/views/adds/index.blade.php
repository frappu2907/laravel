@extends('layouts.app')
@section('content')
@foreach($adds as $add)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List of adds</div>
                <div class="card-body">
                <p>{{session('msg')}}</p>
                <div>
                <a href="/user/products/{{$add->id}}"></a>
                <div>
                <h1>{{$add->title}}</h1>
                <h3>{{$add->compagny_name}}</h3>
                <br>
                <a href="/user/adds/{{$add->id}}">See add details</a>
             </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach
@endsection
