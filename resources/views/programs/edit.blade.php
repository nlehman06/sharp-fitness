@extends('layouts.dashboardlayout')

@section('content')

	<div class='container'>
		<h1>Edit Program</h1>
		
		{!! Form::model($program, ['method' => 'Patch', 'action' => ['ProgramsController@update', $program->id]]) !!}
			@include('programs.form', ['submitButtonText' => 'Update Program'])
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