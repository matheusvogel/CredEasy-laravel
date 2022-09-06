<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Models\Emprestimo;
use App\Models\Parcela;
use DateInterval;
use DateTime;
use DateTimeImmutable;
use Illuminate\Support\Facades\Auth;

class EmprestimoController extends Controller
{
    public function index(Cliente $cliente)
    {
        $cliente= Auth::user();
        
        $emprestimos = $cliente->emprestimos;
        // dd($cliente->emprestimos());
        return view('emprestimo.index')
            ->with('emprestimos', $emprestimos);
    }

    public function create()
    {
        return view('emprestimo.formulario');
    }

     public function store(Request $request)
    {
        $request->validate([
            'valorEmprestimo' => 'required|numeric|min:1000',
            'quantidadeParcelas' => 'required|integer|min:1'
        ]);

        $valorEmprestimo = $request->input('valorEmprestimo');
        $quantidadeParcelas = $request->input('quantidadeParcelas');

        $emprestimo = new Emprestimo();

        $emprestimo->valor = $valorEmprestimo;
        $emprestimo->valor_final = 0;
        $emprestimo->taxa_juros = 0.20;
        
        $date = now();
        $emprestimo->data_solicitacao = $date;

        $emprestimo->status = "SOLICITADO";
        $emprestimo->cpf_cliente = Auth::user()->cpf;
        
        $valorFinalEsperado = $emprestimo->valor * (1+ $emprestimo->taxa_juros);
        $valorDaParcela = $valorFinalEsperado / $quantidadeParcelas;
        $valorDaParcela < 200;
         
        $proximoVencimento = new DateTimeImmutable();
        $emprestimo->save();
        for($i = 1; $i <= $quantidadeParcelas; $i++) {
            $proximoVencimento = $proximoVencimento->add(new DateInterval('P1M'));

            $parcela = new Parcela();
            $parcela->numero = $i;
            $parcela->valor = $valorDaParcela;
            $parcela->emprestimo_id = $emprestimo->id;
            $parcela->data_vencimento = $proximoVencimento->format('Y-m-d');
            $parcela->status = 'ABERTA';

            $parcela->save(); 
        } 

        return redirect('/listar-emprestimos');
    }

    public function show(Emprestimo $emprestimo)
    {
        return view('emprestimo.detalhes')
            ->with('emprestimo', $emprestimo);
    }  

    public function listarEmprestimos() 
    {
        return Emprestimo::all();
    }

    public function detalharEmprestimos(Emprestimo $emprestimo)
    {
        $emprestimo->qtd_parcelas = $emprestimo->parcelas->count();
        return $emprestimo;
    }
}