<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(BrandsTableSeeder::class);
      $this->call(CarsTableSeeder::class);
      $this->command->info('Cars table seeded!' );
    }
}
