<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Resume;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $resume = Resume::find(auth()->user()->id);
        $educations = Education::where('user_id', '=', auth()->user()->id)->orderBy('date_end', 'DESC')->get();

        return view('system.resume.educations.index', compact('resume', 'educations'));
    }

    public function create(){

    }

    public function store(Request $request){
        $education = new Education();
        $education->title = $request->title;
        $education->date_start = $request->date_start;
        $education->date_end = $request->date_end;
        $education->status = $request->status;
        $education->educational_institution = $request->educational_institution;
        $education->city = $request->city;
        $education->description = $request->description;
        $education->user_id = auth()->user()->id;
        $education->save();

        $resume = Resume::find(auth()->user()->id);
        $educations = Education::where('user_id', '=', auth()->user()->id)->get();

        return redirect()->route('system.resume.educations.index', compact('resume', 'educations'));

    }

    public function show($id){

    }

    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy(Request $request){
        Education::destroy($request->id);
        $resume = Resume::find(auth()->user()->id);
        $educations = Education::where('user_id', '=', auth()->user()->id)->get();

        return redirect()->route('system.resume.educations.index', compact('resume', 'educations'));

    }
}
