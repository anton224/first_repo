

@extends('layouts.layout')

@section('title','home')
@section('content')
    <h1> Home </h1>
    <p>Lorem assss</p>
@endsection
@section('sidebar')
    @parent
    <p> This is appended to the side bar</p>
@endsection
