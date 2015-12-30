@extends('layouts.dashboardlayout')

@section('content')

<div class='container'>

	<h1>Edit Profile</h1>
	
	
	{!! Form::model($user, ['method' => 'PATCH', 'url' => 'profile', 'class' => 'form', 'role' => 'form']) !!}

		<div class="form-group">
			{!! Form::label('firstName', 'First Name: ') !!}
			{!! Form::text('firstName', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('lastName', 'Last Name: ') !!}
			{!! Form::text('lastName', null, ['class' => 'form-control']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('email', 'E-Mail: ') !!}
			{!! Form::text('email', null, ['class' => 'form-control']) !!}
		</div>
		
		<div class='form-group'>
			{!! Form::label('birthDate', 'Birthday: ') !!}
			{!! Form::input('date', 'birthDate', date('Y-m-d', strtotime($user->birthDate)), ['class' => 'form-control']) !!}
		</div>
		
		<div class='form-group'>
			{!! Form::label('startDate', 'Member Since: ') !!}
			{!! Form::input('date', 'startDate', date('Y-m-d', strtotime($user->startDate)), ['class' => 'form-control']) !!}
		</div>
		
		
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	
	{!! Form::close() !!}
	
	@if ($errors->any())
		<ul class='alert alert-danger'>
			@foreach ($errors->all() as $error)
				<li>{{ $error }} </li>
			@endforeach
		</ul>
	@endif
	
</div>
@endsection