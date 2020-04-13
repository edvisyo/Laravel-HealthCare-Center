<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Admin;
use App\Role_user;
use Illuminate\Support\Facades\Hash;

class DoctorsRegisterController extends Controller
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
        return view('doctors.create');
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
            //'specialization' => 'required',
            //'other_specialization' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        //Gydytojo registracija i 'users' lentele:
        $doctorLog = new Admin;
        $doctorLog->email = $request->input('email');
        $doctorLog->password = Hash::make($request->input('password'));
        $doctorLog->save();
        $lastId = $doctorLog->id;

        //Gydytojo registracija i 'doctors' lentele:
        $doctor = new Doctor;
        $doctor->user_id = $lastId;
        $doctor->name = $request->input('name');
        $doctor->lastname = $request->input('lastname');
        if(empty($doctor->specialization = $request->input('specialization'))) {
        $doctor->other_specialization = $request->input('other_specialization');
        }
        $doctor->save();

        //Gydytojo registracija i 'role_users' lentele:
        $doctorRole = new Role_user;
        $doctorRole->role_id = 2;
        $doctorRole->user_id = $lastId;
        $doctorRole->save();

        return redirect('/doctor/create')->with('success', 'Uzregistruota');
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
