@extends('main')

@section('title', ' | Edit Post')

@section('content')

<div class="row">
	{!! Form::model($post,['route'=>['posts.update', $post->id], 'method'=>'PATCH']) !!}
	<div class="col-md-8">
		
		{{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title']) }}

		{{ Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Slug']) }}
		
		{{ Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Type here your content']) }}	
		
	</div>
	<div class="col-md-4">
		<dl class="dl-horizontal">
			<dt>Author:</dt>
			<dd>WebDevMa</dd>
		</dl>
		<dl class="dl-horizontal">
			<dt>Created At:</dt>
			<dd>{{ date('M j, Y | h:i a', strtotime($post->created_at)) }}</dd>
		</dl>
		<dl class="dl-horizontal">
			<dt>URL:</dt>
			<dd><a href="{{ url($post->slug) }}">{{ url($post->slug) }}</a></dd>
		</dl>
		<dl class="dl-horizontal">
			<dt>Last Updated:</dt>
			<dd>{{date('M j, Y | h:i a', strtotime($post->updated_at)) }}</dd>
		</dl>
		<hr>
		<div class="row">
			<div class="col-sm-6">
				{!! Form::submit('Save', ['class'=>'btn btn-success']) !!}
				<!-- <a href="{{ route('posts.update', $post->id) }}" class="btn btn-success">Save</a> -->
			</div>
			<div class="col-sm-6">
				<a href="{{ route('posts.show', $post->id ) }}" class="btn btn-danger">Cancel</a>
			</div>
		</div>
	</div>
	{!! Form::close() !!}
</div>
@endsection