<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    //LOGIN------------------------------------------------------------------------
    public function login()
    {
        return view('login');
    }

    //REGISTER-----------------------------------------------------------------------
    public function register()
    {
        return view('register');
        // dd('wrer');
    }
    public function registerProcess(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
            'username' => 'required|unique:users|max:255',
            'password' => 'required|max:255',
            'alamat' => 'required',
        ]);

        $user = User::create($request->all());

        Session::flash('status', 'success');
        Session::flash('message', 'Register Success. Please Login');
        return redirect('/register');

        // dd($request->all());
    }


    //AUTHENTICATING--------------------------------------------------------------------
    public function authenticating(Request $request)
    {
        // dd('df');
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            if (Auth::user()->status != 'active' ) {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                Session::flash('status', 'failed');
                Session::flash('message', 'Your account is not active yet');
                return redirect('/login');
            }

            
            $request->session()->regenerate();
            if (Auth::user()->role_id == 1) {
                return redirect()->intended('dashboard');
            }
            if (Auth::user()->role_id == 2) {
                return redirect()->intended('dashpetugas');
            }
            if (Auth::user()->role_id == 3) {
                return redirect()->intended('home');
            }
            
        }
            Session::flash('status', 'Failed');
            Session::flash('message', 'Login Invalid');
            return redirect('/login');
    }


    //LOGOUT--------------------------------------------------------------------
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
