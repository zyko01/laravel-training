<?php

namespace App;

use App\Mail\ProjectCreated;

use Illuminate\Support\Facades\Mail;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    protected $dispatchesEvents = [
        'creted' => ProjectCreated::class
    ];

    protected static function boost() 

    {
        parent::boost();

        static::create(function ($project) {
            
        });
    }

    public function owner()

    {
        return $this->belongsTo(User::class);
    }

    public function tasks() 

    {
    	return $this->hasMany(Task::class);
    }


    public function addTask($task)

    {

    	$this->tasks()->create($task);

    	// Task::create([
		// 	'project_id' => $this->id,
		// 	'description' => request('description')
		// ]);
    }
}
