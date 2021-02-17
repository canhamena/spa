<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicoSpaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servico_spa', function (Blueprint $table) {
             $table->id();
             $table->unsignedBigInteger('spa_id');
             $table->foreign('spa_id')->references('id')->on('spa');
             $table->unsignedBigInteger('servico_id');
             $table->foreign('servico_id')->references('id')->on('servico');
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
        Schema::dropIfExists('servico_spa');
    }
}
