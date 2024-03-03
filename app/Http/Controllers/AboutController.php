<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function contact(){
        return view('others.about',[
            'var'=>"another new page are available",
            'var_2'=>"another new page are available 2"
        ]);
    }
}
