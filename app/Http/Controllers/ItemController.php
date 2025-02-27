<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('welcome',compact('items'));
    }

    public function show($id)
    {
        $item = Item::findOrFail($id);
        return view('items.item',compact('item'));
    }
}
