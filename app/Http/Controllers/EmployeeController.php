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

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required | string | max:255',
            'skill' => 'required | integer | min:0 | max:100',
            'bio' => 'required | string | min:20 | max:255',
            'branch_id' => 'required | exists:branches,id',
        ]);

        Employee::create($validated);

        return redirect()->route('employees.index');
    }

    public function destroy($id) {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees.index');
    }
}
