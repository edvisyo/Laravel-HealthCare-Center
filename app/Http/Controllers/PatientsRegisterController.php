<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Admin;
use App\Role_user;
use Illuminate\Support\Facades\Hash;

class PatientsRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'personal_code' => 'required',
            'birthdate' => 'required',
            'name' => 'required',
            'lastname' => 'required'
        ]);

        //Gydytojo registracija i 'doctors' lentele:
        $patient = new Patient;
        $patient->personal_code = $request->input('personal_code');
        $patient->birthdate = $request->input('birthdate');
        $patient->name = $request->input('name');
        $patient->lastname = $request->input('lastname');
        $patient->save();

        //Gydytojo registracija i 'users' lentele:
        $patientLog = new Admin;
        $patientLog->role_id = 2;
        $patientLog->email = $request->input('email');
        $patientLog->password = Hash::make($request->input('password'));
        $patientLog->save();
        $lastId = $patientLog->id;

        //Gydytojo registracija i 'role_users' lentele:
        $patientRole = new Role_user;
        $patientRole->role_id = 4;
        $patientRole->user_id = $lastId;
        $patientRole->save();

        return redirect('/patient/create')->with('success', 'Uzregistruota');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
