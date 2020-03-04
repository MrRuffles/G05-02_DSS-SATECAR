<?php

use Illuminate\Database\Seeder;
use App\Brand;
use App\Incident;
use Illuminate\Database\Eloquent\Collection;
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
            'brand_id' => Brand::where('name', 'Abarth')->first()->id,
            'incident_id' => Incident::where('type', 'Robo')->first()->id]);
        
        DB::table('cars')->insert([
            'enrollment' => '1543 KMS' ,
            'years' => '1',
            'km' => '2400',
            'tradeMark' => 'ranchera',
            'color' => 'black',
            'fuelConsumption' => '7.2',
            'brand_id' => Brand::where('name', 'Dacia')->first()->id,
            'incident_id' => Incident::where('type', 'Robo')->first()->id]);
        
            DB::table('cars')->insert([
                'enrollment' => '3000 KLK' ,
                'years' => '2',
                'km' => '3000',
                'tradeMark' => 'sport',
                'color' => 'white',
                'fuelConsumption' => '9.1',
                'brand_id' => Brand::where('name', 'Bentley')->first()->id,
                'incident_id' => Incident::where('type', 'Robo')->first()->id]);
        
            DB::table('cars')->insert([
                'enrollment' => '3000 BBC' ,
                'years' => '15',
                'km' => '90000',
                'tradeMark' => '4x4',
                'color' => 'red',
                'fuelConsumption' => '12',
                'brand_id' => Brand::where('name', 'Bugatti')->first()->id,
                'incident_id' => Incident::where('type', 'Robo')->first()->id]);
            
            DB::table('cars')->insert([
                'enrollment' => '6699 GYM' ,
                'years' => '2',
                'km' => '5000',
                'tradeMark' => 'sport',
                'color' => 'white',
                'fuelConsumption' => '9.1',
                'brand_id' => Brand::where('name', 'Aston Martin')->first()->id,
                'incident_id' => Incident::where('type', 'Robo')->first()->id]);
        }

}
