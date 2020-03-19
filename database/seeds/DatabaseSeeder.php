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
      $this->call(UsersTableSeeder::class);
      $this->call(ConcessionaireSeederTable::class);
      $this->call(IncidentTableSeeder::class);
      $this->call(BrandsTableSeeder::class);
      $this->call(CarsTableSeeder::class);
      $this->call(RentsTableSeeder::class);
      $this->call(SufferSeederTable::class);
    }
}
