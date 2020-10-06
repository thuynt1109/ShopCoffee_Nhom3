<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category');
    }

    public function add_cat(){
        return view('admin.addcat');
    }
}
