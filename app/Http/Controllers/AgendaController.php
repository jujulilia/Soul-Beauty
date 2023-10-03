<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgendaRequest;
use App\Models\Agenda;
use Illuminate\Http\Request;


class AgendaController extends Controller
{
    public function store(AgendaRequest $request){
        $agenda = Agenda::create([
            'id' => $request->nome,
            'profissional_id' => $request->profissional_id,
            'Agenda_id' => $request->Agenda_id,
            'servico_id' => $request->servico_id,
            'data_hora' => $request->data_hora,
            'tipo_pagamento' => $request->tipo,
            'valor' => $request->valor
        ]);

        return response()->json([
            "sucess" => true,
            "message" => "Agendamento concluído.",
            "data" => $agenda
        ],200);
}

public function excluir($id){
    $usuario = Agenda::find($id);

    if(!isset($usuario)){
    return response()->json([
        'status' => false,
        'message' => "Agenda não encontrado"
    ]);
}

$usuario->delete();

return response()->json([
    'status'=> false,
    'message' => "Agenda excliuído com sucesso"
]);
}

public function update(Request $request){
$usuario = Agenda::find($request->id);

if(!isset($usuario)){
    return response()->json([
        'status' => false,
        'message' => "Agenda não encontrado"
    ]);
}

if(isset($request->nome)){
$usuario->nome = $request->nome;
}

if(isset($request->celular)){
$usuario->celular = $request->celular;
}

if(isset($request->email)){
$usuario->email = $request->email;
}

if(isset($request->cpf)){
$usuario->cpf = $request->cpf;
}

if(isset($request->dataNascimento)){
    $usuario->dataNascimento = $request->dataNascimento;
}

if(isset($request->cidade)){
    $usuario->cidade = $request->cidade;
}

if(isset($request->estado)){
    $usuario->estado = $request->estado;
}

if(isset($request->pais)){
    $usuario->pais = $request->pais;
}

if(isset($request->rua)){
    $usuario->rua = $request->rua;
}

if(isset($request->numero)){
    $usuario->numero = $request->numero;
}

if(isset($request->bairro)){
    $usuario->bairro = $request->bairro;
}

if(isset($request->cep)){
    $usuario->cep = $request->cep;
}

if(isset($request->complemento)){
    $usuario->complemento = $request->complemento;
}

if(isset($request->password)){
    $usuario->password = $request->password;
}

$usuario->update();

return response()->json([
    'status' => true,
    'message' => "Agenda atualizado"
]);
}

public function pesquisarPorNome(Request $request){
    $usuarios = Agenda::where('nome', 'like', '%'.$request->nome.'%')->get();

if(count($usuarios) > 0){

    return response()->json([
        'status' => true,
        'data' => $usuarios
    ]);
}
    return response()->json([
    'status'=> false,
    'message' => "Não há resultado para pesquisa"
]);
}

public function pesquisarPorCpf(Request $request){
    $usuarios = Agenda::where('cpf', 'like', '%'.$request->cpf.'%')->get();

if(count($usuarios) > 0){

    return response()->json([
        'status' => true,
        'data' => $usuarios
    ]);
}
    return response()->json([
    'status'=> false,
    'message' => "Não há resultado para pesquisa"
]);
}

public function pesquisarPorCelular(Request $request){
    $usuarios = Agenda::where('celular', 'like', '%'.$request->celular.'%')->get();

if(count($usuarios) > 0){

    return response()->json([
        'status' => true,
        'data' => $usuarios
    ]);
}
    return response()->json([
    'status'=> false,
    'message' => "Não há resultado para pesquisa"
]);
}

public function pesquisarPorEmail(Request $request){
    $usuarios = Agenda::where('email', 'like', '%'.$request->email.'%')->get();

if(count($usuarios) > 0){

    return response()->json([
        'status' => true,
        'data' => $usuarios
    ]);
}
    return response()->json([
    'status'=> false,
    'message' => "Não há resultado para pesquisa"
]);
}
}

