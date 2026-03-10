<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');

Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');

Route::get('/employees/{id}', [EmployeeController::class, 'show'])->name('employees.show');
