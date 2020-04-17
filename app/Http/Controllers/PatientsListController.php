<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor_patient;
// use App\PatientList;
use App\Recept;
// use App\Doctor;
use Auth;
use DB;

class PatientsListController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
        $this->middleware('doctor');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current_doc_id = Auth::user()->id;
        $doctor_patients = DB::table('doctor_patients')->where(['doctor_id' => $current_doc_id]);
        $doctor_patients = $doctor_patients->get();
        return view('doctors.patients_list')->with('doctor_patients', $doctor_patients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Doctor_patient::find($id)->where(['id' => $id])->get();
        foreach($patient as $pat) {
            $name = $pat->patient_name;
            $lastname = $pat->patient_lastname;
            $birthdate = $pat->patient_birthdate;
        }

        $recepts = DB::table('recepts')->where(['patient_name' => $name, 'patient_lastname' => $lastname, 'patient_birthdate' => $birthdate])->orderBy('created_at', 'DESC')->paginate(6);
        return view('doctors.patient_recepts')->with('recepts', $recepts)->with('name', $name)->with('lastname', $lastname);
    }


    public function receptDetails($id) {

        //return Recept::find($id)->where(['id' => $id])->get();
        $recept_detail = Recept::find($id)->where(['id' => $id])->get();
        return view('doctors.patient_recept_details')->with('recept_detail', $recept_detail);
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
