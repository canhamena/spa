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
                   //$tiposervico = TipoServico::where('id',$request[0])->get();
                   //$tiposervico = TipoServico::where('id',$request[0])->get()->first();
                   $dados = $request->all();
                   /*$index = count($dados)-1;
                   $posto = $dados[$index];
                   unset($dados[$index]); 
                   $d = 2;
                   //$sql = \DB::SELECT('SELECT * FROM agendaatendimento a, agendaatendimento_tiposervico ad WHERE a.id = ad.agenda_atendimento_id and a.localizacao_id = ? and "2021-02-26" = a.data_fim and ad.tipo_servico_id in (?)',[$posto,$d);
                      $sql=\DB::table('agendaatendimento')
                     ->join('agendaatendimento_tiposervico', 'agendaatendimento.id', '=', 'agendaatendimento_tiposervico.agenda_atendimento_id')
                    ->where('agendaatendimento.localizacao_id', '=',$posto)
                    ->where('agendaatendimento.data_fim', '=',"2021-02-26")
                    ->whereIn('agendaatendimento_tiposervico.tipo_servico_id',$dados)
                    ->get();
                     //->where('agendaatendimento_tiposervico.tipo_servico_id', '=',$dados)*/
                   return response()->json($sql);
           }


              

              	
}
