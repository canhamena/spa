<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auditoria;
use App\Models\Role;
use App\Models\User;

class AutidoriaController extends Controller
{
	public function index()
	{

        if (Auth()->user()->role->id == 1) {
             $auditorias = Auditoria::Orderby('id','desc')->get();
             $roles = Role::all();
             $users = User::all();
          }elseif(Auth()->user()->role->id == 2)
         {   
            $auditorias = Auditoria::where('localizacao_id',Auth()->user()->posto->id)->Orderby('id','desc')->get();
            $roles = Role::whereIn('id', [2,3])
                            ->get();
            $users = User::whereIn('role_id', [2,3])->get();
        }

		
		return view('auditoria.index',compact('auditorias', 'roles', 'users'));
	}

    public function popular_utilizador(Request $request){
        if (Auth()->user()->role->id == 1) {
            $users = User::where('role_id', $request[0])->get();
        }elseif (Auth()->user()->role->id == 2) {
            $users = User::where('role_id', $request[0])
                    ->where('localizacao_id',Auth()->user()->posto->id)
                    ->get();
        }
        return response()->json($users);
    }
}
