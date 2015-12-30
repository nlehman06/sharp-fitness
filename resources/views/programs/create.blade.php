@extends('layouts.dashboardlayout')

@section('content')

	<div class='container'>
		<h1>Create Program</h1>
		
		{{ Form::open(['url' => 'programs']) }}
			@include('programs.form', ['submitButtonText' => 'Add Program'])
		{{ Form::close() }}
		
		@if ($errors->any())
			<ul class='alert alert-danger'>
				@foreach ($errors->all() as $error)
					<li>{{ $error }} </li>
				@endforeach
			</ul>
		@endif
	</div>

@endsection