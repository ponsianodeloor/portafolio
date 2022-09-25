<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function __construct(){
        //$this->middleware('auth');
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

    public function updateProfileUrlPhoto(Request $request){
        $request->validate([
            'file_url_photo' => 'required|image|max:2048'
        ]);
        $file_url_photo = $request->file('file_url_photo')->store('public/images/profile');
        $url_photo = Storage::url($file_url_photo);

        $profile = Profile::findOrFail(auth()->user()->id);
        $profile->url_photo = $url_photo;
        $profile->save();

        return view('system.profile.index', compact('profile'));
    }

    public function updateProfileUrlPhotoBackground(Request $request){
        $request->validate([
            'file_url_photo_background' => 'required|image|max:2048'
        ]);
        $file_url_photo_background = $request->file('file_url_photo_background')->store('public/images/profile_background');
        $url_photo_background = Storage::url($file_url_photo_background);

        $profile = Profile::findOrFail(auth()->user()->id);
        $profile->url_photo_background = $url_photo_background;
        $profile->save();

        return view('system.profile.index', compact('profile'));
    }

    public function destroy(Profile $profile){

    }
}
