<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function index()
    {
        $informations = Controller::data();
        $categories = Category::orderBy('name')->get();
        $oneSkills = Skill::where('importance', 1)->orderBy('name')->get();
        $twoSkills = Skill::where('importance', 2)->orderBy('name')->get();
        $threeSkills = Skill::where('importance', 3)->orderBy('name')->get();
        return view('skill.index', compact('informations', 'categories', 'oneSkills', 'twoSkills', 'threeSkills' ));
    } 
    
}
