<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PharmacistsController extends Controller
{
    public function __construct() {

        $this->middleware('auth');
        $this->middleware('pharmacist');
    }


    public function index() {
        return view('pharmacists.index');
    }
}
