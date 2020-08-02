<?php

namespace App\Http\Controllers;

use App\Project;

use App\Services\Twitter;

use Illuminate\Filesystem\Filesystem;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{

    public function __construct() 

    {
        $this->middleware('auth');
    }

    public function index()

    {
    	// $projects = Project::all();
        $projects = Project::where('owner_id', auth()->id())->get();


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

     public function show($id)
    {
        // $twitter = app('twitter');

        // dd($twitter);
        // auth()->user()->owns($project);
        // abort_if($project->owne_id !== auth()->id(), 403); 
        // $project = Project::findOrFail($id);

        $this->authorize('update', $project);
        
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
