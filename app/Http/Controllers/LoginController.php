<?php

namespace App\Http\Controllers;

use App\Http\Requests\Mainlogin;
use App\Models\usuario;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function register(){
        return view('signin');
    }

    public function signin(){
        return "Por favor, Inicie sesión";
  }

    public function main(Request $request){
        $registro = new usuario();

        $registro->name = $request->name;
        $registro->email = $request->email;
        $registro->password = $request->password;

        $registro->save();

        return redirect()->route('login.store');
        
    }

    public function store(){
        return "Bienvenido a AssSystem";
    }
}
