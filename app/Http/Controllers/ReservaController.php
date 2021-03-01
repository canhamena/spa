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
use App\Models\TipoServicoPagamento;

class ReservaController extends Controller 
{
    public function index()
    {  
     
        if (Auth()->user()->role->id == 1) {
             $reservas = Marcacao::OrderBy('id','desc')->get();
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
          
           $horas = \DB::SELECT('SELECT m.hora as hora FROM marcacao m , marcacao_tipo_servico mt WHERE m.id = mt.marcacao_id and m.agenda_id = ? and mt.tipo_servico_id = ? and m.hora = ?',[$request->agenda_id,$request->tiposervico,$request->data_atendimento]);
           if (isset($horas)) {
                 return  redirect()->route('reserva.index')->with('erro', 'Já existe uma  reserva com esse horário..!');
           }
          
    	     $local = localizacao::Where('id',$request->localidade)->get()->first();
           if (isset( $local)) {
           
              $marcacao = new Marcacao();
              $cliente = new Cliente();
              $cliente->nome = $request->nome;
              $cliente->email = $request->email;
              $cliente->telefone = $request->telefone;
              $cliente->save();

          
              $marcacao->data_atendimento = $request->data_atendimento;
              $marcacao->hora = $request->hora_atendimento;
              $marcacao->estado = "M";
              $marcacao->cliente_id = $cliente->id;
              $marcacao->localizacao_id = $local->id;
              $marcacao->agenda_id = $request->agenda_id;
              $marcacao->save();

             
             	$marcaoa_tipo = new MarcacaoTipoServico();
             	$marcaoa_tipo->tipo_servico_id = $request->tiposervico;
             	$marcaoa_tipo->quantidade = $request->qtd_pessoa;
             	$marcaoa_tipo->marcacao_id = $marcacao->id;
             	$marcaoa_tipo->save();
              
               $posto = isset(auth()->user()->posto) ? auth()->user()->posto->id : null;
               Auditoria::create(['accao' =>" Registou reserva do cliente ".$marcacao->cliente->nome,'user_id'=>auth()->user()->id,'localizacao_id'=>$posto]);
              	return  redirect()->route('reserva.index')->with('mensagem', 'Reserva registada com sucesso ..!');
              # code...
           }

           return  redirect()->route('reserva.index')->with('erro', 'Reserva não registado. Endereço não encontrado ..!');
    	    
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
                    $tipopagamentos = \DB::table('tipo_pagamento')->get();
                    return  view('marcacao.show',compact('marcacao','tipopagamentos'));
              }
                 return  redirect()->route('reserva.index')->with('erro', 'Marcação não encontrado ..!');
    }
}
