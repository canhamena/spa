<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;
    protected $table = "servico";


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome','imagem','descricao'
    ];


    public function tiposervico()
    {
         return $this->hasMany('App\Models\TipoServico');
    }

     public static function anos()
    {
       return  \DB::SELECT('select Year(created_at) as ano  from spa');
    }
    
}
