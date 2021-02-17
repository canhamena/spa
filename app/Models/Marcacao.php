<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marcacao extends Model
{
    use HasFactory;

    protected $table = "marcacao";

     public function cliente()
    {
        return $this->hasOne(Cliente::class,'id', 'cliente_id');
    }

     public function marcacaoservico()
    {
    	return $this->hasMany(MarcacaoTipoServico::class);
        
    }
}
