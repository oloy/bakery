@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class='well'>
                <a href="/posts/{{$post->id}}"><h3>{{$post->id}}. {{$post->cake}}</h3></a> 
            </div>
        @endforeach

    @else
        <p>No post found</p>
    @endif

@endsection