<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Borramos los datos de la tabla
        DB::table('cars')->delete();
        // Añadimos una entrada a esta tabla
        DB::table('cars')->insert([
            'enrollment' => '2543 SXX' ,
            'years' => '5',
            'km' => '24000',
            'tradeMark' => '4x4',
            'color' => 'blue',
            'fuelConsumption' => '5.6',
            'brand_id' => '1']);
        
        DB::table('cars')->insert([
            'enrollment' => '1543 KMS' ,
            'years' => '1',
            'km' => '2400',
            'tradeMark' => 'ranchera',
            'color' => 'black',
            'fuelConsumption' => '7.2',
            'brand_id' => '1']);
        
    }
}
