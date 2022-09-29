<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\TypeService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $service = Service::find(auth()->user()->id);
        $type_services = TypeService::where('service_id', '=', auth()->user()->id)->get();
        return view('system.service.index', compact('service', 'type_services'));
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
        $service = Service::findOrFail($request->id);
        $service->description = $request->description;
        $service->save();

        $service = Service::find(auth()->user()->id);

        return redirect()->route('system.services.index');
    }

    public function destroy($id){

    }
}
