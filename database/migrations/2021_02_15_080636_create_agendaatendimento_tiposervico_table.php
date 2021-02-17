<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaatendimentoTiposervicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendaatendimento_tiposervico', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tipo_servico_id');
            $table->foreign('tipo_servico_id')->references('id')->on('tipo_servico');
            $table->unsignedBigInteger('agenda_atendimento_id');
            $table->foreign('agenda_atendimento_id')->references('id')->on('agendaatendimento');
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
        Schema::dropIfExists('agendaatendimento_tiposervico');
    }
}
