<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarcacaoTipoServicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcacao_tipo_servico', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tipo_servico_id');
            $table->foreign('tipo_servico_id')->references('id')->on('tipo_servico');
            $table->unsignedBigInteger('marcacao_id');
            $table->foreign('marcacao_id')->references('id')->on('marcacao');
            $table->integer('quantidade');
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
        Schema::dropIfExists('marcacao_tipo_servico');
    }
}
