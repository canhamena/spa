<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgendaAtendimento;
use App\Models\AgendaAtendimentoTipoServico;
use App\Models\Localizacao;
use App\Http\Helpers\AppHelper;
use App\Models\TipoServico;


class AgendaAtendimentoController extends Controller
{
    public function store(Request $request)
    {

    	     $request->validate([
                'servico' => 'required',
                'tiposervico' => 'required',
                'data_inicio' => 'required',
                'inicio_atendimento' => 'required',
                'fim_atendimento' => 'required',
                'qtd_cliente' => 'required']);
             

              $localizacao = Localizacao::where('id',$request->localizacao_id)->get()->first();
              
              if (isset($localizacao)) {
              	    $agenda = new AgendaAtendimento();
              	    $agenda->data_inicio = $request->data_inicio;
              	    $agenda->data_fim = $request->data_fim;
              	    $agenda->atendimento_inicio = $request->inicio_atendimento;
              	    $agenda->atendimento_fim = $request->fim_atendimento;
              	    $agenda->qtd_cliente = $request->qtd_cliente;
              	    $agenda->localizacao_id = $request->localizacao_id;

              	    $agenda->save();

              	      foreach ($request->tiposervico as $tipospa) {
                            $agenda->tiposervico()->attach($tipospa);
                    }

                    return  redirect()->route('spa.index')->with('mensagem', 'Agendamento registado com sucesso ..!');

              	}

              	return  redirect()->route('spa.index')->with('erro', 'Endereço não encontrado ..!');

           }



           public function tiposervico(Request $request)
           {
                   //$tiposervico = TipoServico::where('id',$request[0])->get();
                   $tiposervico = TipoServico::all();
                   
                   return response()->json($request->disponivel);
           }


              

              	
}
