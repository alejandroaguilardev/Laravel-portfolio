<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
      $informations = Controller::data();
      $categories = Category::orderBy('name')->get();
      $projects = Project::inRandomOrder()->paginate();
      return view('project.index', compact('informations',  'categories', 'projects'));
    }

    public function show(Category $category)
    {
      $informations = Controller::data();
      $category2 = $category;
      $categories = Category::orderBy('name')->get();
      $projects = Project::where('category_id', $category->id)->inRandomOrder()->paginate();
      return view('project.index', compact('informations', 'projects', 'categories', 'category2'));
    }
}
