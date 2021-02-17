<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Localizacao;
use App\Models\Spa;
use App\Http\Helpers\AppHelper;

class LocalizacaoController extends Controller
{
    //
    	public function store(Request $request)
	{
           $request->validate([
                'provincia' => 'required',
                 'municipio' => 'required'
                 ]);
           $spa = Spa::where('id',$request->spa_id)->get()->first();
           if (isset($spa)) {
            $codigo = AppHelper::geraNumeroLocalizacao(count(Localizacao::all()));
          
		          $localizacao = new Localizacao();
              $localizacao->codigo = $codigo;
              $localizacao->spa_id = $spa->id;
              $localizacao->municipio_id  = $request->municipio;
              $localizacao->descricao = $request->descricao_local;
              $localizacao->rua = $request->rua;
              $localizacao->save();
        return  redirect()->route('spa.index')->with('mensagem', 'Endereço adicionado com sucesso ..!');
        
           }
           return  redirect()->route('spa.index')->with('erro', 'Endereço invalido. Não existe Spa ..!');
			



	}

    	public function update(Request $request)
	{
			$request->validate([
                'provincia' => 'required',
                 'municipio' => 'required'
                 ]);


			

		$localizacao = Localizacao::where('id',$request->localizacao_id)->get()->first();
           if (isset($localizacao)) {
         
             $localizacao->municipio_id  = $request->municipio;
             $localizacao->descricao = $request->descricao_local;
             $localizacao->rua = $request->rua;
             $localizacao->save();
                return  redirect()->route('spa.index')->with('mensagem', 'Endereço actualizado com sucesso ..!');
         	# code...
           }
           return  redirect()->route('spa.index')->with('erro', 'Endereço não encontrado ..!');
	}


	public function destroy($localizacao_id)
	{
       $localizacao = Localizacao::where('id',	base64_decode($localizacao_id))->get()->first();
	if (isset($localizacao)) {
		$localizacao->delete();
		 return  redirect()->route('spa.index')->with('mensagem', 'Endereço removido com sucesso ..!');
	}

	   return  redirect()->route('spa.index')->with('erro', 'Endereço não encontrado ..!');
	}
}
