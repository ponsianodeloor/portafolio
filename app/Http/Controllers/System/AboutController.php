<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Fact;
use App\Models\Skill;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $about = About::find(auth()->user()->id);
        return view('system.about.index', compact('about'));
    }

    public function create(){

    }

    public function store(Request $request){

    }

    public function show(About $about){

    }

    public function edit(About $about){

    }

    public function update(Request $request){
        $about = About::findOrFail($request->id);
        $about->about = $request->about;
        $about->who_are_you = $request->who_are_you;
        $about->short_description = $request->short_description;
        $about->date_of_birth = $request->date_of_birth;
        $about->website = $request->website;
        $about->phone = $request->phone;
        $about->city = $request->city;
        $about->degree = $request->degree;
        $about->status = $request->status;
        $about->description = $request->description;
        $about->facts_description = $request->facts_description;
        $about->skills_description = $request->skills_description;
        $about->save();

        return redirect()->route('system.about.index');
    }

    public function updateFactsDescription(Request $request){
        $about = About::findOrFail($request->id);
        $about->about = $request->about;
        $about->who_are_you = $request->who_are_you;
        $about->facts_description = $request->facts_description;
        $about->save();

        $about = About::find(auth()->user()->id);
        $facts = Fact::find(auth()->user()->id);

        return redirect()->route('system.about.facts.index', compact('about', 'facts'));
    }

    public function updateSkillsDescription(Request $request){
        $about = About::findOrFail($request->id);
        $about->about = $request->about;
        $about->who_are_you = $request->who_are_you;
        $about->skills_description = $request->skills_description;
        $about->save();

        $about = About::find(auth()->user()->id);
        $skills = Skill::find(auth()->user()->id);

        return redirect()->route('system.about.skills.index', compact('about', 'skills'));
    }

    public function destroy(About $about){

    }
}
