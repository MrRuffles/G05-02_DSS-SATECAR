<?php

use Illuminate\Database\Seeder;
use App\Car;
use App\User;
class RentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rents')->delete();
        DB::table('rents')->insert([
            'car_id' => Car::where('enrollment', '2543 SXX')->first()->id,
            'user_id' => User::where('name', 'Francisco Javier')->first()->id
        ]);
        DB::table('rents')->insert([
            'car_id' => Car::where('enrollment', '1543 KMS')->first()->id,
            'user_id' => User::where('name', 'Francisco Javier')->first()->id
        ]);
    }
}
