<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    function PostCategory(){
        return view('dashboard.category.view_category');
    }
}