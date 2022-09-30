<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\PersonalReference;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PersonalReferenceController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){

    }

    public function create(){

    }

    public function store(Request $request){
        $request->validate([
            'file_url_image' => 'required|image|max:2048'
        ]);

        $file_url_image = $request->file('file_url_image')->store('public/images/testimonials');
        $url_image = Storage::url($file_url_image);

        $personal_reference = new PersonalReference();
        $personal_reference->name = $request->name;
        $personal_reference->position = $request->position;
        $personal_reference->company = $request->company;
        $personal_reference->email = $request->email;
        $personal_reference->cel = $request->cel;
        $personal_reference->testimonial = $request->testimonial;
        $personal_reference->testimonial_id = auth()->user()->id;
        $personal_reference->save();

        $image = new Image();
        $image->title = $request->name;
        $image->description = $request->email;
        $image->imageable_id = $personal_reference->id;
        $image->imageable_type = 'App\Models\PersonalReference';
        $image->url_image = $url_image;
        $image->user_id = auth()->user()->id;
        $image->save();

        return redirect()->route('system.testimonials.index');

    }

    public function show($id){

    }

    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy($id){

    }
}
