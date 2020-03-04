<?php

use Illuminate\Database\Seeder;

class IncidentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('incidents')->delete();
        // Añadimos una entrada a esta tabla
        DB::table('incidents')->insert([
            'type' => 'Robo',
            'description' => 'El vehiculo alquilado ha sido sustraido en una via publica o privada.',
            'price' => '7500',
            'grade' => 'Grave'
            ]);
    }
}
