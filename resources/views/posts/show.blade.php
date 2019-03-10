
@extends('layouts.layout')
@section('content')
    <a href ="/posts" class="btn btn-default">Go Back</a>
    <h1> {{$post->title}} </h1>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
@endsection
@section('title')
    About Page
@endsection
@section('links')

@endsection