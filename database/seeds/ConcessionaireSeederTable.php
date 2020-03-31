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
        // Añadimos una entrada a esta tabla
        DB::table('concessionaires')->insert([
            'name' => 'Grupo Marcos',
            'address' => 'Av. del Mediterraneo, 115',
            'cif' => 'B99999999',
            'phone' =>'965385066', 
            'city' => 'Elda',
            'country' => 'España',
            'email' => 'leads@grupomarcos.es'
        ]);
       // DB::table('concessionaires')->delete();
        // Añadimos una entrada a esta tabla
        DB::table('concessionaires')->insert([
            'name' => 'Mariano Automoviles',
            'address' => 'Av. de Murcia, 456',
            'cif' => '9567125B',
            'phone' =>'965981529', 
            'city' => 'Murcia',
            'country' => 'España',
            'email' => 'marianoautomoviles@gmail.com'
        ]);
        // Añadimos una entrada a esta tabla
        DB::table('concessionaires')->insert([
            'name' => 'Automoviles Jaen',
            'address' => 'Av. de Jaen, 987',
            'cif' => '5634734B',
            'phone' =>'965539818', 
            'city' => 'Andalucia',
            'country' => 'España',
            'email' => 'jaenauto@gmail.com'
        ]);
        // Añadimos una entrada a esta tabla
        DB::table('concessionaires')->insert([
            'name' => 'Sant Vicent Cars',
            'address' => 'Torres Quevedo, 20',
            'cif' => '9834761Y',
            'phone' =>'998128714', 
            'city' => 'Alicante',
            'country' => 'España',
            'email' => 'sanvicenteauto@gmail.es'
        ]);
        DB::table('concessionaires')->insert([
            'name' => 'American Rents Cars',
            'address' => 'Detroid, 20',
            'cif' => '2131242Y',
            'phone' =>'998671221', 
            'city' => 'California',
            'country' => 'EEUU',
            'email' => 'amerentscars@gmail.com'
        ]);
        DB::table('concessionaires')->insert([
            'name' => 'Yecla Coches',
            'address' => 'Molino, 20',
            'cif' => '9871236Y',
            'phone' =>'998239812', 
            'city' => 'Murcia',
            'country' => 'España',
            'email' => 'yeclacoches@gmail.es'
        ]);
        DB::table('concessionaires')->insert([
            'name' => 'Gotham City Cars',
            'address' => 'Av Ace Chemicals, 20',
            'cif' => '08923818Y',
            'phone' =>'900123912', 
            'city' => 'Gotham',
            'country' => 'EEUU',
            'email' => 'gothamcitycar@gmail.es'
        ]);
        DB::table('concessionaires')->insert([
            'name' => 'paris car rents',
            'address' => 'Av de la Bastilla, 20',
            'cif' => '8709347Y',
            'phone' =>'991240147', 
            'city' => 'Paris',
            'country' => 'Francia',
            'email' => 'pariscarrents@gmail.es'
        ]);
    }
}
