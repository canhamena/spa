<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Helpers\AppHelper;
use App\Http\Requests\StoreServicoRequest;
use App\Models\TipoServico;
use App\Models\Servico;
use Illuminate\Validation\Rule;
use App\Http\Requests\UpdateTipoServicoRequest;

class TipoServicoController extends Controller
{
    

    public function index()
    {
        $tiposervicos = TipoServico::OrderBy('id','desc')->get();
        $servicos = Servico::OrderBy('nome','asc')->get();
        return view('tiposervico.index', compact('tiposervicos','servicos')); 
    }



    public function store_show_servico(StoreServicoRequest $request)
    {
        $servico = Servico::where('id',$request->servico_id)->get()->first();

        if($servico->exists()){

             $tipoServico = new TipoServico();
             $tipoServico->nome = $request->nome;
             $tipoServico->descricao = $request->descricao;
             $tipoServico->preco = AppHelper::converteParaReal($request->preco);
             $caminho = AppHelper::UPLOAD_FOLDER_TIPOSERVICO;
             $storagepath = $request->file('imagem')->store($caminho);
             $tipoServico->imagem = $storagepath;
             $tipoServico->servico_id  = $request->servico_id;
             $tipoServico->save();

             return redirect()->route('servico.show',base64_encode($servico->id))->with('mensagem', 'Tipo de serviço registado..!');
       }
      }


        public function update_servico(Request $request ){

            $request->validate([
                'nome' => 'required',
                 'preco' => 'required'
                 ]);
            
               $tiposervico = TipoServico::where('id',$request->tiposervico_id)->get()->first();

               if ($tiposervico->exists()) {
                  $tiposervico->nome = $request->nome;
                  $tiposervico->descricao = $request->descricao;
                  $tiposervico->preco = AppHelper::converteParaReal($request->preco); 
                  $caminho = AppHelper::UPLOAD_FOLDER_TIPOSERVICO;
                  $storagepath = empty($request->imagem) ? $tiposervico->imagem : $request->file('imagem')->store($caminho) ;
                  $tiposervico->imagem = $storagepath;

                  $tiposervico->save();

               }

               return redirect()->route('servico.show',base64_encode($request->servico_id))->with('mensagem', 'Tipo de serviço actualizado..!');
            

         }




         public function destroy_servico($tipo_servico)
         {
            $tiposervico = TipoServico::where('id',base64_decode($tipo_servico))->get()->first();

            if ($tiposervico->exists()) {
                $id = $tiposervico->servico_id;
                $tiposervico->delete();
                return redirect()->route('servico.show',base64_encode($id))->with('mensagem', 'Tipo de serviço eliminado.!');

            }

               return redirect()->route('dashboard')->with('mensagem', 'Tipo de serviço não encontrado.!');
         }



         /***************************** tipo de servico *******************************/

  public function store(StoreServicoRequest $request)
    {
        $servico = Servico::where('id',$request->servico_id)->get()->first();

        if($servico->exists()){

             $tipoServico = new TipoServico();
             $tipoServico->nome = $request->nome;
             $tipoServico->descricao = $request->descricao;
             $tipoServico->preco = AppHelper::converteParaReal($request->preco);
             $caminho = AppHelper::UPLOAD_FOLDER_TIPOSERVICO;
             $storagepath = $request->file('imagem')->store($caminho);
             $tipoServico->imagem = $storagepath;
             $tipoServico->servico_id  = $request->servico_id;
             $tipoServico->save();

             return redirect()->route('tiposervico.index')->with('mensagem', 'Tipo de serviço registado..!');
       }
      }


      public function destroy($tipoServico_id)
      {

             $tiposervico = TipoServico::where('id',base64_decode($tipoServico_id))->get()->first();

            if ($tiposervico->exists()) {
                $tiposervico->delete();
                return redirect()->route('tiposervico.index')->with('mensagem', 'Tipo de serviço eliminado .!');

            }

               return redirect()->route('tiposervico.index')->with('mensagem', 'Tipo de serviço não encontrado .!');

      }

      public function popular_tiposervico(Request $request)
      {
           $tiposervico = TipoServico::where('servico_id',$request[0])->get();
           return response()->json($tiposervico);
      }
}
