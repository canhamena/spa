<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    protected $table = "municipio";


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'provincia_id',
        'nome'
        ];

         public function provincia() {
          
           return $this->hasOne(Provincia::class,'id','provincia_id');
       }
}
