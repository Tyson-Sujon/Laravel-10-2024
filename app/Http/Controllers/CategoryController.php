<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function categories(){

        // return view('dashboard.category.view_category', ['var'=> 'news', 'var_2'=>'mew']);
        $cat=Category::all();
        return view('dashboard.category.view_category',compact('cat'));

        // print_r($_POST);
    }
    function AddCategory(){
        return view('dashboard.category.add_category');
    }
}