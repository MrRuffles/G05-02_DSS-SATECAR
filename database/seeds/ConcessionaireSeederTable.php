<?php

use Illuminate\Database\Seeder;

class ConcessionaireSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('concessionaires')->delete();
        // Añadimos una entrada a esta tabla
        DB::table('concessionaires')->insert([
            'name' => 'Hijos de Manuel Crespo',
            'address' => 'Av. de Denia, 151',
            'cif' => '5634734B',
            'phone' =>'965266100', 
            'city' => 'Alicante',
            'country' => 'España',
            'email' => 'leads@hmcrespomercedes.es'
        ]);
    }
}
