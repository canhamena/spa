<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ProvinciaSeeder::class);
        $this->call(MunicipioSeeder::class);
        $this->call(TipoPagamentoSeeder::class);

    }
}
