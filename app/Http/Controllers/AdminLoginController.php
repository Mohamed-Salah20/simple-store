<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    //

    public function create(){
        return view('admin.login');
    }

    public function store(){

    }
}