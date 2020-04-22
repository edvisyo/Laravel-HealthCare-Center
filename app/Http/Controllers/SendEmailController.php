<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class SendEmailController extends Controller
{
    public function index() {
        // return view('emails.send');
        return view('index');
    }

    function send(Request $request) {
        
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $data = array(
            'title' => $request->input('title'),
            'body' => $request->input('body')
        );

        Mail::to('salminas@gmail.com')->send(new SendEmail($data));
        // return redirect('/')->with('success', "issiusta");
        //return redirect('/');
        echo '<script>alert("Jusu zinute sekmingai issiusta!")</script>';
        echo '<script>window.location.href = "/";</script>';
        //return redirect('/');
    }
}
