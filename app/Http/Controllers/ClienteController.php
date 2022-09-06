<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        return view('cliente.index')
            ->with('clientes', Cliente::all());
    }

    public function create()
    {
        return view('cadastro.formulario');
    }

    public function store(Request $request)
    {
        $nome = $request->input('nome');
        $email = $request->input('email');
        $senha = $request->input('senha');
        $cpf = $request->input('cpf');
        $telefone = $request->input('telefone');
        $profissao = $request->input('profissao');
        $renda = $request->input('renda');
        $endereco = $request->input('endereco');

        $cliente = new Cliente();

        $cliente->nome = $nome;
        $cliente->email = $email;
        $cliente->senha = password_hash($senha, PASSWORD_ARGON2I);
        $cliente->cpf = $cpf;
        $cliente->numero = $telefone;
        $cliente->profissao = $profissao;
        $cliente->renda = $renda;
        $cliente->endereco = $endereco;
        $cliente->tipo = "Cliente";

        $cliente->save();


        return redirect('/login-cliente');
    }

    public function analisarSolicitacao()
    {
        return Cliente::all();
    }


}
