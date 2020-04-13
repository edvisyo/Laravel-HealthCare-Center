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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/darbuotojai', function () {
//     return view('pages.employees');
// });

Route::get('/', 'PagesController@index');
Route::get('/darbuotojai', 'PagesController@employees')->name('darbuotojai');
Route::get('/kontaktai', 'PagesController@contacts')->name('kontaktai');
Route::get('/paslaugos', 'PagesController@services')->name('paslaugos');
//Route::get('/create', 'PagesController@newAdmin')->name('create');
Route::get('doctors/index', 'DoctorsController@index');
Route::get('pharmacists/index', 'PharmacistsController@index');
Route::get('patients/index', 'PatientsController@index');

Route::resource('admin', 'AdminRegisterController');
Route::resource('doctor', 'DoctorsRegisterController');
Route::resource('pharmacist', 'PharmacistsRegisterController');
Route::resource('patient', 'PatientsRegisterController');
Route::resource('patients', 'PatientsController');
Route::resource('recept', 'ReceptsRegisterController');
Route::resource('visit', 'VisitsRegisterController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
