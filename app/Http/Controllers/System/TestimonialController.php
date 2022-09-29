<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $testimonial = Testimonial::find(auth()->user()->id);
        return view('system.testimonial.index', compact('testimonial'));
    }

    public function create(){

    }

    public function store(Request $request){

    }

    public function show($id){

    }

    public function edit($id){

    }

    public function update(Request $request){
        $testimonial = Testimonial::find(auth()->user()->id);
        $testimonial->description = $request->description;
        $testimonial->save();

        return redirect()->route('system.testimonials.index');
    }

    public function destroy($id){

    }
}
