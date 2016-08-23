<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('team', function() {
    return view('team');
});

Route::get('projects', function() {
    return view('projects', ['name' => 'signar']);
});

Route::get('projects/{id}', function($id) {
    return view('project', ['name' => $id]);
});

Route::get('task/{id}', function($id) {
    return view('task', ['name' => $id]);
});