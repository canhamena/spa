<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    use HasFactory;

    protected $table = "pagamento";

    public function tiposervicopagamento()
    {
        return $this->hasMany('App\Models\TipoServicoPagamento');
    	
    }
    public function pagamentoservico()
    {
          return $this->belongsToMany('App\Models\TipoServico','tipo_servico_pagamento');
    }
}
