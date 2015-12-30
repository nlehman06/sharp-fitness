@extends('layouts.dashboardlayout')

@section('content')
	<div class='container'>
		<div class="jumbotron">
			<h1>Weekly Workout Progress Graphic</h1>
			<div class="progress">
			  <div class="progress-bar progress-bar-success progress-bar-striped" style="width: 20%">
				<span class="sr-only">35% Complete (success)</span>
			  </div>
			  <div class="progress-bar progress-bar-warning progress-bar-striped" style="width: 20%">
				<span class="sr-only">20% Complete (warning)</span>
			  </div>
			  <div class="progress-bar progress-bar-danger progress-bar-striped" style="width: 20%">
				<span class="sr-only">10% Complete (danger)</span>
			  </div>
			  <div class="progress-bar progress-bar-info progress-bar-striped" style="width: 20%">
				<span class="sr-only">10% Complete (danger)</span>
			  </div>
			</div>
			<p>Your dynamic weekly progress message</p>
			<p><a class="btn btn-primary btn-lg" href="#" role="button">Start Workout</a></p>
		</div>
	</div>
	
	<div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>{{ auth()->user()->firstName }}'s Stats</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Workouts</h2>
		  <table class="table table-striped table-condensed table-hover">
			<thead>
			  <tr>
				<th>Date</th>
				<th>Workout</th>
				<th>Duration</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td align=center>12/24</td>
				<td>Shoulders + Some Upper</td>
				<td class="text-right">59</td>
			  </tr>
			  <tr>
				<td align=center>12/23</td>
				<td>532: Back and Abs</td>
				<td class="text-right">43</td>
			  </tr>
			  <tr>
				<td align=center>12/22</td>
				<td>532: Arms</td>
				<td class="text-right">50</td>
			  </tr>
			  <tr>
				<td align=center>12/21</td>
				<td>532: Chest and Abs</td>
				<td class="text-right">55</td>
			  </tr>
			</tbody>
		  </table>
          <p><a class="btn btn-default" href="#" role="button">View More &raquo;</a></p>
       </div>
        <div class="col-md-4">
			<h2>Messages</h2>
			<div class="panel panel-primary">			
				<div class="panel-heading">A Primary Message Example</div>
				<div class="panel-body">
					Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
				</div>
			</div>
			<div class="panel panel-success">
				<div class="panel-heading">A Success Message Example</div>
				<div class="panel-body">
					Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
				</div>
			</div>
			<div class="panel panel-info">
				<div class="panel-heading">An Info Message Example</div>
				<div class="panel-body">
					Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
				</div>
			</div>
			<div class="panel panel-warning">
				<div class="panel-heading">A Warning Message Example</div>
				<div class="panel-body">
					Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
				</div>
			</div>
			<div class="panel panel-danger">
				<div class="panel-heading">A Danger Message Example</div>
				<div class="panel-body">
					Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
				</div>
			</div>
          <p><a class="btn btn-default" href="#" role="button">View Messages &raquo;</a></p>
        </div>
	</div>

	  
@endsection