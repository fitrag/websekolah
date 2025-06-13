<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

// use Session;

class AuthController extends Controller
{
    public function index()
    {
      if (Auth::check()) 
      {
        return redirect('home');
      }else{
        return view('login');
      }
    }

    public function proses_login(Request $request)
    {
        $data = [
          'username' => $request->input('username'),
          'password' => $request->input('password'),
      ];

      if (Auth::Attempt($data)) {
          return redirect('admin/home');
      }else{
          Session::flash('error', 'User atau Password Salah');
          return redirect()->route('login')->with('failed','Username atau password salah');
      }
    }

  public function logout(Request $request)
  {
    Auth::logout();
    return redirect()->route('login'); 
  }
}

