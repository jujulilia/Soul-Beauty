<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProfissionalControler;
use App\Http\Controllers\ServicoController;
use App\Models\Profissional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Servico
Route::post('servico/store',
[ServicoController::class, 'store']);
Route::delete('servico/delete/{id}',
[ServicoController::class, 'excluir']);
Route::put('servico/update',
[ServicoController::class, 'update']);
Route::post('servico/nome',
[ServicoController::class, 'pesquisarPorNome']);
Route::get('servico/find/descricao',
[ServicoController::class, 'pesquisarPoDescricao']);
Route::get('servico/retornarTodos',
[ServicoController::class, 'retornarTodos']);
Route::get('servico/find/{id}',
[ServicoController::class, 'pesquisarPorId']);


//Cliente
Route::post('cliente/store',
[ClienteController::class, 'store']);
Route::delete('cliente/delete/{id}',
[ClienteController::class, 'excluir']);
Route::put('cliente/update',
[ClienteController::class, 'update']);
Route::post('cliente/nome',
[ClienteController::class, 'pesquisarPorNome']);
Route::get('cliente/celular',
[ClienteController::class, 'pesquisarPorCelular']);
Route::get('cliente/cpf',
[ClienteController::class, 'pesquisarPorCpf']);
Route::get('cliente/email',
[ClienteController::class, 'pesquisarPorEmail']);
Route::get('cliente/retornarTodos',
[ClienteController::class, 'retornarTodos']);
Route::get('cliente/find/{id}',
[ClienteController::class, 'pesquisarPorId']);


//Profissional
Route::post('profissional/store',
[ProfissionalControler::class, 'store']);
Route::delete('profissional/delete/{id}',
[ProfissionalControler::class, 'excluir']);
Route::put('profissional/update',
[ProfissionalControler::class, 'update']);
Route::post('profissional/nome',
[ProfissionalControler::class, 'pesquisarPorNome']);
Route::get('profissional/celular',
[ProfissionalControler::class, 'pesquisarPorCelular']);
Route::get('profissional/cpf',
[ProfissionalControler::class, 'pesquisarPorCpf']);
Route::get('profissional/email',
[ProfissionalControler::class, 'pesquisarPorEmail']);
Route::get('profissional/retornarTodos',
[ProfissionalControler::class, 'retornarTodos']);
Route::get('profissional/find/{id}',
[ProfissionalControler::class, 'pesquisarPorId']);

//Agenda
Route::post('agenda/store',
[AgendaController::class, 'store']);
Route::post('agenda/procurarAgenda',
[AgendaController::class,'pesquisarPorAgenda']);
Route::put('agenda/update',
[AgendaControllerer::class, 'updateAgenda']);
Route::delete('agenda/delete/{id}',
[AgendaController::class, 'excluirAgenda']);
Route::get('agenda/retornarTodos',
[AgendaController::class, 'retornarTodos']);
