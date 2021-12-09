<?php

namespace App\Http\Controllers;

use App\Models\{employee};
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function getAll() {
        $employees = employee::all();
        return view("employee.employees", compact("employees"));
    }

    function search($id) {
        $employee = employee::find($id);
        return view("employee.employeesDetails", compact('employee'));
    }
}
