<?php

namespace App\Http\Controllers;

use App\Models\item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    function index(){
        $itens = item::all();
        return view('item.item',compact('itens'));
    }

    function exibir($id){
        $item = item::find($id);

        if(!$item){
            return redirect()->route('items.index');
        }

        return view('item.itemExibir',compact('item'));
    }
}
