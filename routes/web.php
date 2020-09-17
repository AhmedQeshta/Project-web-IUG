<?php

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

Route::get('/',"IndexController@index")->name('user');
Route::Post('/massage',"IndexController@massege")->name('massege');


Route::get('/userui',function(){
    return view('anime.register');
})->name('myregister');

Route::get('/userPage',function(){
    return view('anime.userPage');
})->name('userPage');
Route::get('/about',function(){
    return view('anime.about');
})->name('about');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix'=>'admin','middleware'=>'App\Http\Middleware\AdminMiddleware'],function (){
    Route::get('/',function (){return view('admin.index');})->name('admin');
    Route::resource('/posts','AdminPostsController');

});

Route::get('/{name}','IndexController@showAnime')->name("animePage");
