<?php

namespace App\Http\Controllers;

use App\Models\{shedule};
use Illuminate\Http\Request;

class SheduleController extends Controller
{
    function getAll() {
        $shedules = shedule::all();
        return view("shedule.shedules", compact("shedules"));
    }
}
