<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Provincia;


class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provincia::create([
         'nome' => 'Bengo',
      ]);

      Provincia::create([
         'nome' => 'Benguela',
      ]);

      Provincia::create([
         'nome' => 'Bie',
      ]);
      Provincia::create([
         'nome' => 'Cabinda',
      ]);

      Provincia::create([
         'nome' => 'Cunene',
      ]);

      Provincia::create([
         'nome' => 'Huambo',
      ]);
      Provincia::create([
         'nome' => 'Huíla',
      ]);

      Provincia::create([
         'nome' => 'Cuando Cubango',
      ]);

      Provincia::create([
         'nome' => 'Cuanza Norte',
      ]);

      Provincia::create([
         'nome' => 'Cuanza Sul',
      ]);

      Provincia::create([
         'nome' => 'Luanda',
      ]);
      Provincia::create([
         'nome' => 'Lunda Norte',
      ]);

      Provincia::create([
         'nome' => 'Lunda Sul',
      ]);
      Provincia::create([
         'nome' => 'Malange',
      ]);

      Provincia::create([
         'nome' => 'Moxico',
      ]);

      Provincia::create([
         'nome' => 'Namibe',
      ]);

      Provincia::create([
         'nome' => 'Uíge',
      ]);
      
      Provincia::create([
         'nome' => 'Zaíre',
      ]);
    }
}
