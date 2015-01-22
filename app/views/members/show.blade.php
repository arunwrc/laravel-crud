<!-- app/views/nerds/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Show Member</title>
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

<h1>Showing {{ $members->name }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $members->name }}</h2>
		<p>
			<strong>Email:</strong> {{ $members->email }}<br>
			<strong>Phone:</strong> {{ $members->phone }}<br>
			<strong>Address:</strong> {{ $members->address }}<br>
			<strong>Pincode:</strong> {{ $members->pincode }}
		</p>
	</div>

</div>
</body>
</html>