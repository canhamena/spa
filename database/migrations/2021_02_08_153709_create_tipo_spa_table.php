<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoSpaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_spa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('spa_id');
             $table->foreign('spa_id')->references('id')->on('spa');
             $table->unsignedBigInteger('tipo_id');
             $table->foreign('tipo_id')->references('id')->on('tipo');
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
        Schema::dropIfExists('tipo_spa');
    }
}
