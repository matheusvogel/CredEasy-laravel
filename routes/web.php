<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmprestimoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/listar-clientes', [ClienteController::class, 'index']);
Route::get('/cadastrar-cliente', [ClienteController::class, 'create']);
Route::post('/clientes-salvos', [ClienteController::class, 'store']);

Route::get('/listar-emprestimos', [EmprestimoController::class, 'index']);
Route::get('/cadastrar-emprestimo', [EmprestimoController::class, 'create']);
Route::post('/emprestimos-salvos', [EmprestimoController::class, 'store']);
Route::get('/emprestimo-detalhes/{emprestimo}', [EmprestimoController::class, 'show'])->name('emprestimo.show');

Route::get('/', function(){
    return view('home');
});
Route::get('/login-cliente', function(){
    return view('login');
});

