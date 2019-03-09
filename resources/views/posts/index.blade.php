
@extends('layouts.layout')
@section('content')
    <h1> Posts </h1>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="well">
                <h3> Name : {{$post->title}}</h3>
                <small>Written on {{$post->created_at}}</small>
            </div>
        @endforeach
    @else
        <p> No posts found!</p>
    @endif
@endsection
@section('title')
    About Page
@endsection
@section('links')

@endsection