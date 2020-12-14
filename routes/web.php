<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/expertise', function () {
    return view('expertise');
});
Route::get('/infrastructure', function () {
    return view('infrastructure');
});
Route::get('/architecture', function () {
    return view('architecture');
});

Route::get('/industrial', function () {
    return view('industrial');
});

Route::get('/land', function () {
    return view('land');
});
Route::get('/barrier', function () {
    return view('barrier');
});
Route::get('/range', function () {
    return view('range');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/career', function () {
    return view('career');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/business_profiles', function () {
    return view('business_profiles');
});

// Individual Team
Route::get('/teams/Alexander', function () {
    return view('teams/Alexander');
});
Route::get('/individual_team', function () {
    return view('individual_team');
});


// Projects
Route::get('/projects/general_profile', function () {
    return view('projects/general_profile');
});
Route::get('/projects/individual_project', function () {
    return view('projects/individual_project');
});


