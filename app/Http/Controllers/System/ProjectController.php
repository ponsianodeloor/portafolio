<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){

    }

    public function create(){

    }

    public function store(Request $request){
        $project = new Project();
        $project->project = $request->project;
        $project->description = $request->description;
        $project->client = $request->client;
        $project->date = $request->date;
        $project->url = $request->url;
        $project->portfolio_id = auth()->user()->id;
        $project->category_id = $request->category_id;
        $project->save();

        $portfolio = Portfolio::find(auth()->user()->id);
        return redirect()->route('system.portfolio.index', compact('portfolio'));
    }

    public function show($id){

    }

    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy(Request $request){
        Project::destroy($request->id);

        $portfolio = Portfolio::find(auth()->user()->id);
        $project_categories = ProjectCategory::all();
        $projects = Project::where('portfolio_id', '=', auth()->user()->id)->get();

        return redirect()->route('system.portfolio.index', compact('portfolio', 'project_categories', 'projects'));
    }
}
