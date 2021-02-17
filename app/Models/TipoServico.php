<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoServico extends Model
{
    use HasFactory;

    protected $table = "tipo_servico";


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
          'nome','imagem','descricao','preco','servico_id'
       ];


     public function servico()
    {
         return $this->hasOne('App\Models\Servico','id','servico_id');
    }
    
}
