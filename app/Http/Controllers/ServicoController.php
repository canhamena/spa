<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreServicoRequest;
use App\Models\Servico;
use App\Models\TipoServico;
use App\Http\Helpers\AppHelper;
use Illuminate\Validation\Rule;
use App\Models\Auditoria;

class ServicoController extends Controller
{
    public function index()
    {

    	$servicos = Servico::OrderBy('id','desc')->get();
        
    	return view('servico.index',compact('servicos'));
    }


    public function store(StoreServicoRequest $request)
    {
    	$servico = new Servico();
    	/* upload de imagem */
        $caminho =AppHelper::UPLOAD_FOLDER_SERVICO;
        $storagepath = $request->file('imagem')->store($caminho);
        $servico->nome = $request->nome;
    	$servico->imagem = $storagepath;
    	$servico->descricao = $request->descricao;
    	
            
    	$servico->save();
        $posto = isset(auth()->user()->posto) ? auth()->user()->posto->id : null;
        Auditoria::create(['accao' =>"Registou serviço ".$servico->nome,'user_id'=>auth()->user()->id,'localizacao_id'=>$posto]);

    	return redirect()->route('servico.index')->with('mensagem', 'Serviço registado..!');
    }

    public function update(Request $request)
    {
    	$request->validate([
                'nome' => 'required'
                 ]);
    	$servico = Servico::where('id',$request->servico_id)->get()->first();
    
    	if (isset($servico)) {
    		 $caminho =AppHelper::UPLOAD_FOLDER_SERVICO;
             $storagepath = empty($request->imagem) ? $servico->imagem : $request->file('imagem')->store($caminho);
             $servico->nome = $request->nome;
    	     $servico->imagem = $storagepath;
    	     $servico->descricao = $request->descricao;
    	     $servico->save();
              $posto = isset(auth()->user()->posto) ? auth()->user()->posto->id : null;
             Auditoria::create(['accao' =>"Registou serviço ".$servico->nome,'user_id'=>auth()->user()->id,'localizacao_id'=>$posto]);
    	     return redirect()->route('servico.index')->with('mensagem', 'Serviço Actualizado..!');
    	}

    	 return redirect()->route('servico.index')->with('erro', 'Serviço não actualizado..!');
    }

    public function destroy($servico_id)
    {
    	$servico = Servico::Where('id',base64_decode($servico_id))->get()->first();

    	if (isset($servico)) {
    		$nome = $servico->nome;
            $servico->delete();
            $posto = isset(auth()->user()->posto) ? auth()->user()->posto->id : null;
            Auditoria::create(['accao' =>"Elimonou serviço ".$nome,'user_id'=>auth()->user()->id,'localizacao_id'=>$posto]);
    		return redirect()->route('servico.index')->with('mensagem', 'Serviço Eliminado..!');
    	}

    	 return redirect()->route('servico.index')->with('erro', 'Serviço não actualizado..!');
    	
    }

    public function show($servico_id)
    {
    	$servico = Servico::Where('id',base64_decode($servico_id))->get()->first();

        if (isset($servico)) {
    		
            return view('servico.show',compact('servico'));
    	}

    	 return redirect()->route('servico.index')->with('erro', 'Serviço não actualizado..!');
    	
    }
}
