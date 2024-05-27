<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        if($user = Auth::user()){
      //      if($user->level ==
        //'1'){
        //        return redirect()->intended('beranda');
         //   } elseif ($user->level == '2') {
          //      return redirect()->intended('kasir');
           // }
           return redirect()->intended('home');
        }
    
    return view('login.view_login');
    }

    public function proses(Request $request)
    {
    $request->validate([
        'username'=>'required',
        'password'=>'required',

    ],
       [
        'username.required' => 'username tidak boleh kosong',
        'password.required'=>'password tidak boleh kosong'
       ]
);

$kredensial = $request->only('username','password');

if (Auth::attempt($kredensial)) {
    $request->session()->regenerate();
    $user = Auth::user();
   // if ($user->level == '1'){
     //   return redirect()->intended('tiketcs');

    //} elseif ($user->level =='2') {
      //  return redirect()->intended('user');
    //}
    return redirect()->intended('/');
}
    return back()->withErrors([
        'username'=>'maaf username atau pasword anda salah',

    ])->onlyInput('username');
}

  public function logout(Request $request)
  {
  Auth::logout();
  $request->session()->invalidate();
  $request->session()->regenerate();
  return redirect('/login');
  }
}
