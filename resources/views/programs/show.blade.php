@extends('layouts.dashboardlayout')

@section('content')

<div class='container'>
	<h1>{{ $program->name }}</h1>
	
	<p>{{ $program->description }}<p>
	
	<ul>
		@foreach($program->users as $user)
			<li>{{ $user->firstName }} </li>
		@endforeach
	</ul>

</div>

@endsection