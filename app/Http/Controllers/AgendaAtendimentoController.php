<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgendaAtendimento;
use App\Models\AgendaAtendimentoTipoServico;
use App\Models\Localizacao;
use App\Http\Helpers\AppHelper;
use App\Models\TipoServico;
use App\Models\Auditoria;
use App\Models\Spa;


class AgendaAtendimentoController extends Controller
{
    public function index(){

        $spa = Spa::all()->first();
        if (Auth()->user()->role->id == 1) {
                $agendas = AgendaAtendimento::all(); 
                $servicos = AgendaAtendimento::all()->first(); 
                
                // foreach ($servicos->tiposervico as $servicos) {
                //         $servico = $servicos->servico->nome;
                // } 
                // dd($servico); 
        }elseif(Auth()->user()->role->id == 2)
        { 
                $agendas = AgendaAtendimento::where('localizacao_id',Auth()
                                                ->user()->posto->id)
                                                ->get();    
         }
        
        return view('agenda.index',compact('agendas','spa','servicos')); 
    }    


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
                    return  redirect()->route('agenda.index')->with('mensagem', 'Agendamento registado com sucesso ..!');

              	}

              	return  redirect()->route('agenda.index')->with('erro', 'Endereço não encontrado ..!');

           }

        public function update(Request $request)
        {
                //dd($request);
                $request->validate([
                        'nome' => 'required'
                        ]);
                $agenda = AgendaAtendimento::where('id',$request->agenda_id)->get()->first();
        
                if (isset($agenda)) {
                        $agenda->data_inicio = $request->data_inicio;
                        $agenda->data_fim = $request->data_fim;
                        $agenda->atendimento_inicio = $request->inicio_atendimento;
                        $agenda->atendimento_fim = $request->fim_atendimento;
                        $agenda->save();
                        $posto = isset(auth()->user()->posto) ? auth()->user()->posto->id : null;
                        Auditoria::create(['accao' =>"Alterou agendamento com referencia ". $request->agenda_id,'user_id'=>auth()->user()->id,'localizacao_id'=>$posto]);
                        return redirect()->route('agenda.index')->with('mensagem', 'Agendamento  Actualizado..!');
                }

                return redirect()->route('agenda.index')->with('erro', 'Agendamento do tipo de serviço não actualizado..!');
        }

        public function show($agenda_id){
                //dd(base64_decode($agenda_id));
                $agendas = AgendaAtendimento::where('id',base64_decode($agenda_id))->get(); 
                
                
                if (isset($agendas)) {
                        return view('agenda.show',compact('agendas'));
                }
        
                return redirect()->route('agenda.index');
        }


        public function tiposervico(Request $request)
        {
                //$tiposervico = TipoServico::where('id',$request[0])->get();
                $tiposervico = TipoServico::all();
                $dados = $request[0];
                //$dados = [1,34,4];
                return response()->json($dados);
        }
             	
}
