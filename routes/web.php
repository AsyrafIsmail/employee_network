<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employees', function() {
    $employees = [
        ["name" => "Afif Muqri", "skill" => 75, "id" => 1],
        ["name" => "Fatin Izzati", "skill" => 45, "id" => 1],
    ];
    return view('employees.index', ["greeting" => "Hello", "employees" => $employees]);
});

Route::get('/employees/{id}', function ($id) {
    $employees = [
        ["name" => "Afif Muqri", "skill" => 75, "id" => 1],
        ["name" => "Fatin Izzati", "skill" => 45, "id" => 1],
    ];
    return view('employees.show', ["id" => $id]);
});
