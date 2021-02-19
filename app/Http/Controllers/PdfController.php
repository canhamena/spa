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

    
    public function spa()
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

    public function tipospa()
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

    
}
