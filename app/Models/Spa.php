<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spa extends Model
{
    use HasFactory;

    protected $table = "spa";

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
          'nome','logotipo','descricao','imagem','sobre'
       ];

      public function tiposervico() {
           return $this->belongsToMany(Servico::class,'servico_spa');
       }

        public function tipospa() {

           return $this->belongsToMany(Tipo::class,'tipo_spa');
       }

       public function endereco() {
          
           return $this->hasMany(Localizacao::class);
       }


       


}
