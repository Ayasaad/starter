<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

class UserController extends Controller
{
    public function showadminName(){
        return 'Aya  mohamed';
    }

    public function getIndex () {
        $data=['ahmad', 'aya'];
      //   return view('welcome')->with($data) ;

        $obj = new \stdClass();
        $obj->name ='aya';
        $obj->id= 26;

        return view('welcome' ,compact('data') ) ;

    }
}
