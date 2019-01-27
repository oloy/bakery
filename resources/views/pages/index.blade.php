@extends('layouts.app')

@section('content')
<div class='jumbotron text-center'>
    <h1>{{$title}}</h1>
    <p>This is the place you can find cool bread and cake and order your own designed one</p>
    <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
</div>

@endsection