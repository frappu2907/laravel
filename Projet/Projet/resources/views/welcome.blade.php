@extends('layouts.app')

        <title>Craiglist</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


@section('content')






<div style="text-align:center">
<h1 style="margin:30px"> Welcome to CraigList</h1>
<h2>Let's recruit together your ideal talent<br></h2>
<h3 style="margin:20px">Looking for a job?</h3>
</div>



<form action="/search" method="get" >
<div class="container centre">

            <div class="input-group" style=width:100% >
            <input type="search" name="search" class ="form-control" style=height:60px placeholder="What are you looking for?" >
                <span class="input-group-prepend">
                    <button type="submit"  class="nav-link">Search</button>
                </span>
            </div>  
            </div>
    </form>



       
        @foreach ($ads as $ad)
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">List of adds</div>
                <div class="card-body">
                <p>{{session('msg')}}</p>
                <div>
                <a href="/user/products/{{$ad->id}}"></a>
                <div>
                <h1>{{$ad->title}}</h1>
                <h3>{{$ad->compagny_name}}</h3>
                <h4 class="card-text">{{$ad->location}}</h4>
                <small>{{Carbon\Carbon::parse($ad->created_at)->diffForHumans()}}</small>

                <br>
                <a href="/user/adds/{{$ad->id}}">See add details</a>
             </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
            
      


@endforeach


@endsection
  