<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marcacao;
use App\Models\Reserva;
use App\Models\Pagamento;
use App\Models\Servico;
use App\Models\TipoServico;
use App\Models\Spa;
use App\Models\Tipo;
use App\Models\Provincia;
use App\Models\Municipio;
use App\Models\Localizacao;
use App\Models\Contacto;
use PDF;

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
    public function reserva()
    {
    	if (Auth()->user()->role->id == 1) {
             $reservas = Marcacao::join('cliente', 'cliente.id', '=', 'marcacao.cliente_id')
                                    ->OrderBy('cliente.nome','asc')->get();

        }elseif(Auth()->user()->role->id == 2)
        {   $reservas = Marcacao::join('cliente', 'cliente.id', '=', 'marcacao.cliente_id')->where('localizacao_id',Auth()->user()->posto->id)->OrderBy('name','asc')->get();
           
        }


    	$pdf = PDF::loadView('pdf.reserva',compact('reservas'))->setPaper('a3',"landscape");
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

        $contactos = Contacto::all();
    	if (Auth()->user()->role->id == 1) {
            $spa = Spa::all()->first();
            $servicos = Servico::all();
            $provincias = Provincia::all();
            $spa_tipos = Tipo::all();
            $contactos = Contacto::all();
            $localizacoes = \DB::Select('select l.id as id, l.codigo as codigo  from localizacao l , contacto c where l.id != c.localizacao_id'); 

        }elseif(Auth()->user()->role->id == 2)
        {  
             $localizacao = Localizacao::where('id',Auth()->user()->posto->id)->get()->first(); 
             $pdf = PDF::loadView('pdf.spa',compact('spa','servicos','provincias','spa_tipos','contactos','localizacao'))->setPaper('a3',"landscape");
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

    public function factura() 
    {
    	if (Auth()->user()->role->id == 1) {
             $tiposervicos = TipoServico::OrderBy('nome','asc')->get();

        }elseif(Auth()->user()->role->id == 2)
        {   $tiposervicos = TipoServico::where('localizacao_id',Auth()->user()->posto->id)->OrderBy('nome','asc')->get();
           
        }


    	$pdf = PDF::loadView('pdf.factura',compact('tiposervicos'))->setPaper('a3',"landscape");
         $pdf->getDOMPdf()->set_option('isPhpEnabled', true);
        return $pdf->stream();
    }

    
}
