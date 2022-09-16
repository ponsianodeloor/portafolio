<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Profile;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    public function index(){

        $profile = Profile::find(1);
        $about = About::find(1);
        $edad = Carbon::createFromDate($about->date_of_birth)->age;

        return view ('portafolio', compact('profile', 'about', 'edad'));
    }

    public function create(){

    }

    public function store(Request $request){

    }

    public function show($id){

    }

    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy($id){

    }
}
