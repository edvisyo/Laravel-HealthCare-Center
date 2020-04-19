<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor_patient;
// use App\PatientList;
use App\Recept;
use App\Visit;
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
    public function index(Request $request)
    {
        $search = $request->get('search');
        $data = DB::select("SELECT * FROM doctor_patients WHERE patient_name LIKE '%$search%' OR patient_lastname LIKE '%$search%' OR patient_birthdate LIKE '%$search%'");

        $current_doc_id = Auth::user()->id;
        $doctor_patients = DB::table('doctor_patients')->where(['doctor_id' => $current_doc_id]);
        $doctor_patients = $doctor_patients->get();
        return view('doctors.patients_list')->with('doctor_patients', $doctor_patients)->with('search', $search)->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $patient = Doctor_patient::find($id)->where(['id' => $id])->get();
        foreach($patient as $pat) {
            $name = $pat->patient_name;
            $lastname = $pat->patient_lastname;
            $birthdate = $pat->patient_birthdate;
        }

        return view('doctors.fast_history_record')->with('name', $name)->with('lastname', $lastname)->with('birthdate', $birthdate);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

        $patient = Doctor_patient::find($id)->where(['id' => $id])->get();
        foreach($patient as $pat) {
            $id = $pat->id;
            $name = $pat->patient_name;
            $lastname = $pat->patient_lastname;
        }

        $doc_id = Auth::user()->id;
        $doc_info = DB::select("SELECT name, lastname FROM doctors WHERE user_id = '$doc_id'");
        foreach($doc_info as $info) {
            $doc_name = $info->name;
            $doc_lastname = $info->lastname;
        }

        $this->validate($request, [
            'tlk_10' => 'required'
        ]);

        $visit = new Visit;
        $visit->patient_name = $request->input('patient_name');
        $visit->patient_lastname = $request->input('patient_lastname');
        $visit->patient_birthdate = $request->input('patient_birthdate');
        $visit->TLK_10 = $request->input('tlk_10');
        $visit->visit_duration = $request->input('duration');
        $visit->visit_compensation = $request->input('compensation');
        $visit->is_visit_repeated = $request->input('repeated');
        $visit->visit_description = $request->input('description');
        $visit->visit_date = $request->input('visit_date');
        $visit->doctor_name = $doc_name;
        $visit->doctor_lastname = $doc_lastname;
        $visit->save();

        //return redirect('/doctors/patients_list/create_record/2')->with('success', 'Uzregistruota');
        //return redirect('/doctors/patients_list/create_record')->route('fast_history_record', ['id' => 2]);
        //return redirect('/doctors/patients_list/create_record')->action('PatientsListController@store');

        //return redirect('doctors/patients_list')->with('success', 'Uzregistruota'); //nepatinka route'as!!!
        return redirect()->to('doctors/patients_list/create_record/'.$id)->with('success', 'Pacientas '.$name.' '.$lastname.' vizitui uzregistruotas');
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

        $recept_detail = Recept::find($id)->where(['id' => $id])->get();
        return view('doctors.patient_recept_details')->with('recept_detail', $recept_detail);
    }


    public function createRecept($id) {
        $patient = Doctor_patient::find($id)->where(['id' => $id])->get();
        foreach($patient as $pat) {
            $name = $pat->patient_name;
            $lastname = $pat->patient_lastname;
            $birthdate = $pat->patient_birthdate;
        }

        return view('doctors.fast_recept_record')->with('name', $name)->with('lastname', $lastname)->with('birthdate', $birthdate);
    }

    public function storeRecept(Request $request, $id) {

        $patient = Doctor_patient::find($id)->where(['id' => $id])->get();
        foreach($patient as $pat) {
            $id = $pat->id;
        }

        $doc_id = Auth::user()->id;
        $doc_info = DB::select("SELECT name, lastname FROM doctors WHERE user_id = '$doc_id'");
        foreach($doc_info as $info) {
            $doc_name = $info->name;
            $doc_lastname = $info->lastname;
        }

        $this->validate($request, [
            'name' => 'required',
            'lastname' => 'required',
            'birthdate' => 'required',
            'substance' => 'required',
            'quantity' => 'required',
            'unit' => 'required',
            'description' => 'required',
            //'expired' => 'required',
            //'termless' => 'required'
        ]);

        $recept = new Recept;
        $recept->patient_name = $request->input('name');
        $recept->patient_lastname = $request->input('lastname');
        $recept->patient_birthdate = $request->input('birthdate');
        $recept->substance = $request->input('substance');
        $recept->quantity = $request->input('quantity');
        $recept->measurement_unit = $request->input('unit');
        $recept->description = $request->input('description');
        if(empty($recept->validity = $request->input('expired'))) {
            $recept->termless = $request->input('termless');
        }
        
        $recept->doctor_name = $doc_name;
        $recept->doctor_lastname = $doc_lastname;
        $recept->save();

        return redirect()->to('doctors/patients_list/create_recept/'.$id)->with('success', 'Receptas uzregistruotas');
    }



    //public function search(Request $request) {

        //$search = $request->get('search');
        //$data = DB::select("SELECT * FROM patients WHERE name LIKE '%$search%' OR lastname LIKE '%$search%' OR birthdate LIKE '%$search%' OR name + lastname LIKE '%$search%'");

        //return view('doctors.patients_list')->with('search', $search)->with('data', $data);
    //}

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
