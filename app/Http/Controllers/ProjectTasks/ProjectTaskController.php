<?php

namespace App\Http\Controllers\ProjectTasks;

use Illuminate\Http\Request;

use App\Task;

use App\Project;

use App\Http\Controllers\Controller;

class ProjectTaskController extends Controller
{


	public function store(Project $project)

	{
        $project->addTask(
            request()->validate(['description' => 'required'])
        );


		return back();
	}

    // public function update(Task $task )

    // {

    //     // if (request()->has('completed')) {
    //     //     $task->complete()
    //     // } else {
    //     //     $task->incomplete();
    //     // }

    //     // $task->complete(false);

    //     // $task->complete(request()->has('completed'));

    //     $method = request()->has('completed') ? 'complete' : 'incomplete';

    //     $task->$method();

    // 	return back();
    // }
}
