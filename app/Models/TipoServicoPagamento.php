<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoServicoPagamento extends Model
{
    use HasFactory;

    protected $table = "tipo_servico_pagamento"; 

    public function tiposervico()
    {
    	return $this->hasOne(TipoServico::class,'id','tipo_servico_id');
    }

}
