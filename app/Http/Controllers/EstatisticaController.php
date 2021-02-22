<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marcacao;
use App\Models\Localizacao;


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

        return view('estatistica.servico');
    }
}

