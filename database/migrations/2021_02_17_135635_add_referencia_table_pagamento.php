<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReferenciaTablePagamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pagamento', function (Blueprint $table) {
            $table->unsignedBigInteger('referencia')->nullable()->after('tipopagamento_id'); 
        });
    }

    
}
