<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  public function viewRegister()
  {
    return view("register");
  }

  public function postRegister(Request $request)
  {
    $request->validate([
      "nik" => "required",
      "nama_lengkap" => "required",
      "password" => "required",
    ]);

    User::create([
      "nik" => $request->nik,
      "nama_lengkap" => $request->nama_lengkap,
      "password" => bcrypt($request->password),
      "role" => "camaba",
    ]);
    return redirect()->route("login");
  }
  public function viewLogin()
  {
    return view("login");
  }

  public function postLogin(Request $request)
  {
    $cek = $request->validate([
      "nik" => "required",
      "password" => "required",
    ]);
    if (Auth::attempt($cek)) {
      $user = Auth::user();

      if ($user->role == "admin") {
        return redirect()->route("admin");
      } else {
        return redirect()->route("camaba");
      }
    }
    return back()->with("status", "nik atau pe salah");
  }
  public function logout()
  {
    Auth::logout();
    return redirect()->route("login");
  }

  public function camaba()
  {
    return view("camaba");
  }
  public function admin()
  {
    return view("admin");
  }
}
