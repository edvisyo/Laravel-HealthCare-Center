<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor_patient;
use App\Doctor;

class AssignPatientToDoctorController extends Controller
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
        $doctor_id = Doctor::all();
        return view('patients_doctors.assign_to_doctor')->with('doctor_id', $doctor_id);
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
            'patient_name' => 'required',
            'patient_lastname' => 'required',
            'patient_birthdate' => 'required',
            'doctor_id' => 'required'
        ]);

        $patient = new Doctor_patient;
        $patient->patient_name = $request->input('patient_name');
        $patient->patient_lastname = $request->input('patient_lastname');
        $patient->patient_birthdate = $request->input('patient_birthdate');
        $patient->doctor_id = $request->input('doctor_id');
        $patient->save();

        return redirect('/doctor_patient/create')->with('success', 'Uzregistruota');
        
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
