<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = CategoryModel::all();
        return view('categories.index', compact('categories'));
    }



    public function show(CategoryModel $category)
    {
        
        return view('categories.show', compact('category')) ;
    }
}
