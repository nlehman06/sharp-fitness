@extends('layouts.dashboardlayout')

@section('content')

<div class='container'>

	<h1>Settings - {{ $user->firstName }}</h1>
	
	
	{!! Form::model($user, ['method' => 'PATCH', 'url' => 'settings', 'class' => 'form', 'role' => 'form']) !!}
		
		{{Form::hidden('emailMessages', 0)}}
		{{Form::hidden('emailAlerts', 0)}}
		<div class="panel-group">
			<div class="panel panel-info">
				<div class="panel-heading">Email Preferences</div>
				<div class="panel-body">
					<div class="form-group">
						<div class="col-md-4">
							<div class="checkbox">
								<label>
									{!! Form::checkbox('emailMessages') !!} Email messages to me
								</label>
							</div>
						</div>
						<div class="col-md-4">
							<div class="checkbox">
								<label>
									{!! Form::checkbox('emailAlerts') !!} Email alerts to me
								</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="form-group">
			<div class="col-md-6">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	
	{!! Form::close() !!}
	
	@if ($errors->any())
		<ul class='alert alert-danger'>
			@foreach ($errors-all() as $error)
				<li>{{ $error }} </li>
			@endforeach
		</ul>
	@endif
	
</div>

@endsection