<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagamento', function (Blueprint $table) {
            $table->id();
            $table->string('nome_cliente');
            $table->string('numero_pagamento');
            $table->unsignedBigInteger('tipopagamento_id')->nullable(); // Preenchimento não obrigatório
            $table->foreign('tipopagamento_id')->references('id')->on('tipo_pagamento');
             $table->unsignedBigInteger('data_pagamento')->nullable(); 
            $table->unsignedBigInteger('user_id');
            $table->string('refrencia')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagamento');
    }
}
