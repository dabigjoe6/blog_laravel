@extends('inc.container')

@section('content')
<div>
		<h1 class="mb-5">Posts</h1>
		{!! Form::open(['url' => '/post/store']) !!}
			<div class="form-group">
				{{Form::label('titleLabel', 'Title') }}
				{{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter title' ]) }}
			</div>
			<div class="form-group">
				{{ Form::label('bodyLabel', 'Body') }}
				{{ Form::textArea('body', '', [ 'class' => 'form-control', 'placeholder' => 'Enter body']) }}
			</div>
			{{ Form::submit('Create Post', [ 'class' => 'btn btn-success']) }}
		{!! Form::close() !!}
</div>
@endsection