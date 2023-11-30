<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $tasks = \App\Models\Task::all();
    return view('ajax');
    return view('welcome', compact('tasks'));
});

Route::get('api/tasks', function (){
    return \App\Models\Task::latest()->get();
});
