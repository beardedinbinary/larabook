@extends('layouts.default')

@section('content')

<div class="row">
	<div class="col-md-6">
		<h1>Register!</h1> 
		@include('layouts.partials.errors')

		{{ Form::open(['route' => 'register_path']) }}
		<div class="form-group">
			{{ Form::label('username', 'Username:') }}
			{{ Form::text('username', null, ['class' => 'form-control']) }}
		</div>

		<div class="form-group">
			{{ Form::label('email', 'Email:') }}
			{{ Form::text('email', null, ['class' => 'form-control']) }}
		</div>


		<div class="form-group">
			{{ form::label('password', 'Password:') }}
			{{ form::password('password', ['class' => 'form-control']) }}
		</div>

		<div class="form-group">
			{{ form::label('password_confirmation', 'Password Confirmation:') }}
			{{ form::password('password_confirmation', ['class' => 'form-control']) }}
		</div>

		<div class="form-group">
			{{ Form::submit('Sign Up', ['class' => 'btn btn-primary']) }}
		</div>

		{{ Form::close() }}
	</div>
</div>
@stop

