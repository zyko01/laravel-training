@extends('layout')

@section('content')

<h1>{{ $project->title }}</h1>

<p>{{ $project->description }}</p>


@if ($project->tasks->count())

	<div>
	@foreach($project->tasks as $task)

		<form method="POST" action="/task/{{ $task->id }}">
			
			@method('PATCH')

			@csrf

			<label for="completed">
				{{-- {{ $task->completed ? checked : '' }} --}}
				<input type="checkbox" name="completed" onChange="this.form.submit()" >

				{{ $task->description }}

			</label>

		</form>
		
		{{-- <li></li> --}}

	@endforeach
	</div>

@endif


<a href="/projects/{{ $project->id }}/edit">Edit</a>

@endsection