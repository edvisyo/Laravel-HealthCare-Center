<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    protected function sendLoginResponse(Request $request) {

        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        foreach($this->guard()->user()->role as $role) {
            if($role->role_name == 'administratorius') {
                return redirect('home');
            }
            if($role->role_name == 'gydytojas') {
                return redirect('doctors/index');
            }
            if($role->role_name == 'vaistininkas') {
                return redirect('pharmacists/index');
            }
            else if($role->role_name == 'pacientas') {
                return redirect('patients/index');
            }
        }
    }
}
