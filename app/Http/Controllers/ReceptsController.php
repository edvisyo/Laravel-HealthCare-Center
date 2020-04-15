<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recept;
use App\Patient;
use App\Doctor;
use Auth;
use DB;
//use Carbon\Carbon;
//use DateTime;


class ReceptsController extends Controller
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

        //$dateTime = new DateTime();
        //$dateTime->format('Y-m-d');

        // $visits = Visit::orderBy('created_at', 'desc')->get();
        $recepts = DB::select("SELECT * FROM recepts WHERE patient_name = '$name' AND patient_lastname = '$lastname' AND patient_birthdate = '$birthdate' ORDER BY created_at DESC");

        $title = '';

        if(!empty($recepts)) {
            return view('recepts.index')->with('recepts', $recepts);
        }
        else if(empty($recepts)) {
                $title = 'Šiuo metu jums išrašytų  receptų  nėra';
                return view('recepts.index')->with('recepts', $recepts)->with('title', $title);
        }
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
        $recepts = Recept::find($id);
        return view('recepts.recept_details')->with('recepts', $recepts);
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
