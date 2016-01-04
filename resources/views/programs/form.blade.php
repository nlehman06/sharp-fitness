{{Form::hidden('active', 0)}}

<div class='form-group'>
{!! Form::label('name', 'Title: ') !!}
{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class='form-group'>
{!! Form::label('description', 'Description: ') !!}
{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<div class='form-group'>
{!! Form::label('active', 'Active: ') !!}
{!! Form::checkbox('active') !!}
</div>

<div class='form-group'>
{!! Form::label('userlist', 'Users: ') !!}
{!! Form::select('userlist[]', $users, null, ['id' => 'userlist', 'class' => 'form-control', 'multiple']) !!}
</div>

<div class='form-group'>
{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>

@section('footer')
	<script>
		$('#userlist').select2({
			placeholder: 'Choose which users will see this program'
		});
	</script>
@endsection