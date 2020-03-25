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
        DB::table('incidents')->insert([
            'type' => 'Accidente',
            'description' => 'El vehiculo alquilado ha sufrido un accidente de grado medio.',
            'price' => '5000',
            'grade' => 'Medio'
        ]);
        DB::table('incidents')->insert([
            'type' => 'Siniestro total',
            'description' => 'El vehiculo alquilado ha sufrido un accidente y está inutilizable.',
            'price' => '15000',
            'grade' => 'Muy grave'
        ]);
        DB::table('incidents')->insert([
            'type' => 'Rotura de luna delantera',
            'description' => 'El vehiculo alquilado ha sufrido un impacto en la luna delantera.',
            'price' => '750',
            'grade' => 'Leve'
        ]);
        DB::table('incidents')->insert([
            'type' => 'Abolladura',
            'description' => 'El vehiculo alquilado ha sufrido una abolladura.',
            'price' => '500',
            'grade' => 'Leve'
        ]);
        DB::table('incidents')->insert([
            'type' => 'Pinchazo',
            'description' => 'El vehiculo alquilado ha sufrido un pinchazo.',
            'price' => '200',
            'grade' => 'Leve'
        ]);
        DB::table('incidents')->insert([
            'type' => 'Motor',
            'description' => 'El vehiculo alquilado ha sufrido un rotura de Motor.',
            'price' => '1000',
            'grade' => 'Grave'
        ]);
        DB::table('incidents')->insert([
            'type' => 'Embrague',
            'description' => 'El vehiculo alquilado ha sufrido una rotura en el embrague.',
            'price' => '500',
            'grade' => 'Medio'
        ]);
        DB::table('incidents')->insert([
            'type' => 'Sin Gasolina/Gasoil',
            'description' => 'El vehiculo alquilado ha llegado al punto de recogida sin gasolina/gasoil.',
            'price' => '100',
            'grade' => 'Leve'
        ]);
    }
}
