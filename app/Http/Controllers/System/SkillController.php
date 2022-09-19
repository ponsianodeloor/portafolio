<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $about = About::find(auth()->user()->id);
        $skills = Skill::where('user_id', '=', auth()->user()->id)->get();

        return view('system.about.skills.index', compact('about', 'skills'));
    }

    public function create(){

    }

    public function store(Request $request){
        $skill = new Skill();
        $skill->skill = $request->skill;
        $skill->percent = $request->percent;
        $skill->user_id = auth()->user()->id;

        $skill->save();

        $about = About::find(auth()->user()->id);
        $skills = Skill::find(auth()->user()->id);

        return redirect()->route('system.about.skills.index', compact('about', 'skills'));
    }

    public function show($id){

    }

    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy(Request $request){
        Skill::destroy($request->id);
        $about = About::find(auth()->user()->id);
        $skills = Skill::where('user_id', '=', auth()->user()->id)->get();

        return view('system.about.skills.index', compact('about', 'skills'));
    }
}
