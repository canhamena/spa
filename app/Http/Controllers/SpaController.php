<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spa;
use App\Models\Servico;
use App\Models\Provincia;
use App\Models\Municipio;
use App\Http\Requests\StoreSpaRequest;
use App\Http\Helpers\AppHelper;
use App\Models\Localizacao;
use App\Models\Contacto;
use App\Models\Tipo;
use App\Models\User;

class SpaController extends Controller
{
    public function index(){
        $spa = Spa::all()->first();
        $servicos = Servico::all();
        $provincias = Provincia::all();
        $spa_tipos = Tipo::all();
        $contactos = Contacto::all();
        $localizacaos = \DB::Select('select l.id as id, l.codigo as codigo  from localizacao l , contacto c where l.id != c.localizacao_id');
        if (Auth()->user()->role->id == 1) {
             $users = User::all();
        }elseif(Auth()->user()->role->id == 2)
        {
            $localizacao = Localizacao::where('id',Auth()->user()->posto->id)->get()->first();
            return view('spa.index_post',compact('spa','servicos','provincias','spa_tipos','contactos','localizacao'));
        }
        return view('spa.index',compact('spa','servicos','provincias','spa_tipos','contactos','localizacaos'));

	}

	public function store(StoreSpaRequest $request )
	{

		$spa = new Spa();
		$spa->nome = $request->nome;
		$storagepath = null;
		$spa->descricao = $request->descricao;
		$caminho = AppHelper::UPLOAD_FOLDER_SPA;
        $storagepath = empty($request->file('logo'))?  "" : $request->file('logo')->store($caminho);
		$spa->logotipo = $storagepath;
		$storagepath = empty($request->file('imagem'))? "" : $request->file('imagem')->store($caminho);
		$spa->imagem = $storagepath;
        $spa->save();

        $localizacao = new Localizacao();
        $codigo = AppHelper::geraNumeroLocalizacao(count(Localizacao::all()));
        $localizacao->spa_id = $spa->id;
        $localizacao->codigo = $codigo;
        $localizacao->municipio_id  = $request->municipio;
        $localizacao->descricao = $request->descricao;
        $localizacao->rua = $request->rua;
        $localizacao->save();
        $contacto = new Contacto();
        $contacto->telefone = $request->telefone;
        $contacto->telemovel= $request->telemovel;
        $contacto->email= $request->email;
        $contacto->facebook = $request->facebook;
        $contacto->whatsao = $request->whatsap;
        $contacto->localizacao_id =  $localizacao->id;
        $contacto->save();

        foreach ($request->tipo_servico as $servico) {
           $spa->tiposervico()->attach($servico);
         }

         foreach ($request->tipo_spa as $tipospa) {
             $spa->tipospa()->attach($tipospa);
         }

		    return  redirect()->route('spa.index')->with('mensagem', 'Spa registado com sucesso ..!');
	}


	public function popular_municipio(Request $request)
	{
		   $municicpios = Municipio::where('provincia_id',$request[0])->get();
           return response()->json($municicpios);
	}

	public function update(Request $request)
	{
			$request->validate([
                'nome' => 'required',
                 'tipo_servico' => 'required'
                 ]);
  
         

			$spa = Spa::where('id',$request->spa_id)->get()->first();

			if ($spa->exists()){
			   $spa->nome = $request->nome;
		       $spa->descricao = $request->descricao;
		       $caminho = AppHelper::UPLOAD_FOLDER_SPA;
               $storagepath = empty($request->file('logo'))?  $spa->logotipo : $request->file('logo')->store($caminho);
		       $spa->logotipo = $storagepath;
		       $storagepath = empty($request->file('imagem'))? $spa->imagem : $request->file('imagem')->store($caminho);
		       $spa->imagem = $storagepath;
               $spa->save();
               $spa->tiposervico()->detach();
               $spa->tiposervico()->delete();
               $spa->tipospa()->detach();
               $spa->tipospa()->delete();

               foreach ($request->tipo_servico as $servico) {
                        $spa->tiposervico()->attach($servico);
                 }

                  foreach ($request->tipo_spa as $tipospa) {
                     $spa->tipospa()->attach($tipospa);
                }
               return  redirect()->route('spa.index')->with('mensagem', 'Spa actualizado com sucesso ..!');
				
			}

			return  redirect()->route('spa.index')->with('erro', 'Spa não encontrado ..!');
	}


  public function popular_localidade(Request $request)
  {
            //$municicpios = Municipio::where('provincia_id',$request[0])->get();
           //$localidade = Localizacao::all();
           $localidade = \DB::SELECT('select  m.nome as nome , l.id as id, l.descricao as descricao, l.rua as rua ,l.codigo as codigo from provincia p,localizacao l,municipio m where p.id = m.provincia_id and l.municipio_id = m.id and p.id = ?',[$request[0]]);
           return response()->json($localidade);
  }



}
