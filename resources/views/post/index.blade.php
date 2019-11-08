@extends('inc.container')

@section('content')
	<div>
		<h1 class="mb-5">Posts</h1>
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