<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\TipoPagamento;

class TipoPagamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('tipo_pagamento')->insert([
            'tipo' => 'Débito directo',
            'descricao' => 'Débito Directo'
          
        ]);

         DB::table('tipo_pagamento')->insert([
            'tipo' => 'Transferências',
            'descricao' => 'Transferências'
          
        ]);
        DB::table('tipo_pagamento')->insert([
            'tipo' => 'Cash',
            'descricao' => 'Cash'
          
        ]);
    }
}
