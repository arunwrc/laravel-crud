<!-- app/views/nerds/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Members</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('members') }}">Member Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('members') }}">View All Members</a></li>
		<li><a href="{{ URL::to('members/create') }}">Create Member</a>
	</ul>
</nav>

<h1>Create Member</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all() )}}

{{ Form::open(array('url' => 'members')) }}

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('email', 'Email') }}
		{{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('phone', 'Phone') }}
		{{ Form::text('phone', Input::old('phone'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('address', 'Address') }}
		{{ Form::text('address', Input::old('address'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('pincode', 'Pincode') }}
		{{ Form::text('pincode', Input::old('pincode'), array('class' => 'form-control')) }}
	</div>

	

	{{ Form::submit('Create Member!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>