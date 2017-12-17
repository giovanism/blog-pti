@extends('layouts.app')

@section('content')
    <br>
	<h1>Create</h1>
	{!! Form::open(['action'=>'PostController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
    	{{Form::label('title', 'Title')}}
    	{{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('author', 'Author')}}
        @if(Auth::guest())
            {{Form::text('author', '', ['class'=>'form-control', 'placeholder'=>'Author'])}}
        @else
            {{Form::text('author', Auth::user()->name, ['class'=>'form-control', 'placeholder'=>'Author'])}}
        @endif
    </div>
    <div class="form-group">
    	{{Form::label('body', 'Body')}}
    	{{Form::textarea('body', '', ['id'=>'article-ckeditor', 'class'=>'form-control', 'placeholder'=>'Body Text'])}}
    </div>
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection