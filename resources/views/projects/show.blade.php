@extends('layout')

@section('content')

<h1>{{ $project->title }}</h1>

<p>{{ $project->description }}</p>


@if ($project->tasks->count())

	<div>
	@foreach($project->tasks as $task)

		<form method="POST" action="/completed-tasks/{{ $task->id }}">
			
			{{-- @method('PATCH') --}}

			@if ($task->completed)
				@method('DELETE')
			@endif

			@csrf

			<label class="{{ $task->completed ? 'is-complete' : '' }}" for="completed">
				{{-- {{ $task->completed ? checked : '' }} --}}
				<input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>

				{{ $task->description }}

			</label>

		</form>
		
		{{-- <li></li> --}}
	@endforeach

		<div>
			<form method="POST" action="{{ route('web.projects.store', ['project' => $project->id]) }}">

				@csrf

				<label for="description">New Task</label>

				<input type="text" name="description" placeholder="new task">

				<button type="submit">Add Task</button>
			</form>

			@include('errors')
		</div>
	</div>

@endif


<a href="/projects/{{ $project->id }}/edit">Edit</a>

@endsection