<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo;
use App\Models\Auditoria;
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
		    $posto = isset(auth()->user()->posto) ? auth()->user()->posto->id : null;
		    Auditoria::create(['accao' =>"Registou Tipo de Spa   ".$tipo->tipo,'user_id'=>auth()->user()->id,'localizacao_id'=>$posto]);

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
		          $posto = isset(auth()->user()->posto) ? auth()->user()->posto->id : null;
		         Auditoria::create(['accao' =>"Actualizou Tipo de Spa   ".$tipo->tipo,'user_id'=>auth()->user()->id,'localizacao_id'=>$posto]);
		        return redirect()->route('tipo.index')->with('mensagem', 'Tipo actualizado com sucesso ..!');
		       }

		       return redirect()->route('tipo.index')->with('mensagem', 'Tipo actualizado não encontrado..!');

	}
}
