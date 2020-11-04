@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Add</div>
                <div class="card-body">
                    <form action="/update" method="POST">
                    <input type="hidden" name="id" value="{{$add->id}}">
                    @csrf
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Title</label>
                    </div>
                    <div class="col-md-12">
                    <input class="form-control" type="text" name="UpdateTitle" value="{{$add->title}}">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Compagny name</label>
                    </div>
                    <div class="col-md-12">
                    <input  class="form-control" type="text" name="UpdateCompagny_name" value="{{$add->compagny_name}}">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Job description</label>
                    </div>
                    <div class="col-md-12">
                    <input class="form-control" type="text" name="UpdateDescription" value="{{$add->description}}">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Location</label>
                    </div>
                    <div class="col-md-12">
                    <input class="form-control" type="text" name="UpdateLocation" value="{{$add->location}}">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Experience</label>
                    </div>
                    <div class="col-md-12">
                    <input class="form-control" type="text" name="UpdateExperience" value="{{$add->experience}}">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">Email</label>
                    </div>
                    <div class="col-md-12">
                    <input class="form-control" type="email" name="UpdateEmail" value="{{$add->email}}">
                    </div>
                    <div class="col-md-8 offset-md-4">
                    <input class="btn btn-warning" type="submit" value="Update" name="btn">
                    </div>
                    </form>
                    <a href="/user/adds">back to product list</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection