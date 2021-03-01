<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgendaAtendimento;
use App\Models\AgendaAtendimentoTipoServico;
use App\Models\Localizacao;
use App\Http\Helpers\AppHelper;
use App\Models\TipoServico;
use App\Models\Auditoria;


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
                   $posto = isset(auth()->user()->posto) ? auth()->user()->posto->id : null;
                   Auditoria::create(['accao' =>" Registou agendamento com referencia ". $agenda->id,'user_id'=>auth()->user()->id,'localizacao_id' =>$posto]);
                    return  redirect()->route('spa.index')->with('mensagem', 'Agendamento registado com sucesso ..!');

              	}

              	return  redirect()->route('spa.index')->with('erro', 'Endereço não encontrado ..!');

           }



           public function tiposervico(Request $request)
           {       

                  $dados = $request->all();
                   
                    $sql=\DB::table('agendaatendimento')
                     ->join('agendaatendimento_tiposervico', 'agendaatendimento.id', '=', 'agendaatendimento_tiposervico.agenda_atendimento_id')
                    ->where('agendaatendimento.localizacao_id', '=',$dados[1])
                    ->where('agendaatendimento.data_fim', '>=',date('Y-m-d'))
                    ->where('agendaatendimento_tiposervico.tipo_servico_id','=',$dados[0])
                    ->get()->first();
                    $num = $horas =null;
                    if (isset($sql)) {
                        $num = \DB::SELECT('select sum(mt.quantidade) as qtd from agendaatendimento a, marcacao m , marcacao_tipo_servico mt where a.id = m.agenda_id and m.id = mt.marcacao_id and a.id = ? ',[$sql->id]);
                        $horas = \DB::SELECT('SELECT m.hora as hora FROM marcacao m , marcacao_tipo_servico mt WHERE m.id = mt.marcacao_id and m.agenda_id = ? and mt.tipo_servico_id = ?',[$sql->id,$dados[0]]);
                    }
                   
                    $qtd = 0; 
                   if ($num == null && isset($sql)) {
                       $qtd = $sql->qtd_cliente;
                    }elseif(!$num == null){
                       $qtd = $sql->qtd_cliente - $num[0]->qtd;
                    }
                     return response()->json(['teste'=>$sql,'num_cliente'=>$qtd,'id_agenda'=>$sql->id,'horas'=>$horas]);
           }


              

              	
}
