<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MenuModel;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = MenuModel::all();
        return view('menus.index', compact('menus'));
    }
}
