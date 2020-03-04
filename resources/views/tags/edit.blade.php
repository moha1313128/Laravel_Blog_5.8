@extends('main')
@section('title', "| $tag->name Tag")
@section('content')
	{{ Form::model($tag, ['route'=>['tags.update', $tag->id], 'method'=>"PUT"]) }}
		{{ Form::label('name', "Name:") }}
		{{ Form::text('name', null, ['class' => 'form-control']) }}

		{{ Form::submit('Save changes', ['class'=>'btn btn-block btn-success', 'style'=>'margin-top:20px']) }}
	{{ Form::close() }}
@endsection