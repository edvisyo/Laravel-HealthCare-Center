<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pharmacist;
use App\Admin;
use App\Role_user;
use Illuminate\Support\Facades\Hash;

class PharmacistsRegisterController extends Controller
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
        return view('pharmacists.create');
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
            'work' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        //Gydytojo registracija i 'users' lentele:
        $pharmacistLog = new Admin;
        $pharmacistLog->email = $request->input('email');
        $pharmacistLog->password = Hash::make($request->input('password'));
        $pharmacistLog->save();
        $lastId = $pharmacistLog->id;

        //Gydytojo registracija i 'doctors' lentele:
        $pharmacist = new Pharmacist;
        $pharmacist->user_id = $lastId;
        $pharmacist->name = $request->input('name');
        $pharmacist->lastname = $request->input('lastname');
        $pharmacist->work = $request->input('work');
        $pharmacist->save();

        //Gydytojo registracija i 'role_users' lentele:
        $pharmacistRole = new Role_user;
        $pharmacistRole->role_id = 3;
        $pharmacistRole->user_id = $lastId;
        $pharmacistRole->save();

        return redirect('/pharmacist/create')->with('success', 'Uzregistruota');
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
