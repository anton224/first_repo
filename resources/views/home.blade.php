<h1> Welcome to my site</h1>

@extends('layouts.layout')
@section('title','home')

@section('sidebar')
    @parent
<p> This is appended to the side bar</p>
@endsection
