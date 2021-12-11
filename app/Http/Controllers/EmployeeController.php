<?php

namespace App\Http\Controllers;

use App\Models\{employee};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    function countEmployees() {
        $users = DB::table('employees')->count();
        return view("dashboard.dashboard", compact('users'));
    }

    function totalPayment() {
        $total= DB::table('employees')->sum('payment');
        return view("dashboard.dashboard", compact('total'));
    }

    function generalSearch() { // Solução paliativa para exibir dados na dashboard.
        $total= DB::table('employees')->sum('payment');
        $users = DB::table('employees')->count();
        $items = DB::table('items')->count();
        $shedules = DB::table('shedules')->count();

        return view("dashboard.dashboard", compact('users', 'total', 'items', 'shedules'));
    }

}
