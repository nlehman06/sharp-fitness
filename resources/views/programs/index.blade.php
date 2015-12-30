@extends('layouts.dashboardlayout')

@section('content')

<div class='container'>
	<div class='row'>
		<div class='col-xs-6'>
			<h1>Programs</h1>
		</div>
		<div class='col-xs-6 text-right'>
			<a class="btn btn-primary btn-lg" href="{{ action('ProgramsController@create') }}" role="button">Create</a>
		</div>
	</div>
	
	@foreach ($programs as $program)
		<div class='col-sm-4'>
			<div class="panel panel-info">
				<div class="panel-heading">{{ $program->name }}</div>
				<div class="panel-body">
					<p>{{ $program->description }}</p>
					<p><a class="btn btn-default" href="{{ action('ProgramsController@edit', [$program->id]) }}" role="button">Edit &raquo;</a></p>
				</div>
			</div>
		</div>
	@endforeach
</div>

@endsection