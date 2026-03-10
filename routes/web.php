<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employees', [EmployeeController::class, 'index']);

Route::get('/employees/create', [EmployeeController::class, 'create']);

Route::get('/employees/{id}', [EmployeeController::class, 'show']);
