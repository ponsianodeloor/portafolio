<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $profile = Profile::find(auth()->user()->id);
        return view('system.profile.index', compact('profile'));
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
