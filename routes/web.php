<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return 'Hello from Laravel!';
});
git add .
git commit -m "TP1-CP2: first route"
git push