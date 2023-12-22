<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    //

    public function index()
{
    $items = Item::all();
    return view('items.index', compact('items'));
}

}

