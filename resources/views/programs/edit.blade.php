@extends('layouts.dashboardlayout')

@section('content')

	<div class='container'>
		{!! Form::model($program, ['method' => 'Delete', 'action' => ['ProgramsController@destroy', $program->id]]) !!}
		<div class='row'>
			<div class='col-xs-6'>
				<h1>Edit Program</h1>
			</div>
			<div class='col-xs-6 text-right'>
				{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
			</div>
		</div>
		{!! Form::close() !!}
		
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