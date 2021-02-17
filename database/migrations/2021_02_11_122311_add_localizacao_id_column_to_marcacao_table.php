<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLocalizacaoIdColumnToMarcacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('marcacao', function (Blueprint $table) {
            $table->unsignedBigInteger('localizacao_id');
            $table->foreign('localizacao_id')->references('id')->on('localizacao');
        });
    }

    
}
