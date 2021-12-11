<?php

namespace App\Http\Controllers;

use App\Models\{shedule};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SheduleController extends Controller
{
    function getShedule() {
        $shedules = shedule::all();
        return view("shedule.shedules", compact("shedules"));
    }

    function shedulesItems() {
        $shedules = DB::table('shedules')->count();
        return view("dashboard.dashboard", compact('shedules'));
    }
}
