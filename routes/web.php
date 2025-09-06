<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/progress', function () {
    $progress = [
        ['id' => 1, 'task' => 'Task 1', 'status' => 'Completed'],
        ['id' => 2, 'task' => 'Task 2', 'status' => 'In Progress'],
        ['id' => 3, 'task' => 'Task 3', 'status' => 'Pending']
    ];

    return view('progress.index',["greetings"=>"Hello World", "tasks" => $progress]);
});

Route::get('/progress/create', function () {
    return view('progress.create',);
});

Route::get('/progress/{id}', function (int $id) {
    $progress = [
        ['id' => 1, 'task' => 'Task 1', 'status' => 'Completed'],
        ['id' => 2, 'task' => 'Task 2', 'status' => 'In Progress'],
        ['id' => 3, 'task' => 'Task 3', 'status' => 'Pending']
    ];

    return view('progress.show',["id"=>$id, "task" => $progress[$id - 1]['status']]);
});

