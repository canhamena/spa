<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marcacao;
use App\Models\Reserva;
use App\Models\Pagamento;
use App\Models\Servico;
use App\Models\TipoServico;
use App\Models\Spa;
use App\Models\User;
use App\Models\Tipo;
use App\Models\Provincia;
use App\Models\Municipio;
use App\Models\Localizacao;
use App\Models\Contacto;
use App\Models\Auditoria;
use App\Models\Role;
use App\Models\AgendaAtendimento;
use App\Models\AgendaAtendimentoTipoServico;
use PDF;
use App\Http\Helpers\AppHelper;
use DB;

class PdfController extends Controller
{
    //

    //concluido
    public function utilizador()
    {
    	if (Auth()->user()->role->id == 1) {
             $users = User::OrderBy('name','asc')->get();

        }elseif(Auth()->user()->role->id == 2) 
        {   $users = User::where('localizacao_id',Auth()->user()->posto->id)->OrderBy('name','asc')->get();
           
        }


    	$pdf = PDF::loadView('pdf.utilizador',compact('users'))->setPaper('a3',"landscape");
         $pdf->getDOMPdf()->set_option('isPhpEnabled', true);
        return $pdf->stream();
    	
    }

    //concluido
    public function reserva(Request $request) 
    {
        if (!empty($request->data)) {
            if (Auth()->user()->role->id == 1) {
                $data  = strlen($request->data) > 0 ? AppHelper::convertedmY2Ymd($request->data)
                : null;
                $data_v =  $data->format('Y-m-d');
                
                $reservas = \DB::select('SELECT * 
                                         FROM marcacao m, cliente c
                                         WHERE c.id=m.cliente_id
                                         AND m.created_at LIKE ? 
                                         ORDER BY c.nome ASC',[$data_v.'%']);

                $dizer = " Reservas em ".$data->format('d-m-Y');

                print_r($dizer);
    
            }elseif(Auth()->user()->role->id == 2)
            {   
                //$reservas = Marcacao::join('cliente', 'cliente.id', '=', 'marcacao.cliente_id')->where('localizacao_id',Auth()->user()->posto->id)->OrderBy('name','asc')->get();
                $data  = strlen($request->data) > 0 ? AppHelper::convertedmY2Ymd($request->data)
                : null;
                $data_v =  $data->format('Y-m-d'); 
                $reservas = \DB::select('SELECT * 
                                         FROM marcacao m, cliente c
                                         WHERE c.id=m.cliente_id
                                         AND m.created_at LIKE ? 
                                         AND m.localizacao_id= ?
                                         ORDER BY c.nome ASC',[$data_v.'%',Auth()->user()->posto->id]);
                $dizer = " Reservas em ".$data->format('d-m-Y');
            } 
        }elseif (empty($request->data)) {
            $reservas = \DB::select('SELECT * 
                                    FROM marcacao m, cliente c
                                    WHERE c.id=m.cliente_id
                                    ORDER BY c.nome ASC');
            $dizer = 'RESERVAS';
        }
    
    	$pdf = PDF::loadView('pdf.reserva',compact('reservas','dizer'))->setPaper('a3',"landscape");
        $pdf->getDOMPdf()->set_option('isPhpEnabled', true);
        return $pdf->stream();
    }

    //Concluida
    public function pagamento()
    {
    	if (Auth()->user()->role->id == 1) {
             $pagamentos = Pagamento::OrderBy('nome_cliente','asc')->get();

        }elseif(Auth()->user()->role->id == 2)
        {   $pagamentos = Pagamento::where('localizacao_id',Auth()->user()->posto->id)
                                ->OrderBy('nome_cliente','asc')->get();
           
        }


    	$pdf = PDF::loadView('pdf.pagamento',compact('pagamentos'))->setPaper('a3',"landscape");
        $pdf->getDOMPdf()->set_option('isPhpEnabled', true);
        return $pdf->stream();
    	
    }

    //concluido
    public function spa()
    {

    	if (Auth()->user()->role->id == 1) {
            $contactos = Contacto::all();
            $spa = Spa::all()->first();
            $servicos = Servico::all();
            $provincias = Provincia::all();
            $spa_tipos = Tipo::all();
            $localizacoes = \DB::Select('select l.id as id, l.codigo as codigo  from localizacao l , contacto c where l.id != c.localizacao_id'); 

        }elseif(Auth()->user()->role->id == 2)
        {  
            $contactos = Contacto::where('id',Auth()->user()->posto->id)->get()->first();
            $spa = Spa::all()->first();
            $servicos = Servico::all();
            $spa_tipos = Tipo::all();

            $localizacao = Localizacao::where('id',Auth()->user()->posto->id)->get()->first(); 

            //print_r($localizacao->codigo);
            //print_r($contactos->localizacao_id);
             
            
            $pdf = PDF::loadView('pdf.spa_first',compact('spa','servicos','spa_tipos','contactos','localizacao'))->setPaper('a3',"landscape");
            $pdf->getDOMPdf()->set_option('isPhpEnabled', true);
            return $pdf->stream();   
        }


    	$pdf = PDF::loadView('pdf.spa',compact('spa','servicos','provincias','spa_tipos','contactos','localizacoes'))->setPaper('a3',"landscape");
         $pdf->getDOMPdf()->set_option('isPhpEnabled', true);
        return $pdf->stream();
    	
    }

    //concluido
    public function tipospa()
    {
    	if (Auth()->user()->role->id == 1) { 
             $tipospa = Tipo::OrderBy('tipo','asc')->get();

        }elseif(Auth()->user()->role->id == 2)
        {   $tipospa = Tipo::where('localizacao_id',Auth()->user()->posto->id)->OrderBy('tipo','asc')->get();
           
        }


    	$pdf = PDF::loadView('pdf.tipospa',compact('tipospa'))->setPaper('a3',"landscape");
         $pdf->getDOMPdf()->set_option('isPhpEnabled', true);
        return $pdf->stream();
    	
    }

    //concluido
    public function servico()
    {
    	if (Auth()->user()->role->id == 1) {
             $servicos = Servico::OrderBy('nome','asc')->get(); 

        }elseif(Auth()->user()->role->id == 2)
        {   $servicos = Servico::where('localizacao_id',Auth()->user()->posto->id)->OrderBy('nome','asc')->get();
           
        }


    	$pdf = PDF::loadView('pdf.servico',compact('servicos'))->setPaper('a3',"landscape");
         $pdf->getDOMPdf()->set_option('isPhpEnabled', true); 
        return $pdf->stream();
    	
    }

    //concluido
    public function tiposervico()
    {
    	if (Auth()->user()->role->id == 1) {
             $tiposervicos = TipoServico::OrderBy('nome','asc')->get();

        }elseif(Auth()->user()->role->id == 2)
        {   $tiposervicos = TipoServico::where('localizacao_id',Auth()->user()->posto->id)->OrderBy('nome','asc')->get();
           
        }


    	$pdf = PDF::loadView('pdf.tiposervico',compact('tiposervicos'))->setPaper('a3',"landscape");
         $pdf->getDOMPdf()->set_option('isPhpEnabled', true);
        return $pdf->stream();
    }

    public function factura($pagamento_id) 
    {
    	if (Auth()->user()->role->id == 1) {
            $pagamento = Pagamento::where('id',base64_decode($pagamento_id))->get()->first();
            
        }elseif(Auth()->user()->role->id == 2) 
        {   
            $pagamento = Pagamento::where('localizacao_id',Auth()->user()->posto->id,'id',base64_decode($pagamento_id))->get()->first();
        }

        //print_r($pagamento->tipopagamento->tipo);
        
    	$pdf = PDF::loadView('pdf.factura',compact('pagamento'))->setPaper('a3',"landscape");
        $pdf->getDOMPdf()->set_option('isPhpEnabled', true); 
        return $pdf->stream();
    }

    //Concluindo recurso auditoria
    public function auditoria(Request $request){
        
        if (empty($request->perfil)&&empty($request->utilizador)&&empty($request->data)) {
                if (Auth()->user()->role->id == 1) {
                    $dados = Auditoria::all();
                    $dizer = " Auditoria ";
                }elseif(Auth()->user()->role->id == 2) 
                {   
                    $dados = Auditoria::where('localizacao_id',Auth()->user()->posto->id)->get();
                    $dizer = " Auditoria ";
                }
            }elseif(!empty($request->perfil)&&!empty($request->utilizador)&&!empty($request->data)) {
                //return "utilizador e data";
                $data  = strlen($request->data) > 0 ? AppHelper::convertedmY2Ymd($request->data)
                : null;
                $data_v =  $data->format('Y-m-d');

                if (Auth()->user()->role->id == 1) {
                    $dados = Auditoria::where('user_id',$request->utilizador)->where('created_at','like',$data_v.'%')->get();
                    $utilizador = User::where('id',$request->utilizador)->get()->first();
                    $utilizador = isset($utilizador) ? $utilizador->name : "";
                    $dizer = "Utilizador : ".$utilizador." em ".$data->format('d-m-Y');
                }elseif(Auth()->user()->role->id == 2) 
                {
                    $dados = Auditoria::where('created_at', 'like', $data_v.'%')
                                        ->where('localizacao_id', Auth()->user()->posto->id)
                                        ->where('user_id', $request->utilizador)->get();
                    

                    foreach ($dados as $dado) {$utilizador = isset($dado->user->name) ? $dado->user->name : "";}
                    $dizer = "Utilizador : ".$utilizador." em ".$data->format('d-m-Y');
                    
                }

            }elseif(!empty($request->perfil)&&!empty($request->utilizador)&&empty($request->data)){
                //return "utilizador";
                
                if (Auth()->user()->role->id == 1) {
                    $dados = Auditoria::where('user_id',$request->utilizador)->get();
                    $utilizador = User::where('id',$request->utilizador)->get()->first();
                    $utilizador = isset($utilizador) ? $utilizador->name : "";
                    $dizer = "Utilizador : ".$utilizador;
                }elseif(Auth()->user()->role->id == 2) 
                {
                    
                    $dados = Auditoria::join('users',  'users.id','=', 'auditoria.user_id')
                                        ->where('auditoria.localizacao_id',Auth()->user()->posto->id)
                                        ->where('auditoria.user_id',$request->utilizador)->get();
                    
                    foreach ($dados as $dado) {$utilizador = isset($dado->user->name) ? $dado->user->name : "";}
                    $dizer = "Utilizador : ".$utilizador;
                    
                }

            
            }elseif(!empty($request->data)&&!empty($request->perfil)&&empty($request->utilizador)){
                //return "perfil data";
                $data  = strlen($request->data) > 0 ? AppHelper::convertedmY2Ymd($request->data)
                    : null;
                $data_v =  $data->format('Y-m-d');

                if (Auth()->user()->role->id == 1) {
                    $dados = \DB::SELECT('SELECT * FROM auditoria a, users u, roles r
                                WHERE a.user_id=u.id
                                AND r.id=u.role_id
                                AND a.created_at LIKE ?
                                AND r.id = ?',[$data_v.'%',$request->perfil]);
                    $perfil = Role::where('id',$request->perfil)->get()->first();
                    $perfil = isset($perfil) ? $perfil->name : "";
                    $dizer = " Perfil : ".$perfil." em ".$data->format('d-m-Y');
                }elseif(Auth()->user()->role->id == 2) 
                {
                    $dados = Auditoria::where('created_at', 'like', $data_v.'%')
                                        ->where('localizacao_id', Auth()->user()->posto->id)
                                        ->where('user_id', $request->perfil)->get();

                    foreach ($dados as $dado) {$perfil = isset($dado->user->role->name) ? $dado->user->role->name : "";}
                    $dizer = " Perfil : ".$perfil." em ".$data->format('d-m-Y');
                }

            }elseif(!empty($request->data)&&empty($request->utilizador)&&empty($request->perfil)){
                //return "data";converteYmd2dmY
                $data  = strlen($request->data) > 0 ? AppHelper::convertedmY2Ymd($request->data)
                : null;
                $data_v =  $data->format('Y-m-d');//aqui

                if (Auth()->user()->role->id == 1) {
                    $dados = \DB::SELECT('SELECT * 
                                          FROM auditoria aud, users us, roles rol
                                          WHERE aud.user_id=us.id
                                          AND aud.created_at LIKE ?
                                          AND rol.id=us.role_id',[$data_v."%"]);
                    $dizer = " Data : ".$data->format('d-m-Y');
                }elseif(Auth()->user()->role->id == 2) 
                {   
                   
                    $dados = Auditoria::where('created_at', 'like', $data_v.'%')
                                        ->where('localizacao_id', Auth()->user()->posto->id)
                                        ->get();
                    $dizer = "Data : ".$data->format('d-m-Y');
                }
                
            }elseif(!empty($request->perfil)&&empty($request->utilizador)&&empty($request->data)){
                //return "perfil";

                if (Auth()->user()->role->id == 1) {
                    $dados = \DB::SELECT('SELECT * FROM auditoria a, users u, roles r
                                WHERE a.user_id=u.id
                                AND r.id=u.role_id
                                AND r.id = ?',[$request->perfil]);
                    $perfil = Role::where('id',$request->perfil)->get()->first();
                    $perfil = isset($perfil) ? $perfil->name : "";
                    $dizer = " Perfil : ".$perfil;
                }elseif(Auth()->user()->role->id == 2) 
                {
                    $dados = Auditoria::where('localizacao_id', Auth()->user()->posto->id)
                                        ->where('user_id', $request->perfil)->get();
                
                    foreach ($dados as $dado) {$perfil = isset($dado->user->role->name) ? $dado->user->role->name : "";}
                    $dizer = " Perfil : ".$perfil;
                }
            }

        
        if (isset($dados)) {
            $pdf = PDF::loadView('pdf.auditorias',compact('dados','dizer'))->setPaper('a3',"landscape");
            $pdf->getDOMPdf()->set_option('isPhpEnabled', true); 
            return $pdf->stream();
        }else {
            $dados = Auditoria::where('user_id',$request->utilizador)->get();
            $utilizador = User::where('id',$request->utilizador)->get()->first();
            $utilizador = isset($utilizador) ? $utilizador->name : "";
            $dizer = "Utilizador : ".$utilizador;

            $pdf = PDF::loadView('pdf.auditorias',compact('dados','dizer'))->setPaper('a3',"landscape");
            $pdf->getDOMPdf()->set_option('isPhpEnabled', true); 
            return $pdf->stream();
        }  
    } 

    public function agenda(){
        if (Auth()->user()->role->id == 1) {
            $agendas = AgendaAtendimento::all();   
        }elseif(Auth()->user()->role->id == 2) 
        {
            $agendas = AgendaAtendimento::where('localizacao_id',Auth()->user()->posto->id)
                                        ->get(); 
        }

        $pdf = PDF::loadView('pdf.agenda',compact('agendas'))->setPaper('a3',"landscape");
            $pdf->getDOMPdf()->set_option('isPhpEnabled', true); 
            return $pdf->stream();
    }

    
}
