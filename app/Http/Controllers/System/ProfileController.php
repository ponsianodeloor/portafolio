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
        $profile = Profile::find(auth()->user()->id);
        return view('system.profile.index', compact('profile'));
    }

    public function create(){

    }

    public function store(Request $request){

    }

    public function storeProfilePicture(Request $request){
        $request->validate([
            'file' => 'required|image|max:2048'
        ]);
        return $request->file('file')->store('public/images/profile');
    }

    public function show(Profile $profile){

    }

    public function edit(Profile $profile){

    }

    public function update(Request $request){

        $profile = Profile::findOrFail($request->id);
        $profile->url_linkedin = $request->url_linkedin;
        $profile->url_github = $request->url_github;
        $profile->url_twitter = $request->url_twitter;
        $profile->slogan = $request->slogan;
        $profile->slogan_dynamic = $request->slogan_dynamic;
        $profile->message = $request->message;
        $profile->save();

        $user = User::findOrFail($profile->user->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('system.profile.index');

    }

    public function destroy(Profile $profile){

    }
}
