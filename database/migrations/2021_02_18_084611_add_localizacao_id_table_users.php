<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLocalizacaoIdTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('localizacao_id')->nullable() // Preenchimento não obrigatório
                    ->after('password');
            $table->foreign('localizacao_id')->references('id')->on('localizacao');
        });
    }

  
}
