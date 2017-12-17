@extends('layouts.app')

@section('content')
	<br>
	<h1>Latest Posts</h1>
	@if(count($posts) > 0):
		@foreach($posts as $post)
			<div class="well">
				<div class="row">
					<div class="col-md-3 col-sm-3">
						<img style="width:100%;" src="/storage/cover_images/{{$post->cover_image}}">
					</div>
					<div class="col-md-9 col-sm-9">
						<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
						<small>Written on <b>{{$post->created_at->addHours(7)->format('M d,Y \a\t h:i a')}}</b> by <b>{{$post->author}}</b></small>
						@if(strlen($post->body) < 100)
							<p>{!!$post->body!!}</p>
						@else
							<p>{!! str_limit($post->body, $limit = 100, $end = '...') !!}</p>
						@endif
						<a href="/posts/{{$post->id}}" role="button" class="btn btn-default btn-sm">Read more &raquo;</a>
					</div>
				</div>
			</div>
		@endforeach
		{{$posts->links()}}
	@else
		<p>No posts found</p>
	@endif
@endsection