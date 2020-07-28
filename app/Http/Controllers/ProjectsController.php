<?php

namespace App\Http\Controllers;

use App\Project;

use App\Services\Twitter;

use Illuminate\Filesystem\Filesystem;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()

    {
    	$projects = Project::all();


    	return view('projects.index', compact('projects'));
    }

    public function create()

    {
    	return view('projects.create');
    }

    public function store()

    {
    	request()->validate([

    		'title' => ['required', 'min:3'],
    		'description' => 'required'

    	]);

    	// Project::create(request(['title', 'description']));

    	$project = new Project();

    	$project->title = request('title');

    	$project->description = request('description');

    	$project->save();

    	return redirect('/projects');
    }

     public function show($id, Twitter $twitter)
    {
        // $twitter = app('twitter');

        dd($twitter);
        // $project = Project::findOrFail($id);
        
        return view('projects.show', compact('project'));
    }

    //  public function show()
    // {
    //     //
    // }

     public function edit($id)
    {
        $project = Project::findOrFail($id);

        return view('projects.edit', compact('project'));
    }

     public function update($id)
    {
        $project = Project::findOrFail($id);

        $project->title = request('title');

    	$project->description = request('description');

    	$project->save();

    	return redirect('/projects');
    }

     public function destroy($id)
    {
        Project::findOrFail($id)->delete();

        return redirect('/projects');
    }
}
