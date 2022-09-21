<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }

    public function index(){
        $portfolio = Portfolio::find(auth()->user()->id);
        return view('system.portfolio.index', compact('portfolio'));
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
