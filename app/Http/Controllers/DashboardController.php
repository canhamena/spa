<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marcacao; 
use App\Models\Servico;
use DB;
use App\Http\Controllers\ReservaController;

class DashboardController extends Controller
{
    public function index()
    {   
        //buscando o estado da marcação por quantidade  
        $marcacao = Marcacao::where('estado', '=', 'M')->count();
        $atendida = Marcacao::where('estado', '=', 'A')->count();
        $cancelada = Marcacao::where('estado', '=', 'C')->count();
        $servico = Servico::all()->count();

        $dadosM = Marcacao::select(DB::raw('count(data_atendimento) as qtd'), 'estado','data_atendimento')->where('estado', '=', 'M')->groupBy('data_atendimento')->get();
        $dadosA = Marcacao::select(DB::raw('count(data_atendimento) as qtd'), 'estado','data_atendimento')->where('estado', '=', 'A')->groupBy('data_atendimento')->get();
        $dadosC = Marcacao::select(DB::raw('count(data_atendimento) as qtd'), 'estado','data_atendimento')->where('estado', '=', 'C')->groupBy('data_atendimento')->get();
        $eventos = array();

        //Juntando as consultas proveniente do banco de dados em um unico array de valores
        $dados = array();
        foreach ($dadosM as $M) {
            $elemM['qtd'] = $M['qtd'];
            $elemM['estado'] = $M['estado'];
            $elemM['data_atendimento'] = $M['data_atendimento'];
            array_push($dados, $elemM);
        }
        foreach ($dadosA as $A) {
            $elemA['qtd'] = $A['qtd'];
            $elemA['estado'] = $A['estado'];
            $elemA['data_atendimento'] = $A['data_atendimento'];
            array_push($dados, $elemA);
        }
       foreach ($dadosC as $C) {
            $elemC['qtd'] = $C['qtd'];
            $elemC['estado'] = $C['estado'];
            $elemC['data_atendimento'] = $C['data_atendimento'];
            array_push($dados, $elemC);
        }
    
        // tratando os dados para serem enviados ao calendario   
        foreach ($dados as $valor) {
            $elemento1['estado'] = $valor['estado'];
            if ($elemento1['estado'] == 'M') {
                $elemento['title'] = $valor['qtd'];
                $elemento['start'] = $valor['data_atendimento'];
                $elemento['url'] = $this->urlAction('index');
                $elemento['backgroundColor'] = '#00a65a';
                $elemento['borderColor'] = '#f56954';
                array_push($eventos, $elemento);  
            }else if($elemento1['estado'] == 'A'){
                $elemento['title']= $valor['qtd'];
                $elemento['start'] = $valor['data_atendimento'];
                $elemento['url'] = $this->urlAction('index');
                $elemento['backgroundColor'] = '#f39c12';
                $elemento['borderColor'] = '#f39c12';
                array_push($eventos, $elemento);
            }else if($elemento1['estado'] == 'C'){
                $elemento['title'] = $valor['qtd'];
                $elemento['start'] = $valor['data_atendimento'];
                $elemento['url'] = $this->urlAction('index');
                $elemento['backgroundColor'] = '#f56954';
                $elemento['borderColor'] = '#f56954';
                array_push($eventos, $elemento);
            }
        }
        return view('dashboard', compact('marcacao', 'atendida', 'cancelada', 'servico', 'eventos'));
    }

    public function urlAction($action){
        return url("/reserva"."/".$action);
    }
}
