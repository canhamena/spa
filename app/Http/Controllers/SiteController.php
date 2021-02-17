<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
	public function sobre(){
		return view('site.about');
	}
    
    public function servico()
    {
    	return view('site.services');
    }
}
