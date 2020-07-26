<!DOCTYPE html>

<html>

<head>
	<title></title>
</head>

<body>
	<h1>List of Projects</h1>
	
	<ul>
		@foreach ($projects as $project)

			<li><a href="/projects/{{ $project->id }}">{{ $project->title }}</a></li>

		@endforeach
	</ul>
	
</body>

</html