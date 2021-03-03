<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Helpers\AppHelper;
use App\Http\Requests\StoreServicoRequest;
use App\Models\TipoServico;
use App\Models\Servico;
use App\Models\Auditoria;
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
             $posto = isset(auth()->user()->posto) ? auth()->user()->posto->id : null;
              Auditoria::create(['accao' =>"Registou Tipo de serviço   ".$tipoServico->nome,'user_id'=>auth()->user()->id,'localizacao_id'=>$posto]);

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
                  $posto = isset(auth()->user()->posto) ? auth()->user()->posto->id : null;
                  Auditoria::create(['accao' =>"Actualizou Tipo de serviço   ".$tipoServico->nome,'user_id'=>auth()->user()->id,'localizacao_id'=>$posto]);

               }

               return redirect()->route('servico.show',base64_encode($request->servico_id))->with('mensagem', 'Tipo de serviço actualizado..!');
            

         }




         public function destroy_servico($tipo_servico)
         {
            $tiposervico = TipoServico::where('id',base64_decode($tipo_servico))->get()->first();

            if ($tiposervico->exists()) {
                $id = $tiposervico->servico_id;
                 $nome = $tiposervico->nome;
                $tiposervico->delete();
                 $posto = isset(auth()->user()->posto) ? auth()->user()->posto->id : null;
                Auditoria::create(['accao' =>"Eliminou Tipo de serviço   ".$nome,'user_id'=>auth()->user()->id,'localizacao_id'=>$posto]);
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
             $posto = isset(auth()->user()->posto) ? auth()->user()->posto->id : null;

              Auditoria::create(['accao' =>"Registou Tipo de serviço   ".$tipoServico->nome,'user_id'=>auth()->user()->id,'localizacao_id'=>$posto]);

             return redirect()->route('tiposervico.index')->with('mensagem', 'Tipo de serviço registado..!');
       }
      }


      public function destroy($tipoServico_id)
      {

             $tiposervico = TipoServico::where('id',base64_decode($tipoServico_id))->get()->first();

            if ($tiposervico->exists()) {
                $nome =  $tiposervico->nome;
                $tiposervico->delete();
                $posto = isset(auth()->user()->posto) ? auth()->user()->posto->id : null;
                 Auditoria::create(['accao' =>"Elimonou Tipo de serviço   ".$nome,'user_id'=>auth()->user()->id,'localizacao_id'=>$posto]);
                return redirect()->route('tiposervico.index')->with('mensagem', 'Tipo de serviço eliminado .!');

            }

               return redirect()->route('tiposervico.index')->with('mensagem', 'Tipo de serviço não encontrado .!');

      }

      public function popular_tiposervico(Request $request)
      {
           $tiposervico = TipoServico::where('servico_id',$request[0])->get();
           $sql=\DB::SELECT('select DISTINCT(tp.id) ,tp.id as id , tp.nome as nome, SUM(mtp.quantidade) as qtd,a.qtd_cliente qtd_cliente from servico s, tipo_servico tp, agendaatendimento_tiposervico ats, agendaatendimento a , marcacao_tipo_servico mtp, marcacao m where s.id = tp.servico_id and ats.tipo_servico_id = tp.id and a.id = ats.agenda_atendimento_id and s.id = ? and a.localizacao_id = ? and a.id = m.agenda_id and m.id = mtp.marcacao_id and  mtp.tipo_servico_id = tp.id and a.data_fim>=?  GROUP by tp.id HAVING qtd <qtd_cliente',[$request[0],$request[1],date('Y-m-d')]);
                         /*->join('tiposervico','servico.id','=','tiposervico.servico_id')
                         join('agendaatendimento_tiposervico','agendaatendimento_tiposervico.tiposervico_id','=','tiposervico.id')
                         ->join('agendaatendimento','agendaatendimento.id','=','agendaatendimento_tiposervico.agenda_atendimento_id')
                          ->where('agendaatendimento.localizacao_id', '=',$dados[1])
                          ->where('agendaatendimento.data_fim', '>=',date('Y-m-d'))
                          ->where('servico.id', '=',$request[0])->get();
           /*$sql=\DB::table('agendaatendimento')
                     ->join('agendaatendimento_tiposervico', 'agendaatendimento.id', '=', 'agendaatendimento_tiposervico.agenda_atendimento_id')
                     ->join('tiposervico')
                    ->where('agendaatendimento.localizacao_id', '=',$dados[1])
                    ->where('agendaatendimento.data_fim', '>=',date('Y-m-d'))
                    ->where('agendaatendimento_tiposervico.tipo_servico_id','=',$dados[0])
                    ->get()->first();*/
         
           return response()->json($sql);
      }
}
