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
        DB::table('users')->insert([ 'dni' => '48832813H', 'name' => 'Francisco Javier', 'surnames' => 'Rico Pérez', 'adress' => 'Murcia', 'phone' => '608572918', 'typeUser' => 'Administrador', 'email' => 'francisco@gmail.com', 'password' => Hash::make('hola1234')]);
        DB::table('users')->insert([ 'dni' => '87654321L', 'name' => 'Carlos', 'surnames' => 'Torralba', 'adress' => 'Alicante', 'phone' => '668974523', 'typeUser' => 'Vendedor', 'email' => 'carlos@gmail.com', 'password' => Hash::make('hola1234') ]);
        DB::table('users')->insert([ 'dni' => '48856872T', 'name' => 'Jose Enrique', 'surnames' => 'Rico Valera', 'adress' => 'Barcelona', 'phone' => '987654567', 'typeUser' => 'Vendedor', 'email' => 'jose@gmail.com', 'password' => Hash::make('hola1234')]);
        DB::table('users')->insert([ 'dni' => '82342451L', 'name' => 'Mario', 'surnames' => 'Conejero Puche', 'adress' => 'Madrid', 'phone' => '608972918', 'typeUser' => 'Cliente', 'email' => 'mario@gmail.com', 'password' => Hash::make('hola1234') ]);
        DB::table('users')->insert([ 'dni' => '67482053L', 'name' => 'Maria', 'surnames' => 'Conejero Martinez', 'adress' => 'Madrid', 'phone' => '654892918', 'typeUser' => 'Cliente', 'email' => 'maria@gmail.com', 'password' => Hash::make('hola1234')]);
        DB::table('users')->insert([ 'dni' => '46798453T', 'name' => 'Paula', 'surnames' => 'Ballester Puche', 'adress' => 'Alicante', 'phone' => '667453261', 'typeUser' => 'Cliente', 'email' => 'paula@gmail.com', 'password' => Hash::make('hola1234')]);
        DB::table('users')->insert([ 'dni' => '45678902R', 'name' => 'Ana Maria', 'surnames' => 'Pérez Martínez', 'adress' => 'Galicia', 'phone' => '687341252', 'typeUser' => 'Cliente', 'email' => 'anaperez@gmail.com', 'password' => Hash::make('hola1234')]);
        DB::table('users')->insert([ 'dni' => '46632785Y', 'name' => 'Antonio Miguel', 'surnames' => 'Giménez Torres', 'adress' => 'Valencia', 'phone' => '607623451', 'typeUser' => 'Cliente', 'email' => 'antonio@gmail.com', 'password' => Hash::make('hola1234')]);
        DB::table('users')->insert([ 'dni' => '45678901K', 'name' => 'Javier', 'surnames' => 'Ortuño Martínez', 'adress' => 'Murcia', 'phone' => '666342190', 'typeUser' => 'Cliente', 'email' => 'javier@gmail.com', 'password' => Hash::make('hola1234')]);
        DB::table('users')->insert([ 'dni' => '45623109F', 'name' => 'Tomas', 'surnames' => 'Rico Valera', 'adress' => 'Barcelona', 'phone' => '684532123', 'typeUser' => 'Cliente', 'email' => 'tomas@gmail.com', 'password' => Hash::make('hola1234')]);
    }
}
