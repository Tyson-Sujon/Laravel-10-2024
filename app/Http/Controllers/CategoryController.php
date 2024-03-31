<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
// use illuminate\Support\str;

class CategoryController extends Controller
{
    function categories()
    {

        // return view('dashboard.category.view_category', ['var'=> 'news', 'var_2'=>'mew']);
        $cat = Category::OrderBy('category_name')->paginate(10);


        return view('dashboard.category.view_category', compact('cat'));
        // print_r($_POST);
    }
    function AddCategory()
    {
        return view('dashboard.category.add_category');
    }
    function DeleteCategory($data)
    {
        return Category::find($data);
        // return Category::first();
        // return $data . '<pre>ok';
    }
}
