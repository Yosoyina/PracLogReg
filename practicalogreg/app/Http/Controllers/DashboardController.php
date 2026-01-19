<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // Muestra el panel correspondiente según el rol del usuario autenticado
    public function index()
    {
        // Obtiene el usuario actualmente autenticado
        $user = Auth::user();
        
        if ($user->rol === 'admin') {
            $usuarios = User::all();
            return view('dashboard.admin', compact('usuarios'));
        }
        
        return view('dashboard.user', compact('user'));
    }
}
