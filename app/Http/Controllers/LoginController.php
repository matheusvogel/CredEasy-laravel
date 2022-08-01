<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController
{
    public function index()
    {
        return view('login.index');
    }

    public function store(Request $request)
    {
        if(!Auth::attempt(['email' => $request->email, 'password' => $request->senha])) {
            return redirect()->back()->withErrors('Cliente ou senha inválidos');
        }

        return redirect('/cadastrar-emprestimo');
     }
}
