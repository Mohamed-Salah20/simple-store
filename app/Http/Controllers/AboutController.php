<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
class AboutController extends Controller
{
    //
    public function index(){

        // $flight = Flight::findOrFail(1);
        $about = About::find(1); // Retrieve a model by its primary key...

        return view('about',['about'=>$about]);
    }
}