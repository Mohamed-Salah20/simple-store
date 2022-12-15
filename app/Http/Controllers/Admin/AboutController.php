<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    //

    public function edit(){

        return view('admin.about',['about' => About::find(1)]);
    }


    public function update(Request $request){

        // dd($request);

        $about = $request->validate([
            'title' => 'required|string',
            'text' => 'required|string',
            'image' => 'image'
        ]);


        $about = About::find(1);

        $about->title = $request->title;
        $about->text = $request->text;


        $image = $request->file('image');

        if(isset($image)){
            $image_name=Storage::disk('public')->put('/',$image);
            $about->image_path = 'storage' . '/' . $image_name;
            // dd($path);
            // $image_name = $image->getClientOriginalName();
            // dd($image_name); image-name.ext
            // dd($about->image_path);
        }

        $about->save();

        return back()->with('about_info', 'update success');

    }


}