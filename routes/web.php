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
    return view('main_page');
});

Route::get('dbc', function () {
    return view('dbc');
});

Route::get('about_us', function () {
    return view('about_us');
});

Route::get('pricing', function () {
    return view('pricing');
});

Route::get('/login_page', function () {
    return view('login_page');
});

Route::get('/signup_page', function () {
    return view('signup_page');
});

Route::post('/login', 'App\Http\Controllers\UserController@login');

Route::get('/user_dashboard',"App\Http\Controllers\UserController@showDashboard");

Route::get('/personal_card',"App\Http\Controllers\UserController@showPersonal");

Route::post("/signup","App\Http\Controllers\UserController@signup");

Route::get('/company_card', "App\Http\Controllers\UserController@showCompany");

Route::get('/edit_profile', "App\Http\Controllers\UserController@showEditProfile");

Route::post("/edit","App\Http\Controllers\UserController@editProfile");

Route::get('/logout', 'App\Http\Controllers\UserController@logout');

Route::get('admin_login', function () {
    return view('admin_login');
});
Route::post('/adminLogin', 'App\Http\Controllers\AdminController@login');

Route::get('admin_dashboard', 'App\Http\Controllers\AdminController@showDashboard');

Route::get('all_cards_admin/{email}','App\Http\Controllers\AdminController@showAllUserCards');

Route::get('update/{email}','App\Http\Controllers\AdminController@showUpdate');

Route::post('/updateUser/{email}', 'App\Http\Controllers\AdminController@updateUser');

Route::get('/delete/{email}','App\Http\Controllers\AdminController@deleteUser');

Route::get('/search/{search_by}/{term}', 'App\Http\Controllers\AdminController@showResults');


