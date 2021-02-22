<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marcacao;
use App\Models\TipoServico;
use App\Models\localizacao;
use App\Models\Spa;
use App\Models\Cliente;
use App\Http\Requests\StoreMarcacaoRequest;
use App\Http\Helpers\AppHelper;
use App\Models\MarcacaoTipoServico;
use App\Models\Auditoria;

class ReservaController extends Controller 
{
    public function index()
    {  
        if (Auth()->user()->role->id == 1) {
             $reservas = Marcacao::all();
           $provincias = \DB::select('select distinct(p.nome), p.nome as nome , p.id  as id from provincia p,localizacao l,municipio m where p.id = m.provincia_id and l.municipio_id = m.id');
          }elseif(Auth()->user()->role->id == 2)
         {   
            $reservas = Marcacao::where('localizacao_id',Auth()->user()->posto->id)->get();

            $provincias = \DB::select('select distinct(p.nome), p.nome as nome , p.id  as id from provincia p,localizacao l,municipio m where p.id = m.provincia_id and l.municipio_id = m.id and l.id = ?' ,[Auth()->user()->posto->id]);
        }

      
    	 $spa = Spa::get()->first();
         
    	 $tipo_servicos = TipoServico::Orderby('nome','asc')->get();
    	 return view('marcacao.index',compact('reservas','tipo_servicos','spa','provincias'));
    }

    public function store(StoreMarcacaoRequest $request)
    {
    	     $local = localizacao::Where('codigo',$request->localidade)->get()->first();
           if (isset( $local)) {
           
    	     if (count($request->tiposervico) != count($request->qtd_pessoa)) {
    	     	  	return  redirect()->route('reserva.index')->with('mensagem', 'Marcação não registada. a quantidade do campo tipo de serviço tem que ser igual a quantidade campo quantidade de pessoa ..!');
    	       }

              
              $marcacao = new Marcacao();
              $cliente = new Cliente();
              $cliente->nome = $request->nome;
              $cliente->email = $request->email;
              $cliente->telefone = $request->telefone;
              $cliente->save();

           

              $marcacao->data_atendimento = AppHelper::convertedmY2Ymd($request->data_atendimento);
              $marcacao->hora = $request->hora_atendimento;
              $marcacao->estado = "M";
              $marcacao->cliente_id = $cliente->id;
              $marcacao->localizacao_id = $local->id;
              $marcacao->save();

             for ($i=0; $i <count($request->tiposervico) ; $i++) { 
             	$marcaoa_tipo = new MarcacaoTipoServico();
             	$marcaoa_tipo->tipo_servico_id = $request->tiposervico[$i];
             	$marcaoa_tipo->quantidade = $request->qtd_pessoa[$i];
             	$marcaoa_tipo->marcacao_id = $marcacao->id;
             	$marcaoa_tipo->save();
              }
               $posto = isset(auth()->user()->posto) ? auth()->user()->posto->id : null;
               Auditoria::create(['accao' =>" Registou reserva do cliente ".$marcacao->cliente->nome,'user_id'=>auth()->user()->id,'localizacao_id'=>$posto]);
              	return  redirect()->route('reserva.index')->with('mensagem', 'Marcação registado com sucesso ..!');
              # code...
           }

           return  redirect()->route('reserva.index')->with('erro', 'Marcação não registado. Endereço não encontrado ..!');
    	    
    }

    public function update(Request $request)
    {
            $request->validate([
                'data_atendimento' => 'required',
                 'hora_atendimento' => 'required'
                 ]);
             
             $marcacao = Marcacao::where('id',$request->marcacao_id)->get()->first();

            if ($marcacao != null) {
                    $marcacao->data_atendimento = AppHelper::convertedmY2Ymd($request->data_atendimento);
                    $marcacao->hora = $request->hora_atendimento;
                    $marcacao->save();
                     $posto = isset(auth()->user()->posto) ? auth()->user()->posto->id : null;
                     Auditoria::create(['accao' =>" Actualizou reserva do cliente ".$marcacao->cliente->nome,'user_id'=>auth()->user()->id,'localizacao_id'=>$posto]);
                    return  redirect()->route('reserva.index')->with('mensagem', 'Marcação actualizada com sucesso ..!');
            }
                 return  redirect()->route('reserva.index')->with('erro', 'Marcação não encontrado ..!');
    }

      public function cancelar($marcacao_id)
    {
            
             
             $marcacao = Marcacao::where('id',base64_decode($marcacao_id))->get()->first();

            if ($marcacao != null) {
                    $marcacao->estado = 'C';
                    $marcacao->save();
                     $posto = isset(auth()->user()->posto) ? auth()->user()->posto->id : null;
                     Auditoria::create(['accao' =>"Cancelou reserva do cliente ".$marcacao->cliente->nome,'user_id'=>auth()->user()->id,'localizacao_id'=>$posto]);
                    return  redirect()->route('reserva.index')->with('mensagem', 'Marcação cancelada com sucesso ..!');
            }
                 return  redirect()->route('reserva.index')->with('erro', 'Marcação não encontrado ..!');
    }

     public function show($marcacao_id)
    {
            
              $marcacao = Marcacao::where('id',base64_decode($marcacao_id))->get()->first();
              
            if ($marcacao != null) {
                    
                    return  view('marcacao.show',compact('marcacao'));
              }
                 return  redirect()->route('reserva.index')->with('erro', 'Marcação não encontrado ..!');
    }
}
