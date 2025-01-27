<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/usuarios', function() {
    // return 'Hello World';

    // json
    return [
        'id' => 1,
        'name' => 'Jon Snow'
    ];
});
