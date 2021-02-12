<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('home.index');

Route::get('acerca-de-mi', [AboutController::class,'index'])->name('about.index');
Route::get('terminos-y-condiciones', [AboutController::class,'terminos'])->name('about.terminos');
Route::get('politicas-de-seguridad', [AboutController::class,'politicas'])->name('about.politicas');


Route::get('habilidades', [SkillController::class,'index'])->name('skill.index');

Route::get('proyectos', [ProjectController::class,'index'])->name('project.index');
Route::get('proyectos/{category}', [ProjectController::class,'show'])->name('project.show');

Route::post('contactanos', [ContactController::class,'store'])->name('contact.store');

 