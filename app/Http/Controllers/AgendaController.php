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
            'cliente_id' => $request->cliente_id,
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


}
