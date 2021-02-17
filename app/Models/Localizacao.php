<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localizacao extends Model
{
    use HasFactory;

     protected $table = "localizacao";


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codigo','spa_id','municipio_id','descricao','rua'
    ];


       public function municipio() {
          
           return $this->hasOne(Municipio::class,'id','municipio_id');
       }
}
