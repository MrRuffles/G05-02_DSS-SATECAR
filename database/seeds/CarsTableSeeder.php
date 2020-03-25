<?php

use Illuminate\Database\Seeder;
use App\Brand;
use App\Concessionaire;
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
            'concessionaire_id' => Concessionaire::where('name', 'Hijos de Manuel Crespo')->first()->id]
        );

        DB::table('cars')->insert([
            'enrollment' => '2547 SXX' ,
            'years' => '5',
            'km' => '20000',
            'tradeMark' => '4x4',
            'color' => 'red',
            'fuelConsumption' => '5.6',
            'brand_id' => Brand::where('name', 'Abarth')->first()->id,
            'concessionaire_id' => Concessionaire::where('name', 'Hijos de Manuel Crespo')->first()->id]
        );
        
        DB::table('cars')->insert([
            'enrollment' => '1543 KMS' ,
            'years' => '1',
            'km' => '2400',
            'tradeMark' => 'ranchera',
            'color' => 'black',
            'fuelConsumption' => '7.2',
            'brand_id' => Brand::where('name', 'Dacia')->first()->id,
            'concessionaire_id' => Concessionaire::where('name', 'Hijos de Manuel Crespo')->first()->id]
        );
        
        DB::table('cars')->insert([
            'enrollment' => '3000 KLK' ,
            'years' => '2',
            'km' => '3000',
            'tradeMark' => 'sport',
            'color' => 'white',
            'fuelConsumption' => '9.1',
            'brand_id' => Brand::where('name', 'Bentley')->first()->id,
            'concessionaire_id' => Concessionaire::where('name', 'Hijos de Manuel Crespo')->first()->id]
        );
        
        DB::table('cars')->insert([
            'enrollment' => '3000 BBC' ,
            'years' => '15',
            'km' => '90000',
            'tradeMark' => '4x4',
            'color' => 'red',
            'fuelConsumption' => '12',
            'brand_id' => Brand::where('name', 'Bugatti')->first()->id,
            'concessionaire_id' => Concessionaire::where('name', 'Hijos de Manuel Crespo')->first()->id]
        );
            
        DB::table('cars')->insert([
            'enrollment' => '6699 GYM' ,
            'years' => '2',
            'km' => '5000',
            'tradeMark' => 'sport',
            'color' => 'white',
            'fuelConsumption' => '9.1',
            'brand_id' => Brand::where('name', 'Aston Martin')->first()->id,
            'concessionaire_id' => Concessionaire::where('name', 'Hijos de Manuel Crespo')->first()->id]
        );

        DB::table('cars')->insert([
            'enrollment' => '8542 KLS' ,
            'years' => '1',
            'km' => '4000',
            'tradeMark' => 'SUB',
            'color' => 'grey',
            'fuelConsumption' => '9.6',
            'brand_id' => Brand::where('name', 'Mercedes-Benz')->first()->id,
            'concessionaire_id' => Concessionaire::where('name', 'Hijos de Manuel Crespo')->first()->id]
        );

        DB::table('cars')->insert([
            'enrollment' => '8543 KLS' ,
            'years' => '1',
            'km' => '7000',
            'tradeMark' => 'SUB',
            'color' => 'grey',
            'fuelConsumption' => '9.6',
            'brand_id' => Brand::where('name', 'Mercedes-Benz')->first()->id,
            'concessionaire_id' => Concessionaire::where('name', 'Hijos de Manuel Crespo')->first()->id]
        );

        DB::table('cars')->insert([
            'enrollment' => '9472 JDW' ,
            'years' => '3',
            'km' => '37000',
            'tradeMark' => 'Cabrio',
            'color' => 'white',
            'fuelConsumption' => '6.1',
            'brand_id' => Brand::where('name', 'Volkswagen')->first()->id,
            'concessionaire_id' => Concessionaire::where('name', 'Hijos de Manuel Crespo')->first()->id]
        );

        DB::table('cars')->insert([
            'enrollment' => '2810 BCS' ,
            'years' => '6',
            'km' => '70300',
            'tradeMark' => 'Coupe',
            'color' => 'black',
            'fuelConsumption' => '6.4',
            'brand_id' => Brand::where('name', 'Volvo')->first()->id,
            'concessionaire_id' => Concessionaire::where('name', 'Hijos de Manuel Crespo')->first()->id]
        );
    }

}
