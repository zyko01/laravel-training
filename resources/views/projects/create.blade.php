<!DOCTYPE html>

<html>

<head>
	<title></title>
</head>

<body>
	<h1>Create New Projects</h1>

	<form method="POST" action="/projects">

		{{ csrf_field() }}
		
		<input class="{{ $errors->has('title') ? 'is-danger' : '' }}" type="text" name="title" placeholder="Project Title">

		<textarea name="description" id="" cols="30" rows="10"></textarea>

		<button type="submit">Add</button>

		@if ($errors->any())
		<div>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
	</form>

</body>

</html