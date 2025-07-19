<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello from Laravel!';
});

Route::get('/greet/{name}', function ($name) {
  return "Hello, " . ucfirst($name) . "!";
});