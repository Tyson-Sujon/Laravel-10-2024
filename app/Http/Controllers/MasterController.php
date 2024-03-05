<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    function master(){
        return view( 'dashboard.master');
    }
}