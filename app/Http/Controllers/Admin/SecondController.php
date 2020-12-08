<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecondController extends Controller
{

    public function __construct(){

        $this->middleware('auth')->except("showString1");

    }
    public function showString (){

        return 'stringgg';
    }
    public function showString0 (){

        return 'stringgg000';
    }
    public function showString1 (){

        return 'stringgg111';
    }
}

