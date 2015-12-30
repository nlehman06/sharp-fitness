@if (Session::has('flash_message'))
	<div class='container'>
		<div class='alert {{ session('flash_alert_class') }} {{ Session::has('flash_message_important') ? 'alert-important' : '' }}'>
			@if (Session::has('flash_message_important'))
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
			@endif
			
			{{ session('flash_message') }}
		</div>
	</div>
@endif