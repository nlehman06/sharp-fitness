@extends('layouts.dashboardlayout')

@section('content')

<div class='container'>
	<div class='row'>
		<div class='col-xs-6'>
			<h1>Profile</h1>
		</div>
		<div class='col-xs-6 text-right'>
			<a class="btn btn-primary btn-lg" href="{{ action('PagesController@editProfile') }}" role="button">Edit</a>
		</div>
	</div>
	<div class='row'>
		<div class='col-md-4'>
			<div class="panel panel-default">
				<div class='panel-body'>
					<img src='images/blockImage.png' class="img-thumbnail img-responsive">
					<div class='table-responsive'>
						<table class='table'>
							<tr>
								<td>
									<h2><small>{{ auth()->user()->firstName." ".auth()->user()->lastName }}</small></h2>
								</td>
								<td valign='middle'></td>
							</tr>
							<tr>
								<td valign='middle'></td>
								<td align=right>
									<h4><small>{{ auth()->user()->email }}</small></h4>
								</td>
							</tr>
							<tr>
								<td>
									<h4><small>Birthday</small></h4>
								</td>
								<td align=right valign='middle'>
									<h4>{{ (auth()->user()->birthDate == '0000-00-00 00:00:00') ? '' : date('m/d/Y', strtotime(auth()->user()->birthDate)) }}</h4>
								</td>
							</tr>
							<tr>
								<td>
									<h4><small>Member Since</small></h4>
								</td>
								<td align=right valign='middle'>
									<h4>{{ (auth()->user()->startDate == '0000-00-00 00:00:00') ? '' : date('m/d/Y', strtotime(auth()->user()->startDate)) }}</h4>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class='col-md-8'>
			<h2>Graphs</h2>
			<p>A couple of graphs showing your weight loss progress and maybe a workouts per week graph.</p>
			<hr>
			<h2>Programs</h2>
			<p>Here are the programs you are recently enrolled in.</p>
		</div>
	</div>

</div>

@endsection