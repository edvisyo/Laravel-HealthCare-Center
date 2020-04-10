<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Pharmacist;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }

    public function employees() {

        $pharmacists = Pharmacist::all();
        $doctors = Doctor::all();
        return view('pages.employees')->with('doctors', $doctors)->with('pharmacists', $pharmacists);
    }

    public function contacts() {
        return view('pages.contacts');
    }

    public function services() {
        return view('pages.services');
    }
}
