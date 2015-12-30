
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/dashboard">Sharp Fitness</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class={{ Request::is('dashboard') ? 'active' : '' }}><a href="/dashboard">Home</a></li>
            <li class={{ Request::is('messages') ? 'active' : '' }}><a href="/messages">Messages <span class="badge">2</span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Workouts <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ action('ProgramsController@index') }}">Programs</a></li>
				<li class="dropdown-header">Recent Programs</li>
                <li><a href="#">Dynamic Program 1</a></li>
                <li><a href="#">Dynamic Program 2</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">History</a></li>
              </ul>
            </li>
            <li class="dropdown {{ Request::is('profile', 'settings') ? 'active' : '' }}">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->firstName }} <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ action('PagesController@profile') }}">Profile</a></li>
                <li><a href="{{ action('PagesController@settings') }}">Settings</a></li>
				@if (auth()->user()->isAdmin())
					<li role="separator" class="divider"></li>
					<li class="dropdown-header">Admin</li>
					<li><a href="#">Create Program</a></li>
					<li><a href="#">Manage Users</a></li>
				@endif
                <li role="separator" class="divider"></li>
                <li><a href="{{ action('PagesController@mylogout') }}">Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	
	<script>
	$(".nav a").on("click", function(){
		$(".nav").find(".active").removeClass("active");
		$(this).parent().addClass("active");
	});
</script>
