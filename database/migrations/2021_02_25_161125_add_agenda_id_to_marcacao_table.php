<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAgendaIdToMarcacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('marcacao', function (Blueprint $table) {
             $table->unsignedBigInteger('agenda_id')->nullable() 
                    ->after('cliente_id');
             $table->foreign('agenda_id')->references('id')->on('agendaatendimento');
        });
    }

   
}
