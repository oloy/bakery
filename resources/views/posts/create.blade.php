
@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'Post']) !!}
        <div class ='form-group'>
            {{Form::label('cake', 'Cake')}}
            {{Form::text('cake', '' ,['class'=> 'form-control', 'placeholder'=>'Cake Name'])}}
        </div>

        <div class ='form-group'>
            {{Form::label('email', 'E-Mail Address')}}
            {{Form::text('email', '' ,['class'=> 'form-control', 'placeholder'=>'Email Address'])}}
        </div>

        <div class ='form-group'>
            {{Form::label('phone', 'Phone')}}
            {{Form::text('phone', '' ,['class'=> 'form-control', 'placeholder'=>'Phone'])}}
        </div>

        <div class ='form-group'>
            {{Form::label('pickupType', 'Pickup')}}     
            <br>
            {{Form::select('pickupType', ['D' => 'Delivery', 'S' => 'Self pickup'], 'S')}}
        </div>

        <div class ='form-group'>
            {{Form::label('location', 'Location')}}
            {{Form::text('location', '' ,['class'=> 'form-control', 'placeholder'=>'Location'])}}
        </div>

        <div class ='form-group'>
            {{Form::label('request', 'Request')}}
            {{Form::text('request', '' ,['class'=> 'form-control', 'placeholder'=>'Request'])}}
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}



    {!! Form::close() !!}

@endsection
