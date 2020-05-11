<?php

use Illuminate\Database\Seeder;
use App\Car;
use App\User;
use Carbon\Carbon;

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
            'car_id' => Car::where('enrollment', '8542 KLS')->first()->id,
            'user_id' => User::where('email', 'francisco@gmail.com')->first()->id,
            'date' => null,
            'date_end' => null
        ]);
        DB::table('rents')->insert([
            'car_id' => Car::where('enrollment', '2543 SXX')->first()->id,
            'user_id' => User::where('email', 'maria@gmail.com')->first()->id,
            'date' => Carbon::parse('2019-02-01 12:00:00'),
            'date_end' => Carbon::parse('2019-02-02 12:32:56')
        ]);
        DB::table('rents')->insert([
            'car_id' => Car::where('enrollment', '3000 KLK')->first()->id,
            'user_id' => User::where('email', 'paula@gmail.com')->first()->id,
            'date' => Carbon::parse('2019-02-01 12:00:00'),
            'date_end' => Carbon::parse('2019-02-02 12:32:56')
        ]);
        DB::table('rents')->insert([
            'car_id' => Car::where('enrollment', '6699 GYM')->first()->id,
            'user_id' => User::where('email', 'francisco@gmail.com')->first()->id,
            'date' => Carbon::parse('2020-02-03 15:45:15'),
            'date_end' => Carbon::parse('2019-02-02 12:32:56')
        ]);
        DB::table('rents')->insert([
            'car_id' => Car::where('enrollment', '3000 BBC')->first()->id,
            'user_id' => User::where('email', 'anaperez@gmail.com')->first()->id,
            'date' => Carbon::parse('2019-02-01 12:00:00'),
            'date_end' => Carbon::parse('2019-02-02 12:32:56')
        ]);
        DB::table('rents')->insert([
            'car_id' => Car::where('enrollment', '1543 KMS')->first()->id,
            'user_id' => User::where('email', 'tomas@gmail.com')->first()->id,
            'date' => Carbon::parse('2019-02-01 12:00:00'),
            'date_end' => Carbon::parse('2019-02-02 12:32:56')
        ]);
        DB::table('rents')->insert([
            'car_id' => Car::where('enrollment', '1543 KMS')->first()->id,
            'user_id' => User::where('email', 'francisco@gmail.com')->first()->id,
            'date' => Carbon::parse('2020-04-02 13:12:40'),
            'date_end' => Carbon::parse('2020-05-02 12:32:56')
        ]);
        DB::table('rents')->insert([
            'car_id' => Car::where('enrollment', '9472 JDW')->first()->id,
            'user_id' => User::where('email', 'francisco@gmail.com')->first()->id,
            'date' => Carbon::parse('2020-05-15 13:04:10'),
            'date_end' => Carbon::parse('2020-06-02 12:32:56')
        ]);
    }
}
