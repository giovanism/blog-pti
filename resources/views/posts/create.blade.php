@extends('layouts.app')

@section('content')
	<h1>Create</h1>
	{!! Form::open(['action'=>'PostController@store', 'method'=>'POST']) !!}
    <div class="form-group">
    	{{Form::label('title', 'Title')}}
    	{{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('author', 'Author')}}
        {{Form::text('author', '', ['class'=>'form-control', 'placeholder'=>'Author'])}}
    </div>
    <div class="form-group">
    	{{Form::label('body', 'Body')}}
    	{{Form::textarea('body', '', ['id'=>'article-ckeditor', 'class'=>'form-control', 'placeholder'=>'Body Text'])}}
    </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection