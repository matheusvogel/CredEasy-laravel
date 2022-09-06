<?php

namespace App\Http\Controllers;

use App\Models\Emprestimo;
use Illuminate\Http\Request;

class ParcelaController extends Controller
{
    public function index(Emprestimo $emprestimo)
    {
        $parcelas = $emprestimo->parcelas;

        return view('emprestimo.parcela')
            ->with('parcelas', $parcelas);         
    }

}
