<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLocalizacaoIdTableAuditoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('auditoria', function (Blueprint $table) {
               $table->unsignedBigInteger('localizacao_id')->nullable() // Preenchimento não obrigatório
                    ->after('user_id');
                 $table->foreign('localizacao_id')->references('id')->on('localizacao');
        });
    }

    
   
}
