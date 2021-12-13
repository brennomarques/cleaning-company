<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    function generalSearch() {
        $total= DB::table('employees')->sum('payment');
        $users = DB::table('employees')->count();
        $items = DB::table('items')->count();
        $shedules = DB::table('shedules')->count();
        $records = DB::table('shedules')->select(DB::raw('*'))->whereRaw('Date(created_at) = CURDATE()')->count();

        return view("dashboard.dashboard", compact('users', 'total', 'items', 'shedules', 'records'));
    }
}
