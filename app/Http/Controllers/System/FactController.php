<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Fact;
use Illuminate\Http\Request;

class FactController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){

        $about = About::find(auth()->user()->id);
        $facts = Fact::where('user_id', '=', auth()->user()->id)->get();

        return view('system.about.facts.index', compact('about', 'facts'));
    }

    public function create(){

    }

    public function store(Request $request){
        $fact = new Fact();
        $fact->icon = $request->icon;
        $fact->many = $request->many;
        $fact->fact = $request->fact;
        $fact->short_description = $request->short_description;
        $fact->user_id = auth()->user()->id;

        $fact->save();

        $about = About::find(auth()->user()->id);
        $facts = Fact::find(auth()->user()->id);

        return redirect()->route('system.about.facts.index', compact('about', 'facts'));

    }

    public function show(Fact $fact){

    }

    public function edit(Fact $fact){

    }

    public function update(Request $request, Fact $fact){

    }

    public function destroy(Request $request){
        Fact::destroy($request->id);

        $about = About::find(auth()->user()->id);
        $facts = Fact::find(auth()->user()->id);

        return redirect()->route('system.about.facts.index', compact('about', 'facts'));
    }
}
