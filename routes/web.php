<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//homepage
Route::get('/', function () {
    //return view('welcome');
    
    $pos1 = Post::take(1)->get();
    $pos2 = Post::skip(1)->take(2)->get();
    $pos3 = Post::skip(3)->take(3)->get();

    return view('welcome',['posts1'=>$pos1,'posts2'=>$pos2,'posts3'=>$pos3]);
  
    
});

//sinf=gle post display
Route::get('/post/{posst}', function (Post $posst) {
    //$product_list=product::find($id);
    return view('post',['post'=>$posst]);
});

