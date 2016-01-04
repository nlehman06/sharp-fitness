@extends('layouts.dashboardlayout')

@section('content')

<div class='container'>
	<h1>{{ $program->name }}</h1>
	
	<p>{{ $program->description }}<p>
	
	@unless($program->users->isEmpty())
		<ul>
			@foreach($program->users as $user)
				<li>{{ $user->firstName }} </li>
			@endforeach
		</ul>
	@endunless

</div>

@endsection