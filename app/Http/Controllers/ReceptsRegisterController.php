<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recept;
use Auth;
use DB;

class ReceptsRegisterController extends Controller
{

    public function __construct()
    {
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recepts.create_new_recept');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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

        return redirect('/recept/create')->with('success', 'Uzregistruota');
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
