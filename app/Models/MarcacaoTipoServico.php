<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarcacaoTipoServico extends Model
{
    use HasFactory;
    
    protected $table = "marcacao_tipo_servico";

    public function tiposervico()
    {
        return $this->hasOne(TipoServico::class,'id', 'tipo_servico_id');
    }
}
