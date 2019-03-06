


@extends('layouts.layout')
@section('content')
    <h1> Contact Header </h1>
    {!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
        {{Form::label('name','Name')}}
        {{Form::text('name','',['class' => 'form-control','placeholder'=>'Enter Name'])}}
    </div>
    <div class="form-group">
            {{Form::label('email','Email Address')}}
            {{Form::text('email','',['class' => 'form-control','placeholder'=>'Enter Email'])}}
    </div>
    <div class="form-group">
        {{Form::label('message','Message')}}
        {{Form::textArea('message','',['class' => 'form-control','placeholder'=>'Enter Message '])}}
    </div>
    <div>
        {{Form::submit('submit',['class' => 'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
@endsection
@section('title')
    Contact Page
@endsection
{{--@section('links')--}}

{{--@endsection--}}