<?php

namespace App\Http\Controllers;

use App\Models\item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    function index(){
        $itens = item::all();
        return view('item.item',compact('itens'));
    }

    function search($id){
        $item = item::find($id);

        if(!$item){
            return redirect()->route('items');
        }

        return view('item.showItem',compact('item'));
    }

    function countItems() {
        $items = DB::table('items')->count();
        return view("dashboard.dashboard", compact('items'));
    }
}
