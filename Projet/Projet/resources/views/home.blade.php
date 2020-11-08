@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(session('errorAdmin'))
    <h1 class=" alert alert-danger" class="text-center" role="alert" >{{session('errorAdmin')}}</h1>
    @endif
</body>
</html>
@endsection