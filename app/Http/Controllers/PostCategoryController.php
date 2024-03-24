<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostCategoryController extends Controller
{
    function PostCategory(Request $request){//ata ashche HTTP req thakay
        //'Request' eta akta defult class name as well
        //jehetu class, tai er akta object ase ta amra $request dea show korlam
        //use Illuminate\Http\Request;

        // return $request->all();//ai obj ta direct database er categories table er sob info dibe

        $cat= new Category;//model name "Category" and $cat obj create korsay so er akta class ase
        $cat->category_name =$request->category_name;
        //form er name=category_name & database er table attribute name =category_name obossio same hobe
        $cat->slug = Str::slug($request->category_name);
        $cat->save();
        return redirect('/view_category');
        // return view(dashboard.category.view_category);



        // return view('dashboard.category.view_category');
        // print_r($_POST);

        // dd($_POST);
        //time up to



    }
}