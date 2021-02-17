<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstatisticaController extends Controller
{
    //Metodo responsavel por mostrar os dados estatistico das marcações 
    public function marcacao(){

        return view('estatistica.marcacao');
    }

    //Metodo responsavel por mostrar dados estatistico so os serviços so spa
    public function servico(){

        return view('estatistica.servico');
    }
}
