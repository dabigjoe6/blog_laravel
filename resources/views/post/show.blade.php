@extends('inc.container')

@section('content')
<div>
		<h1 class="mb-5">Posts</h1>
		{!! Form::open(['url' => '/post/update/'.$post->id]) !!}
			<div class="form-group">
				{{Form::label('titleLabel', 'Title') }}
				{{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Enter title' ]) }}
			</div>
			<div class="form-group">
				{{ Form::label('bodyLabel', 'Body') }}
				{{ Form::textArea('body', $post->body, [ 'class' => 'form-control', 'placeholder' => 'Enter body']) }}
			</div>
			{{ Form::submit('Update Post', [ 'class' => 'btn btn-success']) }}
		{!! Form::close() !!}
</div>
@endsection