<?php

namespace App\Http\Controllers;

use App\Http\Requests\Mainlogin;
use App\Models\usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


use function Termwind\style;

class LoginController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function signin()
    {
        return view('signin');
    }


    public function main(Request $request)
    {
        $registro = new usuario();

        $registro->name = $request->name;
        $registro->email = $request->email;
        $registro->password = $request->password;
        

        $user = usuario::where('email', $registro->email)->first();


        if ($user && $user->email === $registro->email) {
            return redirect()->route('login.register')->with('error', 'Email ya existente.');
        } else {
            $registro->save();
            return redirect()->route('login.signin');
           
        }
    }
        

    public function store($id)
    {
        $id = usuario::find($id);
        return view('main', compact('id'));
    }

    public function validation(Request $request)
    {

        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $email = "null";
        $password = "null";

        $email = $validatedData['email'];
        $password = $validatedData['password'];


        $user = usuario::where('email', $email)->first();


        if ($user && $user->password === $password && $user->email === $email) {
            return redirect()->route('login.store', $user->id);
        } else {
            return redirect()->route('login.signin')->with('error', 'Email o contraseña incorrectos.');
        }
    }
    
}
