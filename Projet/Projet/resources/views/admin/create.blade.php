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
                    <div class="container">
                <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create new User</div>

                <div class="card-body">
                    <form method="POST" action="/admin/user">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nickname" class="col-md-4 col-form-label text-md-right">Nickname</label>

                            <div class="col-md-6">
                                <input id="nickname" type="nickname" class="form-control @error('nickname') is-invalid @enderror" name="nickname" value="{{ old('nickname') }}" autocomplete="nickname">

                                @error('nickname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">Mobile</label>

                            <div class="col-md-6">
                                <input id="mobile" type="mobile" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" autocomplete="mobile">

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                            <!-- here we add the fields we need then go to registercontroller -->

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6 offset-4">
                                <label class="offset-3" for="isadmin">Choose a Role</label>
                                <select id="isadmin" class="form-control" name="isadmin" size="2" multiple>
                                <option value=1>Admin</option>
                                <option value=0>User</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-8 offset-5">
                                <button type="submit" class="btn btn-primary">Create User</button>
                            </div>
                        </div>
                    </form>
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









