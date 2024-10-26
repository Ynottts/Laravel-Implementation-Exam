<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use App\Models\Skills;
use App\Models\Language;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    
    public function experience()
    {
        $experience =   Experience::get();
        return view('welcome', compact('experience'));
    }
  
}