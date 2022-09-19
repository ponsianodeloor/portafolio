<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $resume = Resume::find(auth()->user()->id);
        return view('system.resume.index', compact('resume'));
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
        $resume = Resume::findOrFail($request->id);
        $resume->resume = $request->resume;
        $resume->sumary = $request->sumary;
        $resume->address = $request->address;
        $resume->save();

        return redirect()->route('system.resume.index');
    }

    public function destroy($id){

    }
}
