<!DOCTYPE html>

<html>

<head>
	<title></title>
</head>

<body>
	<h1>List of Projects</h1>


	@foreach ($projects as $project)

		<li>{{ $project->title }}</li>

	@endforeach
</body>

</html