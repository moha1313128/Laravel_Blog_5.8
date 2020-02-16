@extends('main')
@section('title', ' | Login')
@section('content')

<div class="row">
	<div class="col-md-6 offset-3">
		{!! Form::open() !!}
			{{ Form::label('email', 'Email:') }}
			{{ Form::email('email', null, ['class' => 'form-control']) }}

			{{ Form::label('password', 'Password:') }}
			{{ Form::password('password', ['class' => 'form-control']) }}
			<br>
			{{ Form::checkbox('remember') }} {{ Form::label('remember', 'Remember me:') }}
			<br>
			{{ Form::submit('Login', ['class' => 'btn btn-primary btn-block']) }}
			<br>
			<p class="text-center">Or</p>
			
			<a href="#" class="btn btn-primary btn-block">Register</a>
		{!! Form::close() !!}
	</div>
</div>

@endsection