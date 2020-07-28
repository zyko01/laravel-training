<?php

use Illuminate\Support\Facades\Route;

// use Illuminate\Filesystem\Filesystem;

use App\Services\Twitter;

use App\Repositories\UserRepository;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// app()->singleton('example', function () {
// 	return new \App\Example;
// });

/*app()->singleton('App\Services\Twitter', function () {

	return new \App\Services\Twitter('asdasfsdgfsdgf');
});*/

Route::get('/', function (Twitter $twitter) {

	dd($twitter);

	return view('welcome');
});

// Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

Route::resource('projects', 'ProjectsController');

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');

// Route::patch('/task/{task}', 'ProjectTasksController@update');

Route::post('/completed-tasks/{task}', 'CompletedTaskController@store');

Route::delete('/completed-tasks/{task}', 'CompletedTaskController@destroy');

// Route::get('/projects', 'ProjectsController@index');

// Route::post('/projects', 'ProjectsController@store');

// Route::get('/projects/{project}', 'ProjectsController@show');

// Route::get('/projects/create', 'ProjectsController@create');

// Route::get('/projects/{project}/edit', 'ProjectsController@edit');

// Route::patch('/projects/{project}', 'ProjectsController@update');

// Route::delete('/projects/{project}', 'ProjectsController@destroy');
