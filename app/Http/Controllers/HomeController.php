<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Project;
use App\Models\Skill;

class HomeController extends Controller
{
    public function index()
    {
        $informations = Controller::data();
        $categories = Category::orderBy('name')->get();
        $projects = Project::inRandomOrder()->limit(3)->get();
        $skills = Skill::orderBy('importance')->inRandomOrder()->limit(8)->get();
        return view('home.index', compact('informations', 'skills', 'categories', 'projects'));
;   }
}
