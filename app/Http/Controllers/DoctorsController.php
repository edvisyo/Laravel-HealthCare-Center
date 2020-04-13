<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    public function __construct() {

        $this->middleware('auth');
        $this->middleware('doctor');
    }

    
    public function index() {
        return view('doctors.index');
    }
}
