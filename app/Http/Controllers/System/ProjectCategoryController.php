<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class ProjectCategoryController extends Controller
{
    public function index(){

    }

    public function create(){

    }

    public function store(Request $request){
        $projectCategory = new ProjectCategory();
        $projectCategory->project_category = $request->project_category;
        $projectCategory->save();

        $portfolio = Portfolio::find(auth()->user()->id);

        return redirect()->route('system.portfolio.index', $portfolio);
    }

    public function show($id){

    }

    public function edit($id){

    }

    public function update(Request $request){

    }

    public function destroy($id){

    }
}
