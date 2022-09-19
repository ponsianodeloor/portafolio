<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Fact;
use App\Models\Profile;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    public function index(){

        $profile = Profile::find(1);
        $about = About::find(1);
        $edad = Carbon::createFromDate($about->date_of_birth)->age;
        $facts = Fact::where('user_id', '=', 1)->get();

        return view ('portafolio', compact('profile', 'about', 'edad', 'facts'));
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
