<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PDF;

class PdfController extends Controller
{
    //

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
}
