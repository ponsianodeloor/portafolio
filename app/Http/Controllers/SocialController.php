<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Validator;
use Socialite;
use Exception;
use Auth;


class SocialController extends Controller
{
    /**
     * Facebook login
     **/

    public function facebookRedirect(){
        return Socialite::driver('facebook')->redirect();
    }

    public function loginWithFacebook(){
        try {
            $userSocialite = Socialite::driver('facebook')->user();
            $isUser = User::where('facebook_id', $userSocialite->id)->first();

            if($isUser){
                Auth::login($isUser);
                return redirect('/system');
            }else{
                //valid if email exist with another social network
                $isUserEmail = User::where('email', $userSocialite->email)->first();
                if($isUserEmail){
                    $user = User::find($isUserEmail->id);
                    $user->facebook_id = $userSocialite->id;
                    $user->save();
                }else{
                    $user = User::create([
                        'name' => $userSocialite->name,
                        'email' => $userSocialite->email,
                        'facebook_id' => $userSocialite->id,
                        'password' => Hash::make('admin123')
                    ]);
                }

                Auth::login($user);
                return redirect('/system');
            }

        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }

    /**
     * Google login
     **/

    public function googleRedirect(){
        return Socialite::driver('google')->redirect();
    }

    public function loginWithGoogle(){
        try {
            $userSocialite = Socialite::driver('google')->user();
            $isUser = User::where('google_id', $userSocialite->id)->first();

            if($isUser){
                Auth::login($isUser);
                return redirect('/system');
            }else{
                //valid if email exist with another social network
                $isUserEmail = User::where('email', $userSocialite->email)->first();
                if($isUserEmail){
                    $user = User::find($isUserEmail->id);
                    $user->google_id = $userSocialite->id;
                    $user->save();
                }else{
                    $user = User::create([
                        'name' => $userSocialite->name,
                        'email' => $userSocialite->email,
                        'google_id' => $userSocialite->id,
                        'password' => Hash::make('admin123')
                    ]);
                }

                Auth::login($user);
                return redirect('/system');
            }

        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }

    /**
     * GitHub login
     **/

    public function githubRedirect(){
        return Socialite::driver('github')->redirect();
    }

    public function loginWithGithub(){
        try {
            $userSocialite = Socialite::driver('github')->user();
            $isUser = User::where('github_id', $userSocialite->id)->first();

            if($isUser){
                Auth::login($isUser);
                return redirect('/system');
            }else{
                //valid if email exist with another social network
                $isUserEmail = User::where('email', $userSocialite->email)->first();
                if($isUserEmail){
                    $user = User::find($isUserEmail->id);
                    $user->google_id = $userSocialite->id;
                    $user->save();
                }else{
                    $user = User::create([
                        'name' => $userSocialite->name,
                        'email' => $userSocialite->email,
                        'github_id' => $userSocialite->id,
                        'password' => Hash::make('admin123')
                    ]);
                }

                Auth::login($user);
                return redirect('/system');
            }

        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }


}
