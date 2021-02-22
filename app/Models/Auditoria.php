<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auditoria extends Model
{
    use HasFactory;
      protected $table = "auditoria";

       protected $fillable = [
        'accao','user_id', 'localizacao_id'];

         public function user()
    {
        return $this->hasOne(User::class,'id', 'user_id');
    }

      public function posto()
    {
        return $this->hasOne(Localizacao::class,'id', 'localizacao_id');
    }
}
