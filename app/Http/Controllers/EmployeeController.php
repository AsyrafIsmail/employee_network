<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Branch;

class EmployeeController extends Controller
{
    public function index() {
        $employees = Employee::with('branch')->orderBy('created_at', 'desc')->paginate(10);

        return view('employees.index', ['employees' => $employees]);
    }

    public function show($id) {
        $employee = Employee::with('branch')->findorFail($id);
        return view('employees.show', ["employee" => $employee]);
    }

    public function create() {
        $branches = Branch::all();
        return view('employees.create', ["branches" => $branches]);
    }

    public function store() {

    }
}
