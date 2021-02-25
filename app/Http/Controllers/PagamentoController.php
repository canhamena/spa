<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagamento;
use App\Http\Helpers\AppHelper;
use Illuminate\Support\Facades\Auth;
use App\Models\TipoServico;
use App\Models\Marcacao;
use App\Models\TipoServicoPagamento;
use App\Models\Auditoria;

class PagamentoController extends Controller
{

	    public function index()
	    {
	    	  if (Auth::user()->role->id == 1) {
	    	   	   $pagamentos = Pagamento::Orderby('id','desc')->get();
	    	   	
	    	   }elseif(Auth::user()->role->id == 2)
	    	   {
	    	   	  
	    	   	 $pagamentos = Pagamento::where('localizacao_id', Auth::user()->posto->id)->Orderby('id','desc')->get();

	    	   }
                $tipopagamentos = \DB::table('tipo_pagamento')->get();
		      return view('pagamento.index',compact('pagamentos','tipopagamentos'));
	    }


        public function store(Request $request)
        {
	          $request->validate([
                'nome' => 'required',
                'tipo_pegamento' => 'required',
                   'data_pagamento' => 'required',
                   'refrencia' => 'nullable|unique:pagamento', 
                 ]);

	          $pagamento = new Pagamento();
	          $pagamento->nome_cliente = $request->nome;
	          $pagamento->numero_pagamento
	           = AppHelper::geraNumeroPagamento(count(Pagamento::all()));
	          $pagamento->user_id = Auth::user()->id;
	          $pagamento->localizacao_id = isset(Auth::user()->posto->id) ? Auth::user()->posto->id : null;
	          $pagamento->data_pagamento = AppHelper::convertedmY2Ymd($request->data_pagamento);
	          $pagamento->referencia = $request->referencia;
	          $pagamento->tipopagamento_id = $request->tipo_pegamento;
	          $pagamento->save();
	        	$posto = isset(auth()->user()->posto) ? auth()->user()->posto->id : null;
	          Auditoria::create(['accao' =>" Registou pagamento com nº  ".$pagamento->numero_pagamento,'user_id'=>auth()->user()->id,'localizacao_id'=>$posto]);
              
	          return redirect()->route('pagamento.factura',base64_encode($pagamento->id));
            
	        
        }



        public function create($pagamento_id)
        {
        	
		      

	         $pagamento = Pagamento::where('id',base64_decode($pagamento_id))->get()->first();
   
	     if (isset($pagamento)) {
               $tipo_servicos = TipoServico::Orderby('nome','asc')->get();
                
             
              return view('pagamento.create_factura',compact('pagamento','tipo_servicos'));
	     }

	     return redirect()->route('pagamento.index')->with('mensagem', 'pagamento não encontrado');

       }


       public function store_factura(Request $request)
       {
	        $request->validate([
                   'tipo_servico' => 'required',
                   'qtd' => 'required',
                  ]);

              $pagamento = Pagamento::where('id',$request->pagamento_id)->get()->first();
              if (!isset($pagamento)) {
              	  return redirect()->route('pagamento.index')->with('mensagem', 'pagamento não encontrado');
              }
         
	        $tiposervicopagamento = new TipoServicoPagamento();
	        $tiposervicopagamento->tipo_servico_id = $request->tipo_servico;
	        $tiposervicopagamento->qtd = $request->qtd;
	        $tiposervicopagamento->pagamento_id = $request->pagamento_id;
	        $tiposervicopagamento->save();
	         $posto = isset(auth()->user()->posto) ? auth()->user()->posto->id : null;

	         Auditoria::create(['accao' =>" Registou linha de factura do pagamento  nº  ".$pagamento->numero_pagamento,'user_id'=>auth()->user()->id,'localizacao_id'=>$posto]);

	       

	        return redirect()->route('pagamento.factura',base64_encode($request->pagamento_id))->with('mensagem', 'tipo de serviço adicionado á factura');

        }

        public function factura_update(Request $request)
        {
	        $request->validate([
                'tipo_servico' => 'required',
                'qtd' => 'required']);

	        $tiposervico = TipoServicoPagamento::where('id',$request->pagamentoservico_id)->get()->first();
	        if (isset($tiposervico)) {
	        	$pagamento = Pagamento::where('id',$tiposervico->pagamento_id)->get()->first();
              if (!isset($pagamento)) {
              	  return redirect()->route('pagamento.index')->with('mensagem', 'pagamento não encontrado');
              }

	        	$tiposervico->tipo_servico_id = $request->tipo_servico;
	        	$tiposervico->qtd = $request->qtd;
	        	$tiposervico->save();
	        	$posto = isset(auth()->user()->posto) ? auth()->user()->posto->id : null;
	        	Auditoria::create(['accao' =>" Actualizou linha de factura do pagamento  nº  ".$pagamento->numero_pagamento,'user_id'=>auth()->user()->id,'localizacao_id'=>$posto]);

	        	return redirect()->route('pagamento.factura',base64_encode($tiposervico->pagamento_id))->with('mensagem', 'Linha de pagamento actualizado ..!');
	        	
	        }


              return redirect()->route('pagamento.factura',base64_encode($tiposervico->pagamento_id))->with('erro', 'Linha de pagamento não encontrado ..!');

        }

        public function factura_delete($pagamentoservico_id)
        {
	        $tiposervico = TipoServicoPagamento::where('id',base64_decode($pagamentoservico_id))->get()->first();
	        if (isset($tiposervico)) {
	        	$pagamento = Pagamento::where('id',$tiposervico->pagamento_id)->get()->first();
              if (!isset($pagamento)) {
              	  return redirect()->route('pagamento.index')->with('mensagem', 'pagamento não encontrado');
              }
	        	$tiposervico->delete();
	        	$posto = isset(auth()->user()->posto) ? auth()->user()->posto->id : null;
	        	Auditoria::create(['accao' =>" Elimonou linha de factura do pagamento  nº  ".$pagamento->numero_pagamento,'user_id'=>auth()->user()->id,'localizacao_id'=>$posto]);


	        	return redirect()->route('pagamento.factura',base64_encode($tiposervico->pagamento_id))->with('mensagem', 'Linha de pagamento eliminado ..!');
	        	
	        }


              return redirect()->route('pagamento.factura',base64_encode($tiposervico->pagamento_id))->with('erro', 'Linha de pagamento não encontrado ..!');
        }

        public function show($pagamento_id)
        {
        	$pagamento = Pagamento::where('id',base64_decode($pagamento_id))->get()->first();
   
	     if (isset($pagamento)) {
               $tipo_servicos = TipoServico::Orderby('nome','asc')->get();
         
              return view('pagamento.show',compact('pagamento','tipo_servicos'));
	     }

	     return redirect()->route('pagamento.index')->with('mensagem', 'pagamento não encontrado');

        }

        public function destroy($pagamento_id)
        {
        	$pagamento = Pagamento::where('id',base64_decode($pagamento_id))->get()->first();
   
	     if (isset($pagamento)) {
	     	  $tiposervico = TipoServicoPagamento::where('pagamento_id',$pagamento->id)->get()->first();
              if (isset($tiposervico)) {
              	$tiposervico->delete();
              }
              $pagamento->delete();
              $posto = isset(auth()->user()->posto)? auth()->user()->posto->id : null;
               Auditoria::create(['accao' =>" Eliminou pagamento com nº de factura ".$pagamento->numero_pagamento,'user_id'=>auth()->user()->id,'localizacao_id'=>$posto]);

              return redirect()->route('pagamento.index')->with('mensagem', 'pagamento eliminado com sucesso');
	     }

	     return redirect()->route('pagamento.index')->with('mensagem', 'pagamento não encontrado');

        }



         public function pagamento_marcacao($reserva_id)
       {
	        
               $marcacao = Marcacao::where("id",base64_decode($reserva_id))->get()->first();
	        if (isset($marcacao)) {

	        	    $pagamento = new Pagamento();
	                $pagamento->nome_cliente = $marcacao->cliente->nome;
	                $pagamento->numero_pagamento
	                  = AppHelper::geraNumeroPagamento(count(Pagamento::all()));
	                $pagamento->valor = 0;
	                $pagamento->user_id = Auth::user()->id;
	                $pagamento->save();

                   foreach ($marcacao->marcacaoservico as $servico) {
                   	    $tiposervicopagamento = new TipoServicoPagamento();
	                    $tiposervicopagamento->tipo_servico_id = $servico->tiposervico->id;
	                    $tiposervicopagamento->qtd = $servico->quantidade;
	                    $tiposervicopagamento->pagamento_id = $pagamento->id;
	                    $tiposervicopagamento->save();
	                }
	                $marcacao->estado = "A"; 
	                $marcacao->save();

                   return redirect()->route('pagamento.index')->with('mensagem', 'pagamento efectuado com sucesso');
	        	
	        }


	             return redirect()->route('reserva.index')->with('erro', 'pagamento não pode ser feito');
	        
	        }



}
