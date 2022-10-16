<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'nombre' => 'Luis Diego',
            'apellido' => 'Plasencia Amaya',
            'direccion' => 'Av. Luis Alberto Sanches Mz A lote 14',
            'telefono' => '949503135',
            'foto' => null,
            'user_id' => 1
        ]);
    }
}
