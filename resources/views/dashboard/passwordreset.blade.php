@extends('layouts.app')

@section('content')
    <a href="/profile" class="btn btn-default" id="btn-back">Back</a>
    <br>
    <h1>Change Password</h1>
    {!! Form::open(['action'=>'DashboardController@updatePassword', 'method'=>'POST']) !!}
    <div class="form-group">
    	{{Form::label('current_password', 'Current Password')}}
    	{{Form::password('current_password', ['class'=>'form-control', 'placeholder'=>'Current Password'])}}
    </div>
    <div class="form-group">
        {{Form::label('new_password', 'New Password')}}
        {{Form::password('new_password', ['class'=>'form-control', 'placeholder'=>'New Password'])}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Change Password', ['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection