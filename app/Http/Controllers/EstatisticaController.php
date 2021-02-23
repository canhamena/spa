<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marcacao;
use App\Models\Localizacao;
use App\Models\Servico;
use App\Models\Spa;
use Illuminate\Support\Facades\DB;


class EstatisticaController extends Controller
{
    //Metodo responsavel por mostrar os dados estatistico das marcações 
    public function marcacao(){
    	$marcacao = new Marcacao();
         $marcacao->GraficoGeral();
         $atendidos = $marcacao->mesatendico;
         $cancelados = $marcacao->mescancelado;
         $pedentes = $marcacao->mespedente;
         $postos = Localizacao::all();
         $anos = Marcacao::anos();
         $titulo = "Reservas de ".date('Y');
       
         return view('estatistica.marcacao', compact('atendidos','cancelados','pedentes','postos','anos','titulo'));
    }

    public function filtragem_marcacao(Request $request)
    {
    	//var_dump($request->all());
    	//exit();
    	$marcacao = new Marcacao();
    	if (empty($request->ano) && empty($request->posto) ) {
    		 return redirect()->route('estatistica.marcacao');
    	}
    	    $marcacao->GraficoFiltro($request->posto,$request->ano);
            $titulo = (empty($request->ano) ? "Reservas do posto  ".$request->posto." em ".date('Y') :( empty($request->posto) ?  "Reservas de ".$request->ano : "Reservas do posto  ".$request->posto." em ".$request->ano));
             $atendidos = $marcacao->mesatendico;
             $cancelados = $marcacao->mescancelado;
             $pedentes = $marcacao->mespedente;
             $postos = Localizacao::all();
             $anos = Marcacao::anos();

           
             return view('estatistica.marcacao', compact('atendidos','cancelados','pedentes','postos','anos','titulo'));

    }

    //Metodo responsavel por mostrar dados estatistico so os serviços so spa
    public function servico(){


        $quantidades = array();
        $servicos = Servico::Orderby('nome','asc')->get();

        $quantidade = 0;
        foreach ($servicos as $key) {
        	$dado = DB::SELECT("SELECT count(*) as qtd  FROM servico s LEFT join tipo_servico ts on ts.servico_id = s.id inner join tipo_servico_pagamento tsp on ts.id = tsp.tipo_servico_id where s.id = ?", [$key->id]);
        	   $quantidades[$key->id] = $dado[0]->qtd;
        	   $quantidade += $dado[0]->qtd;
        }

          $postos = Localizacao::all();
          $dados = Spa::get()->first(); 
          $anos = isset($dados) ? date('Y',strtotime($dados->created_at)) : date('Y');
          return view('estatistica.servico',compact('servicos','quantidades','quantidade','postos','anos'));
    }


      public function filtragem_servico(Request $request){
      	    if (empty($request->ano) && empty($request->posto) ) {
    		   return redirect()->route('estatistica.servico');
    	    }
        $quantidades = array();
        $servicos = Servico::Orderby('nome','asc')->get();
        $quantidade = 0;
       if (empty($request->ano) && !empty($request->posto) ) {
       	$ano = date('Y');
       	     foreach ($servicos as $key) {
        	$dado = DB::SELECT("SELECT count(*) as qtd  FROM servico s LEFT join tipo_servico ts on ts.servico_id = s.id inner join tipo_servico_pagamento tsp on ts.id = tsp.tipo_servico_id inner join pagamento p on p.id = tsp.pagamento_id where s.id = ? and YEAR(tsp.created_at) = ? and p.localizacao_id = ? ", [$key->id,$ano,$request->posto]);
        	$quantidades[$key->id] = $dado[0]->qtd;
        	$quantidade += $dado[0]->qtd;
        	
        }
       }elseif(!empty($request->ano) && !empty($request->posto)){
                foreach ($servicos as $key) {
        	$dado = DB::SELECT("SELECT count(*) as qtd  FROM servico s LEFT join tipo_servico ts on ts.servico_id = s.id inner join tipo_servico_pagamento tsp on ts.id = tsp.tipo_servico_id inner join pagamento p on p.id = tsp.pagamento_id where s.id = ? and YEAR(tsp.created_at) = ? and p.localizacao_id = ? ", [$key->id,$request->ano,$request->posto]);
        	     $quantidades[$key->id] = $dado[0]->qtd;
        	    $quantidade += $dado[0]->qtd;}
        	
        }elseif(!empty($request->ano) && empty($request->posto)){
        	 foreach ($servicos as $key) {
        	$dado = DB::SELECT("SELECT count(*) as qtd  FROM servico s LEFT join tipo_servico ts on ts.servico_id = s.id inner join tipo_servico_pagamento tsp on ts.id = tsp.tipo_servico_id inner join pagamento p on p.id = tsp.pagamento_id where s.id = ? and YEAR(tsp.created_at) = ?  ", [$key->id,$request->ano]);
        	     $quantidades[$key->id] = $dado[0]->qtd;
        	    $quantidade += $dado[0]->qtd;}
       }
        
        
        return view('estatistica.servico',compact('servicos','quantidades','quantidade'));
    }
}

