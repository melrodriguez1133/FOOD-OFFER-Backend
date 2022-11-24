<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;

class SessionsController extends Controller
{
    public function create() {
        
        return view('auth.login');
    }

    public function store() {
        
        if(auth()->attempt(request(['email', 'contraseña'])) == false) {
            return back()->withErrors([
                'message' => 'El email o la contraseña son incorrectos',
            ]);

        } else {

            if(auth()->usuario()->rol == 'admin') {
                return redirect()->route('admin.index');
            } else {
                return redirect()->to('/');
            }
        }
    }

    public function destroy() {

        auth()->logout();

        return redirect()->to('/');
    }
}
