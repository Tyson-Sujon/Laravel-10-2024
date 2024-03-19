<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    function PostCategory(Request $request){//ata ashche HTTP req thakay use Illuminate\Http\Request;
        $cat= new Category;//model name
        $cat->category_name =$request->category_name;
        //form er name=category_name & database er table attribute name =category_name obossio same hobe
        $cat->slug =$request->slug;
        $cat->save();
        return back();

        // return view('dashboard.category.view_category');
        // print_r($_POST);

        // dd($_POST);
        //time up to
        // 00:15:42

        
    }
}
