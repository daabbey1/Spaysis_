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


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/career', function () {
    return view('career');
});



Route::get('/business_profiles', function () {
    return view('business_profiles');
});


// ---------- Experitse----------------

Route::get('/expertise/index', function () {
    return view('expertise/index');
});

Route::get('/expertise/infrastructure', function () {
    return view('/expertise/infrastructure');
});
Route::get('/expertise/architecture', function () {
    return view('/expertise/architecture');
});

Route::get('/expertise/industrial', function () {
    return view('/expertise/industrial');
});

Route::get('/expertise/land', function () {
    return view('/expertise/land');
});
Route::get('/expertise/barrier', function () {
    return view('/expertise/barrier');
});
Route::get('/expertise/range', function () {
    return view('/expertise/range');
});



// Individual Team
Route::get('/teams/Alexander', function () {
    return view('teams/Alexander');
});

Route::get('/teams/profile', function () {
    return view('teams/profile');
});

// Route::get('/individual_team', function () {
//     return view('individual_team');
// });


// Projects
Route::get('/projects/general_profile', function () {
    return view('projects/general_profile');
});
Route::get('/projects/ashrich', function () {
    return view('projects/ashrich');
});
Route::get('/projects/jucap', function () {
    return view('projects/jucap');
});
Route::get('/projects/motag', function () {
    return view('projects/motag');
});
Route::get('/projects/residence_1', function () {
    return view('projects/residence_1');
});


