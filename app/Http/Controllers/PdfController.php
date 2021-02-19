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
    	//set_time_limit(300);
         
        

        $users = User::all();

    	$pdf = PDF::loadView('pdf.utilizador',compact('users'));
         $pdf->getDOMPdf()->set_option('isPhpEnabled', true);
        return $pdf->stream();
    	
    }
}
