<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo;
use Illuminate\Validation\Rule;

class TipoController extends Controller
{
     public function index(){
      $tipos = Tipo::all();
      return view('tipospa.index',compact('tipos'));

	}

	public function store(Request $request)
	{
		   $request->validate([
                 'nome' => 'required'
                 ]);

		    $tipo  = new Tipo();
		    $tipo->tipo = $request->nome;
		    $tipo->descricao = $request->descricao;
		    $tipo->save();

		    return redirect()->route('tipo.index')->with('mensagem', 'Tipo registado com sucesso ..!');
	}

	public function update(Request $request)
	{

		      $request->validate([
                 'nome' => 'required'
                 ]);

		      $tipo = Tipo::where('id',$request->tipo_id)->get()->first();

		      if (isset($tipo)) {
		      	
                $tipo->tipo = $request->nome;
		        $tipo->descricao = $request->descricao;
		        $tipo->save();
		        return redirect()->route('tipo.index')->with('mensagem', 'Tipo actualizado com sucesso ..!');
		       }

		       return redirect()->route('tipo.index')->with('mensagem', 'Tipo actualizado não encontrado..!');

	}
}
