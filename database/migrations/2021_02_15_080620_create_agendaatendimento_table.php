<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaatendimentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendaatendimento', function (Blueprint $table) {
            $table->id();
            $table->date('data_inicio');
            $table->date('data_fim')->nullable();
            $table->string('atendimento_inicio');
            $table->string('atendimento_fim')->nullable();
            $table->integer('qtd_cliente')->nullable();
            $table->unsignedBigInteger('localizacao_id');
            $table->foreign('localizacao_id')->references('id')->on('localizacao');
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
        Schema::dropIfExists('agendaatendimento');
    }
}
