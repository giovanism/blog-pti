@extends('layouts.app')

@section('content')
	<h1>Latest Posts</h1>
	@if(count($posts) > 0):
		@foreach($posts as $post)
			<div class="well">
				<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
				<small>Written on <b>{{$post->created_at}}</b> by <b>{{$post->author}}</b></small>
			</div>
		@endforeach
		{{$posts->links()}}
	@else
		<p>No posts found</p>
	@endif
@endsection