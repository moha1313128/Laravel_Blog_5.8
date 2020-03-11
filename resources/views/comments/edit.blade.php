@extends('main')
@section('title', '| Edit comment')
@section('content')
	
	<h1 class="text-center">Edit Comment</h1>

	<div class="row">
		<div id="comments-form" class="col-md-8 offset-2">
			{{ Form::model($comment, ['route' => ['comments.update', $comment->id], 'method' => 'PUT']) }}
				<div class="row">
					<div class="col-md-6">
						{{ Form::label('name', "Name:") }}
						{{ Form::text('name', null, ['class' => 'form-control', 'disabled' => '']) }}
					</div>
					<div class="col-md-6">
						{{ Form::label('email', "Email:") }}
						{{ Form::text('email', null, ['class' => 'form-control', 'disabled' => '']) }}
					</div>
					<div class="col-md-12">
						{{ Form::label('comment', "Comment:") }}
						{{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '3']) }}

						{{ Form::submit('Edit Comment', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px'])}}
					</div>
				</div>
			{{ Form::close() }}
		</div>	
	</div>

@endsection