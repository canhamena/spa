<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Localizacao;
use App\Models\Contacto;

class ContactoController extends Controller
{
    	public function store(Request $request)
	{
           $request->validate([
                'telefone' => 'required',
                'localizacao_id' => 'required'
                 ]);

           $localizacao = Localizacao::where('id',$request->localizacao_id)->get()->first();
        if (isset($localizacao)) {
          
		$contacto = new Contacto();
        $contacto->localizacao_id = $localizacao->id;
        $contacto->telefone  = $request->telefone;
        $contacto->telemovel = $request->telemovel;
        $contacto->email = $request->email;
        $contacto->facebook = $request->facebook;
        $contacto->whatsao = $request->whatsap;
        $contacto->descricao = $request->descricao;
        $contacto->save();
        return  redirect()->route('spa.index')->with('mensagem', 'Contacto adicionado com sucesso ..!');
         	# code...
           }
           return  redirect()->route('spa.index')->with('erro', 'Contacto invalido. Não existe Spa ..!');
			



	}

    	public function update(Request $request)
	{
			$request->validate([
                'telefone' => 'required',
                'localizacao_id'=>'required'
                 ]);


			

		$contacto = Contacto::where('id',$request->contacto_id)->get()->first();
           if (isset($contacto)) {
          
		
        $contacto->localizacao_id = $request->localizacao_id;
        $contacto->telefone  = $request->telefone;
        $contacto->telemovel = $request->telemovel;
        $contacto->email = $request->email;
        $contacto->whatsao = $request->whatsap;
        $contacto->descricao = $request->descricao;
        $contacto->save();
        return  redirect()->route('spa.index')->with('mensagem', 'Contacto adicionado com sucesso ..!');
         	# code...
           }
           return  redirect()->route('spa.index')->with('erro', 'Contacto invalido. Não existe Spa ..!');
			



	}


	public function destroy($contacto_id)
	{
		$contacto = Contacto::where('id',base64_decode($contacto_id))->get()->first();
	if (isset($contacto)) {
		$contacto->delete();
		 return  redirect()->route('spa.index')->with('mensagem', 'Contacto eliminado com sucesso ..!');
	}

	   return  redirect()->route('spa.index')->with('erro', 'Contacto não encontrado ..!');
	}
}
