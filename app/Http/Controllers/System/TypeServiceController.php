<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\TypeService;
use Illuminate\Http\Request;

class TypeServiceController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){

    }

    public function create(){

    }

    public function store(Request $request){
        $type_service = new TypeService();
        $type_service->icon = $request->icon;
        $type_service->title = $request->title;
        $type_service->short_description = $request->short_description;
        $type_service->service_id = auth()->user()->id;
        $type_service->save();
        return redirect()->route('system.services.index');
    }

    public function show($id){

    }

    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy(Request $request){
        TypeService::destroy($request->id);
        return redirect()->route('system.services.index');
    }
}
