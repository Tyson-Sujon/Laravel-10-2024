<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\MasterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about',[AboutController::class,'contact'])->name('about');
Route::get('backend',[BackendController::class,'dashboard'])->name('dashboard');
route::get('master',[MasterController::class,'master'])->name( 'master' );
route::get('view_category', [CategoryController::class, 'categories'] )-> name('categories');
route::get('add_category',[CategoryController::class,'AddCategory'])->name('addcategory');
route::post('view_category',[PostCategoryController::class,'PostCategory'])->name('view_category');