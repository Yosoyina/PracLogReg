<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Muestra el formulario de inicio de sesión
    public function create()
    {
        return view('auth.login');
    }

    // Procesa el envío del formulario de inicio de sesión
    public function store(Request $request)
    {
        // Valida que se haya enviado un email válido y una contraseña
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Intenta autenticar al usuario con las credenciales proporcionadas
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard'); // Redirige al usuario autenticado al dashboard
        }

        // Si la autenticación falla, retorna al formulario con un mensaje de error
        return back()->withErrors(['email' => 'Credenciales incorrectas']);
    }

    // Cierra la sesión del usuario autentificado
    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/'); // Redirige al usuario a la página de inicio
    }
}
