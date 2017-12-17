@extends('layouts.app')

@section('content')
    <a href="/profile" class="btn btn-default" id="btn-back">Back</a>
    <br>
    <h1>Edit Profile</h1>
    {!! Form::open(['action'=>'DashboardController@update', 'method'=>'POST']) !!}
    <div class="form-group">
    	{{Form::label('name', 'Name')}}
    	{{Form::text('name', $user->name, ['class'=>'form-control', 'placeholder'=>'Name'])}}
    </div>
    <div class="form-group">
        {{Form::label('email', 'Email')}}
        {{Form::text('email', $user->email, ['class'=>'form-control', 'placeholder'=>'Email'])}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Save Changes', ['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection