<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }

    public function index(){
        $portfolio = Portfolio::find(auth()->user()->id);
        $project_categories = ProjectCategory::all();
        $projects = Project::where('portfolio_id', '=', auth()->user()->id)->orderBy('date', 'DESC')->get();
        $count_projects_x_portfolio_id = Project::where('portfolio_id', '=', auth()->user()->id)->count();

        return view('system.portfolio.index', compact('portfolio', 'project_categories', 'projects', 'count_projects_x_portfolio_id'));
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
        $portfolio = Portfolio::findOrFail($request->id);

        $portfolio->description = $request->description;

        $portfolio->save();

        $portfolio = Portfolio::find(auth()->user()->id);
        return redirect()->route('system.portfolio.index', compact('portfolio'));
    }

    public function destroy($id){

    }
}
