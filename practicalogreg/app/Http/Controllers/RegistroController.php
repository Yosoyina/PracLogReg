<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegistroController extends Controller
{

    public function create()
    {
        return view('auth.registro');
    }

    //Validar los datos del formulario

    public function registro(Request $request){

        $user = User::create([
            'username' => $request->required('username'),
            'name' => $request->required('name'),
            'apellidos' => $request->required('apellidos'),
            'email' => $request->required('email'),
            'password' => Hash::make($request->required('password')),
        ]);

        Auth::login($user);
        return redirect()->route('dashboard');
    }

}
