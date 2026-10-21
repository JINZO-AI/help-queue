<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return 'Hello from Laravel!';
});
Route::get('/hello/{name}', function (string $name) {
    return view('hello', ['name' => $name]);
});
Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
Route::get('/tickets/create', [TicketController::class, 'create'])->name('tickets.create');
Route::get('/tickets/{ticket}', [TicketController::class, 'show'])->name('tickets.show');
