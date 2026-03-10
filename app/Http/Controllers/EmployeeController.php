<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index() {
        $employees = Employee::orderBy('created_at', 'desc')->get();

        return view('employees.index', ['employees' => $employees]);
    }

    public function show($id) {
        $employee = Employee::findorFail($id);
        // dd($employee);
        return view('employees.show', ["employee" => $employee]);
    }

    public function create() {
        return view('employees.create');
    }

    public function store() {

    }
}
