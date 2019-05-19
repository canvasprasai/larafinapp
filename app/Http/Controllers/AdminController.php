<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function _contruct(){

    }
    public function dashboard(){
        return view('admin.dashboard');
    }
    //
}
