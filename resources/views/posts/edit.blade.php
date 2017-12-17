@extends('layouts.app')

@section('content')
    <a href="/posts/{{$post->id}}" class="btn btn-default" id="btn-back">Back</a>
    <br>
	<h1>Edit Post</h1>
	{!! Form::open(['action'=>['PostController@update', $post->id], 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
    	{{Form::label('title', 'Title')}}
    	{{Form::text('title', $post->title, ['class'=>'form-control', 'placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('author', 'Author')}}
        {{Form::text('author', $post->author, ['class'=>'form-control', 'placeholder'=>'Author'])}}
    </div>
    <div class="form-group">
    	{{Form::label('body', 'Body')}}
    	{{Form::textarea('body', $post->body, ['id'=>'article-ckeditor', 'class'=>'form-control', 'placeholder'=>'Body Text'])}}
    </div>
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection