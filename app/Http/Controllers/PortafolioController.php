<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Education;
use App\Models\Fact;
use App\Models\Portfolio;
use App\Models\ProfessionalExperience;
use App\Models\Profile;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\Resume;
use App\Models\Service;
use App\Models\Skill;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    public function index()
    {

        $profile = Profile::find(1);
        $about = About::find(1);
        $edad = Carbon::createFromDate($about->date_of_birth)->age;
        $facts = Fact::where('user_id', '=', 1)->get();
        $skills = Skill::where('user_id', '=', 1)->get();
        $resume = Resume::find(1);
        $educations = Education::where('user_id', '=', 1)->orderBy('date_end', 'DESC')->get();
        $professional_experiences = ProfessionalExperience::where('user_id', '=', 1)->orderBy('date_end', 'DESC')->get();
        $portfolio = Portfolio::find(1);
        $project_categories = ProjectCategory::all();
        $service = Service::find(1);

        return view('portafolio',
            compact(
                'profile',
                'about',
                'edad',
                'facts',
                'skills',
                'resume',
                'educations',
                'professional_experiences',
                'portfolio',
                'project_categories',
                'service'
            )
        );
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
