<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('system.profile.index');
    }

    public function create(){

    }

    public function store(Request $request){

    }

    public function show(Profile $profile){

    }

    public function edit(Profile $profile){

    }

    public function update(Request $request, Profile $profile){

    }

    public function destroy(Profile $profile){

    }
}
