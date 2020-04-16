<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visit;
use App\Patient;
use App\Doctor;
use Auth;
use DB;

class PatientsController extends Controller
{

    public function __construct() {

        $this->middleware('auth');
        $this->middleware('patient');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user_id = Auth::user()->id;
        $patients = DB::select("SELECT name, lastname, birthdate FROM patients WHERE user_id = $user_id");
        foreach($patients as $patient) {
            $name = $patient->name;
            $lastname = $patient->lastname;
            $birthdate = $patient->birthdate;
        }

        // $visits = Visit::orderBy('created_at', 'desc')->get();
        //$visits = DB::select("SELECT * FROM visits WHERE patient_name = '$name' AND patient_lastname = '$lastname' AND patient_birthdate = '$birthdate' ORDER BY visit_date ASC");
        $visits = DB::table('visits')->where(['patient_name' => $name, 'patient_lastname' => $lastname, 'patient_birthdate' => $birthdate])->orderBy('visit_date', 'ASC')->paginate(4);
        //foreach($visits as $doctor_info) {
            //$doctor = $doctor_info->doctor_id;
        //}

        $title = '';

        if(!empty($visits)) {
            //$doc = DB::select("SELECT name, lastname FROM doctors WHERE user_id = $doctor");
            return view('patients.index')->with('visits', $visits);
        }
        else if(empty($visits)) {
                $title = 'Šiuo metu jums priskirtų  vizitų  nėra';
                return view('patients.index')->with('visits', $visits)->with('title', $title);
        }
        //return Visit::where('doctor_id', 3)->get();
        //return view('patients.index')->with('visits', $visits)->with('doc', $doc)->with('title', $title);
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
        $visit = Visit::find($id);
        // return Visit::where('doctor_id', 3)->get();
        return view('patients.visit_details')->with('visit', $visit);
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
