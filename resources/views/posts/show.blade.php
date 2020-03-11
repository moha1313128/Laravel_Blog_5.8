@extends('main')

@section('title', ' | View Post')

@section('content')
<div class="row">
	<div class="col-md-8">
		<h1>{{ $post->title }}</h1>
		<p class="lead">{{ $post->body }}</p>	
		<hr>
		<div class="tags">
			@foreach($post->tags as $tag)
				<span class="badge badge-secondary">{{ $tag->name }}</span>
			@endforeach
		</div>
		<div id="backend-comments" style="margin-top: 50px;">
			<h3>Comments <small>{{ $post->comments()->count() }} total</small></h3>
			<table class="table">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Comment</th>
						<th width="90px"></th>
					</tr>
				</thead>
				<tbody>
					@foreach($post->comments as $comment)
					<tr>
						<td>{{ $comment->name }}</td>
						<td>{{ $comment->email }}</td>
						<td>{{ $comment->comment }}</td>
						<td>
							<a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
							<a href="{{ route('comments.delete', $comment->id) }}" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
				<label>Url:</label>
				<p><a href="{{ route('blog.single', $post->slug) }}">{{ route('blog.single', $post->slug) }}</a></p>
			</dl>
			<dl class="dl-horizontal">
				<dt>Category:</dt>
				<dd>{{ $post->category->name }}</dd>
			</dl>
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
					<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>
				</div>
				<div class="col-sm-6">
					{!! Form::open(['route'=>['posts.destroy', $post->id], 'method'=>'DELETE']) !!}
					<!-- <a href="{{ route('posts.destroy', $post->id) }}" class="btn btn-danger">Delete</a> -->
					{!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
					{!! Form::close() !!}
				</div>
				<div class="row">
					<div class="col-sm-12">
						<!-- <a href="{{ route('posts.index', $post->id) }}" class="btn btn-default btn-block"><< See all posts</a> -->
						{{ Html::linkRoute('posts.index', '<< See All Posts', array(), ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection