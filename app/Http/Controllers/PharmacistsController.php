<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Recept;
use DB;

class PharmacistsController extends Controller
{
    public function __construct() {

        $this->middleware('auth');
        $this->middleware('pharmacist');
    }


    public function index(Request $request) {

        $search = $request->get('search'); 
        $patients = DB::select("SELECT * FROM patients WHERE name LIKE '%$search%' OR lastname LIKE '%$search%' OR birthdate LIKE '%$search%'");
        // if(count($recepts) > 0) {
        //     foreach($recepts as $user_id) {
        //         $id = $user_id->id;
        //     }
        // }

        return view('pharmacists.index')->with('search', $search)->with('patients', $patients);
    }


    public function recepts($id) {

        //$recepts = Recept::find($id)->where(['id' => $id])->get();
        $patients = Patient::find($id)->where(['id' => $id])->get();
        if($patients) {
            foreach($patients as $patient) {
                $name = $patient->name;
                $lastname = $patient->lastname;
                $birthdate = $patient->birthdate;
            }
        }

        $recepts = DB::table('recepts')->where(['patient_name' => $name, 'patient_lastname' => $lastname, 'patient_birthdate' => $birthdate])->get();
        $title = '';
        if(!empty($recepts)) {
            return view('pharmacists.patient_recepts')->with('name', $name)->with('lastname', $lastname)->with('birthdate', $birthdate)->with('recepts', $recepts);
        }
        else if(empty($recepts)) {
            $title = 'Vartotojas receptu neturi';
            return view('pharmacists.patient_recepts')->with('name', $name)->with('lastname', $lastname)->with('birthdate', $birthdate)->with('title', $title);
        }
        //return view('pharmacists.patient_recepts')->with('name', $name)->with('lastname', $lastname)->with('birthdate', $birthdate)->with('recepts', $recepts);
    }
}
