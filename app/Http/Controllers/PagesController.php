<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }

    public function employees() {
        return view('pages.employees');
    }

    public function contacts() {
        return view('pages.contacts');
    }

    public function services() {
        return view('pages.services');
    }
}
