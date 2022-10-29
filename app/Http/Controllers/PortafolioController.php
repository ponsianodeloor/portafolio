<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\About;
use App\Models\Education;
use App\Models\Fact;
use App\Models\Portfolio;
use App\Models\ProfessionalExperience;
use DateTime;
use App\Models\Profile;
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
        $user = User::find(1);
        $profile = Profile::find(1);
        $about = About::find(1);
        $edad = Carbon::createFromDate($about->date_of_birth)->age;
        $facts = Fact::where('user_id', '=', 1)->get();
        $skills = Skill::where('user_id', '=', 1)->get();
        $resume = Resume::find(1);
        $educations = Education::where('user_id', '=', 1)->orderBy('date_end', 'DESC')->get();
        $professional_experiences = ProfessionalExperience::where('user_id', '=', 1)->orderBy('date_end', 'DESC')->get();
        $time_professional_experiences = $this->timeProfesionalExperiences($professional_experiences);
        $portfolio = Portfolio::find(1);
        $project_categories = ProjectCategory::all();
        $service = Service::find(1);

        return view('portafolio',
            compact(
                'user',
                'profile',
                'about',
                'edad',
                'facts',
                'skills',
                'resume',
                'educations',
                'professional_experiences',
                'time_professional_experiences',
                'portfolio',
                'project_categories',
                'service'
            )
        );
    }

    public function timeProfesionalExperiences($professional_experiences){
        $anios = 0;
        $meses = 0;

        foreach ($professional_experiences as $professional_experience) {
            $fecha_inicial = new DateTime($professional_experience->date_start);
            $fecha_final = new DateTime($professional_experience->date_end);
            $diff = $fecha_inicial->diff($fecha_final);

            if($diff->format('%y') == "0"){
                $meses = $meses + $diff->format('%m');
                if ($meses >= 12){
                    $anios = $anios + 1;
                    $meses = $meses - 12;
                }
            }elseif ($diff->format('%y') == "1"){
                $anios = $anios + 1;
                $meses = $meses + $diff->format('%m');
                if ($meses >= 12){
                    $anios = $anios + 1;
                    $meses = $meses - 12;
                }
            }else{
                $anios = $anios + $diff->format('%y');
                $meses = $meses + $diff->format('%m');
                if ($meses >= 12){
                    $anios = $anios + 1;
                    $meses = $meses - 12;
                }
            }

        }
        $time_work = $anios.' years '.$meses.' m';
        return ($time_work);
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
