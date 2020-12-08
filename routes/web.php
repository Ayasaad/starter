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

Route::get('/', function () {
    return view('welcome');
});


Route::get('index','Front\UserController@getIndex');

// required parameters

Route::get('/test2/{id}', function ($id) {

    return $id;
}) -> name('a');
//optional parameter
Route::get('/test3/{id?}', function () {

    return 'welcome';
}) -> name('b');

//route name

//Route::get('second','Admin\SecondController@showString');

Route::group(['namespace' => 'Admin'],function(){
    Route::get('second','SecondController@showString1');
});

Route::get('login',function (){
   return "You're not logged in !";
}) -> name('login');

//Resources AKA CRUD operations

Route::resource('news','NewsController');


Route::get('landing',function(){
    return view('land');
});

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home') ->middleware('verified');

