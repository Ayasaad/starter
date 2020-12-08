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

Route::get('/admin', function () {
    return "hello admin";
});

// route namespace

Route::namespace('Front')->group(function(){

    // all routes inside of this namespace will access controller or methods in foldr named Front
    Route::get('users','UserController@showAdminName');
});

//route prefix

//Route::prefix('users')->group(function(){
//   Route::get('show','Front\UserController@showAdminName');
//    Route::get('edit','Front\UserController@showAdminName');
//});

Route::group(['prefix'=> 'users' , 'middleware' => 'auth'],function(){
   Route::get('/',function(){
       return "works";
   });
    Route::get('show','Front\UserController@showAdminName');
    Route::get('edit','Front\UserController@showAdminName');

});

//middleware

Route::get('check',function (){
    return 'middleware';
}) -> middleware('auth');
