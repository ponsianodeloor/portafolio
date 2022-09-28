<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }

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

    public function storeImages(Request $request){
        $request->validate([
            'file_url_image' => 'required|image|max:2048'
        ]);
        $project = Project::find($request->id);
        $file_url_image = $request->file('file_url_image')->store('public/images/portfolio');
        $url_image = Storage::url($file_url_image);

        $image = new Image();
        $image->title = $request->title;
        $image->description = $request->description;
        $image->imageable_id = $request->id;
        $image->imageable_type = 'App\Models\Project';
        $image->url_image = $url_image;
        $image->user_id = auth()->user()->id;
        $image->save();

        return redirect()->route('system.portfolio.projects.edit', $project);
    }

    public function show($id){

    }

    public function edit($id){
        $project_categories = ProjectCategory::all();
        $project = Project::find($id);
        $project_images = $project->images;

        if ($project->portfolio->user_id == auth()->user()->id){
            return view ('system.portfolio.projects.edit', compact('project_categories', 'project', 'project_images'));
        }else{
            auth()->logout();
            return redirect('/');
        }
    }

    public function update(Request $request){
        $project = Project::find($request->id);

        $project->project = $request->project;
        $project->description = $request->description;
        $project->client = $request->client;
        $project->date = $request->date;
        $project->url = $request->url;
        $project->category_id = $request->category_id;

        $project->save();

        return redirect()->route('system.portfolio.projects.edit', $project);
    }

    public function destroy(Request $request){
        Project::destroy($request->id);

        $portfolio = Portfolio::find(auth()->user()->id);
        $project_categories = ProjectCategory::all();
        $projects = Project::where('portfolio_id', '=', auth()->user()->id)->get();

        return redirect()->route('system.portfolio.index', compact('portfolio', 'project_categories', 'projects'));
    }
}
