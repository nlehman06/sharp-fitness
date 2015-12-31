@extends('layouts.dashboardlayout')

@section('content')

<div class='container'>
	<div class='row'>
		<div class='col-xs-6'>
			<h1>Programs</h1>
		</div>
		@if (auth()->user()->isAdmin())
			{{-- Only the admin can edit programs. --}}
			<div class='col-xs-6 text-right'>
				<a class="btn btn-primary btn-lg" href="{{ action('ProgramsController@create') }}" role="button">Create</a>
			</div>
		@endif
	</div>
	
	@foreach ($programs as $program)
		<div class='col-sm-4'>
			<div class="panel {!! $program->active ? 'panel-info' : 'panel-default' !!}">
				<div class="panel-heading">
					<a href="{{ action('ProgramsController@show', [$program->id]) }}" class='btn-block'>{{ $program->name }}</a>
				</div>
				<div class="panel-body">
					<p>{{ $program->description }}</p>
					@if (auth()->user()->isAdmin())
						{{-- Only the admin can edit programs. --}}
						<p><a class="btn btn-default" href="{{ action('ProgramsController@edit', [$program->id]) }}" role="button">Edit &raquo;</a></p>
					@endif
				</div>
			</div>
		</div>
	@endforeach
</div>

@endsection