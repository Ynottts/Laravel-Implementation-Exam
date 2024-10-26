<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use App\Models\Skills;
use App\Models\Language;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        $resume = Resume::all();
        $skills = Skills::all();
        $languages = Language::all();
        $educations = Education::all();
        $experiences = Experience::all();

        return view('welcome', compact('resume', 'skills', 'languages', 'educations', 'experiences'));
    }
}