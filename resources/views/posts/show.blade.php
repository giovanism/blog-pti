@extends('layouts.app')

@section('content')
	<a href="/posts" class="btn btn-default" id="btn-back">Back</a>
	<br>
	<h1>{{$post->title}}</h1>
	@if($post->cover_image != 'noimage.jpg')
		<img style="height: 500px;display: block;margin: 0 auto;" src="/storage/cover_images/{{$post->cover_image}}">
		<br>
	@endif
	<hr>
	<div class="post-body">
		{!!$post->body!!}
	</div>
	<hr>
	<small>Written on <b>{{$post->created_at->format('M d,Y \a\t h:i a')}}</b> by <b>{{$post->author}}</b></small>
	<hr>
	<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

	{!!Form::open(['action'=>['PostController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
		{{Form::hidden('_method', 'DELETE')}}
		{{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
	{!!Form::close()!!}
@endsection