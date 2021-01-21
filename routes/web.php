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



//--------- Individual Team

Route::get('/teams/profile', function () {
    return view('teams/profile');
});

Route::get('/teams/Alexander', function () {
    return view('teams/Alexander');
});

Route::get('/teams/Joe', function () {
    return view('teams/Joe');
});

Route::get('/teams/Ebenezer', function () {
    return view('teams/Ebenezer');
});

Route::get('/teams/Duah', function () {
    return view('teams/Duah');
});

Route::get('/teams/Doh', function () {
    return view('teams/Doh');
});

Route::get('/teams/James', function () {
    return view('teams/James');
});
Route::get('/teams/Wahab', function () { return view('teams/Wahab'); });

Route::get('/teams/Pauline', function () { return view('teams/Pauline'); });

Route::get('/teams/Kwame', function () { return view('teams/Kwame'); });

Route::get('/teams/Maurice', function () { return view('teams/Maurice'); });

Route::get('/teams/Ishmael', function () { return view('teams/Ishmael'); });

Route::get('/teams/Mary', function () { return view('teams/Mary'); });

Route::get('/teams/Monica', function () { return view('teams/Monica'); });

Route::get('/teams/Prince', function () { return view('teams/Prince'); });



// Route::get('/individual_team', function () {
//     return view('individual_team');
// });


// ----------- Projects
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


//Mixed Use
Route::get('/projects/mixed_1', function () {  return view('projects/mixed_1');});
Route::get('/projects/mixed_2', function () {  return view('projects/mixed_2');});
Route::get('/projects/mixed_3', function () {  return view('projects/mixed_3');});
Route::get('/projects/mixed_4', function () {  return view('projects/mixed_4');});

// Residence
Route::get('/projects/residence_2', function () {  return view('projects/residence_2');});

Route::get('/projects/residence_3', function () {  return view('projects/residence_3');});

Route::get('/projects/residence_4', function () {  return view('projects/residence_4');});

Route::get('/projects/residence_5', function () {  return view('projects/residence_5');});

Route::get('/projects/residence_6', function () {  return view('projects/residence_6');});

Route::get('/projects/residence_7', function () {  return view('projects/residence_7');});

Route::get('/projects/residence_8', function () {  return view('projects/residence_8');});

// Education
Route::get('/projects/education_1', function () {  return view('projects/education_1');});
Route::get('/projects/education_2', function () {  return view('projects/education_2');});
Route::get('/projects/education_3', function () {  return view('projects/education_3');});
Route::get('/projects/education_4', function () {  return view('projects/education_4');});

// Hostels
Route::get('/projects/hostel_1', function () {  return view('projects/hostel_1');});
Route::get('/projects/hostel_2', function () {  return view('projects/hostel_2');});
Route::get('/projects/hostel_3', function () {  return view('projects/hostel_3');});
Route::get('/projects/hostel_4', function () {  return view('projects/hostel_4');});

// Container Houses
Route::get('/projects/container_hse_1', function () {  return view('projects/container_hse_1');});
Route::get('/projects/container_hse_2', function () {  return view('projects/container_hse_2');});
Route::get('/projects/container_hse_3', function () {  return view('projects/container_hse_3');});
Route::get('/projects/container_hse_4', function () {  return view('projects/container_hse_4');});

// Office Building
Route::get('/projects/office_1', function () {  return view('projects/office_1');});
Route::get('/projects/office_2', function () {  return view('projects/office_2');});
Route::get('/projects/office_3', function () {  return view('projects/office_3');});
Route::get('/projects/office_4', function () {  return view('projects/office_4');});

// Industry
Route::get('/projects/industry_1', function () {  return view('projects/industry_1');});
Route::get('/projects/industry_2', function () {  return view('projects/industry_2');});
Route::get('/projects/industry_3', function () {  return view('projects/industry_3');});
Route::get('/projects/industry_4', function () {  return view('projects/industry_4');});




