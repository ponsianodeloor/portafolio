<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\ProfessionalExperience;
use App\Models\Resume;
use Illuminate\Http\Request;

class ProfessionalExperienceController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $resume = Resume::find(auth()->user()->id);
        $professional_experiences = ProfessionalExperience::where('user_id', '=', auth()->user()->id)->orderBy('date_end', 'DESC')->get();

        return view('system.resume.professional_experiences.index', compact('resume', 'professional_experiences'));
    }

    public function create(){

    }

    public function store(Request $request){
        $professional_experience = new ProfessionalExperience();
        $professional_experience->position = $request->position;
        $professional_experience->date_start = $request->date_start;
        $professional_experience->date_end = $request->date_end;
        $professional_experience->city = $request->city;
        $professional_experience->description = $request->description;
        $professional_experience->user_id = auth()->user()->id;
        $professional_experience->save();

        $resume = Resume::find(auth()->user()->id);
        $professional_experiences = ProfessionalExperience::where('user_id', '=', auth()->user()->id)->orderBy('date_end', 'DESC')->get();

        return redirect()->route('system.resume.professional_experiences.index', compact('resume', 'professional_experiences'));
    }

    public function show($id){

    }

    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy(Request $request){
        ProfessionalExperience::destroy($request->id);

        $resume = Resume::find(auth()->user()->id);
        $professional_experiences = ProfessionalExperience::where('user_id', '=', auth()->user()->id)->orderBy('date_end', 'DESC')->get();

        return redirect()->route('system.resume.professional_experiences.index', compact('resume', 'professional_experiences'));
    }
}
