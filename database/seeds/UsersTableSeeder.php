<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->delete();
        DB::table('users')->insert([
            'dni' => '12345678L',
            'name' => 'Francisco Javier',
            'surnames' => 'Rico Pérez',
            'adress' => 'Murcia',
            'phone' => '608572918',
            'typeUser' => 'Administrador',
            'email' => 'fjrp8@alu.ua.es'
        ]);
        DB::table('users')->insert([
            'dni' => '87654321L',
            'name' => 'Carlos',
            'surnames' => 'Torralba',
            'adress' => 'Alicante',
            'phone' => '123123123',
            'typeUser' => 'Vendedor',
            'email' => 'carlos@alu.ua.es'
        ]);
        DB::table('users')->insert([
            'dni' => '87654321L',
            'name' => 'Jose Enrique',
            'surnames' => 'Rico Valera',
            'adress' => 'Barcelona',
            'phone' => '987654567',
            'typeUser' => 'Administrador',
            'email' => 'jose@alu.ua.es'
        ]);
        DB::table('users')->insert([
            'dni' => '82342451L',
            'name' => 'Mario',
            'surnames' => 'Conejero Puche',
            'adress' => 'Madrid',
            'phone' => '608972918',
            'typeUser' => 'Cliente',
            'email' => 'mario@alu.ua.es'
        ]);
    }
}
