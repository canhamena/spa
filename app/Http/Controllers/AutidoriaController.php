<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auditoria;

class AutidoriaController extends Controller
{
	public function index()
	{

        if (Auth()->user()->role->id == 1) {
             $auditorias = Auditoria::Orderby('id','desc')->get();
          }elseif(Auth()->user()->role->id == 2)
         {   
            $auditorias = Auditoria::where('localizacao_id',Auth()->user()->posto->id)->Orderby('id','desc')->get();

            
        }

		
		return view('auditoria.index',compact('auditorias'));
	}
}
