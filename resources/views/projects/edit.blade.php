@extends('layout')

@section('content')

<h1>Edit Project</h1>

	
	
<form method="POST" action="/projects/{{ $project->id }}">

		{{ csrf_field() }}

		{{ method_field('PATCH') }}
		
		<input type="text" name="title" placeholder="Project Title" value="{{ $project->title }}">

		<textarea name="description" cols="50" rows="10">{{ $project->description }}</textarea>

		<button type="submit">update</button>
	</form>

	<form method="POST" action="/projects/{{ $project->id }}">
		
		@method('DELETE')

		@csrf


		<button type="submit">delete</button>

	</form>

@endsection