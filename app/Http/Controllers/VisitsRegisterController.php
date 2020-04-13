<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visit;
use Auth;

class VisitsRegisterController extends Controller
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
        return view('history.create_new_record');
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
            'name' => 'required',
            'lastname' => 'required',
            'birthdate' => 'required',
            'desease_code' => 'required',
            'duration' => 'required',
            'compensation' => 'required',
            'repeated' => 'required',
            'description' => 'required',
            'visit_date' => 'required'
        ]);

        $visit = new Visit;
        $visit->patient_name = $request->input('name');
        $visit->patient_lastname = $request->input('lastname');
        $visit->patient_birthdate = $request->input('birthdate');
        $visit->TLK_10 = $request->input('desease_code');
        $visit->visit_duration = $request->input('duration');
        $visit->visit_compensation = $request->input('compensation');
        $visit->is_visit_repeated = $request->input('repeated');
        $visit->visit_description = $request->input('description');
        $visit->visit_date = $request->input('visit_date');

        $user_id = Auth::user()->id;

        $visit->doctor_id = $user_id;
        $visit->save();

        return redirect('/visit/create')->with('success', 'Uzregistruota');
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
