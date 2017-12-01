@extends('layouts.app')

@section('content')
	<a href="/posts" class="btn btn-default">Back</a>
	<h1>{{$post->title}}</h1>
	<div>
		{!!$post->body!!}
	</div>
	<hr>
	<small>Written on <b>{{$post->created_at}}</b> by <b>{{$post->author}}</b></small>
	<hr>
	<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

	{!!Form::open(['action'=>['PostController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
		{{Form::hidden('_method', 'DELETE')}}
		{{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
	{!!Form::close()!!}
@endsection