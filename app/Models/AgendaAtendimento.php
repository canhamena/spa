<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgendaAtendimento extends Model
{
    use HasFactory;

    protected $table = "agendaatendimento";

       public function tiposervico() {

           return $this->belongsToMany(TipoServico::class,'agendaatendimento_tiposervico');
       }
}
