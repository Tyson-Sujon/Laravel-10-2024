<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function categories(){
        return view('dashboard.category.view_category');
        // print_r($_POST);
    }
    function AddCategory(){
        return view('dashboard.category.add_category');
    }
}
