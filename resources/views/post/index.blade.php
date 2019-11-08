@extends('inc.container')

@section('content')
	<div>
		<div class="d-flex justify-content-between align-items-start">
			<h1 class="mb-5">Posts</h1>
			<a href="/post/new" class="btn btn-primary">New Post</a>
		</div>
		<ul class="list-group">
			@foreach($posts as $post) 
			<li class="list-group-item">
				<a href="/post/{{$post->id}}" class="text-monospace" style="font-size: 22px">{{$post->title}}</a>
				<p class="mt-4 font-weight-light" style="font-size: 13px">{{$post->created_at}}</p>
			</li>
			@endforeach
		</ul>
	</div>
@endsection