<!-- app/views/nerds/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
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

<h1>Edit {{ $members->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($members, array('action' => array('MembersController@update', $members->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('email', 'Email') }}
		{{ Form::email('email', null, array('class' => 'form-control')) }}
	</div>





	{{ Form::submit('Edit Member!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
