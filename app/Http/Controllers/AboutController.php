<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Category;

class AboutController extends Controller
{
    public function index()
    {
        $informations = Controller::data();
        $categories = Category::orderBy('name')->get();
        return view('about.index', compact('informations', 'categories'));
    }

    public function terminos()
    {
        $informations = Controller::data();
        $categories = Category::orderBy('name')->get();
        return view('about.terminos', compact('informations', 'categories'));
    }

    public function politicas()
    {
        $informations = Controller::data();
        $categories = Category::orderBy('name')->get();
        return view('about.politicas', compact('informations', 'categories'));
    }
}
