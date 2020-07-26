<!DOCTYPE html>

<html>

<head>
	<title></title>
</head>

<body>
	<h1>Create New Projects</h1>

	<form method="POST" action="/projects">

		{{ csrf_field() }}
		
		<input class="{{ $errors->has('title') ? 'is-danger' : '' }}" type="text" name="title" placeholder="Project Title" required value="{{ old('title') }}">

		<textarea name="description" id="" cols="30" rows="10" required></textarea>

		<button type="submit">Add</button>

		@include('errors')
	</form>

</body>

</html