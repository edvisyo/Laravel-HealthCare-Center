<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// Route::get('/send-mail', function(Request $request) {
//     $details = [
//         'title' => '',
//         'body' => 'asd'
//     ];
//     \Mail::to('salminas@gmail.com')->send(new \App\Mail\TestMail($details));
//     return redirect('/');
//     echo '<script>alert("Jusu zinute isiusta sekmingai!")</script>';
// });

// Route::get('/sendemail', 'SendEmailController@index');
// Route::post('/sendemail/send', 'SendEmailController@send');

Route::get('/', 'SendEmailController@index');
Route::post('/send', 'SendEmailController@send');

Route::get('/darbuotojai', 'PagesController@employees')->name('darbuotojai');
Route::get('/kontaktai', 'PagesController@contacts')->name('kontaktai');
Route::get('/paslaugos', 'PagesController@services')->name('paslaugos');
//Route::get('/create', 'PagesController@newAdmin')->name('create');
Route::get('doctors/index', 'DoctorsController@index');
Route::get('doctors/patients_list', 'PatientsListController@index');
Route::get('doctors/patients_list/recepts/{id}', 'PatientsListController@show');

Route::get('doctors/patients_list/recepts/recept_details/{id}', 'PatientsListController@receptDetails');
Route::get('doctors/patients_list/create_record/{id}', 'PatientsListController@create')->name('fast_history_record');
Route::post('doctors/patients_list/create_record/{id}', 'PatientsListController@store')->name('fast_history_record');

//Route::get('doctors/patients_list', 'PatientsListController@search')->name('search_result');
Route::get('doctors/patients_list/create_recept/{id}', 'PatientsListController@createRecept')->name('fast_recept_record');
Route::post('doctors/patients_list/create_recept/{id}', 'PatientsListController@storeRecept')->name('fast_recept_record');

Route::get('pharmacists/index', 'PharmacistsController@index');
Route::get('pharmacists/patient_recepts/{id}', 'PharmacistsController@recepts');

Route::get('patients/index', 'PatientsController@index');

Route::resource('admin', 'AdminRegisterController');
Route::resource('doctor', 'DoctorsRegisterController');
Route::resource('pharmacist', 'PharmacistsRegisterController');
Route::resource('patient', 'PatientsRegisterController');
Route::resource('patients', 'PatientsController');
Route::resource('recept', 'ReceptsRegisterController');
Route::resource('visit', 'VisitsRegisterController');
Route::resource('recepts', 'ReceptsController');
Route::resource('doctor_patient', 'AssignPatientToDoctorController');
Route::resource('patientlist', 'PatientsListController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
