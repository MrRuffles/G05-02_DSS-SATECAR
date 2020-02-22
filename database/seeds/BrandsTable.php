<?php

use Illuminate\Database\Seeder;

class BrandsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Borramos los datos de la tabla
        DB::table('brands')->delete();
        // Añadimos una entrada a esta tabla
        DB::table('brands')->insert([
            'name' => 'Abarth',
            'yearofdeparture' => '1971',
            'country' => 'Italia']);
        DB::table('brands')->insert([
            'name' => 'Alfa Romeo',
            'yearofdeparture' => '1910',
            'country' => 'Italia' ]);
        DB::table('brands')->insert([
            'name' => 'Alpine',
            'yearofdeparture' => '1955',
            'country' => 'Francia']);
        DB::table('brands')->insert([
            'name' => 'Aston Martin',
            'yearofdeparture' => '1913',
            'country' => 'Inglaterra' ]);
        DB::table('brands')->insert([
            'name' => 'Audi',
            'yearofdeparture' => '1909',
            'country' => 'Alemania']);
        DB::table('brands')->insert([
            'name' => 'Bentley',
            'yearofdeparture' => '1919',
            'country' => 'Inglaterra' ]);
        DB::table('brands')->insert([
            'name' => 'BMW',
            'yearofdeparture' => '1916',
            'country' => 'Alemania' ]);
        DB::table('brands')->insert([
            'name' => 'Bugatti',
            'yearofdeparture' => '1909',
            'country' => 'Alemania' ]);
        DB::table('brands')->insert([
            'name' => 'Citroën',
            'yearofdeparture' => '1919',
            'country' => 'Francia' ]);
        DB::table('brands')->insert([
            'name' => 'Cupra',
            'yearofdeparture' => '2018',
            'country' => 'España']);
        DB::table('brands')->insert([
            'name' => 'Dacia',
            'yearofdeparture' => '1966',
            'country' => 'Rumania' ]);
        DB::table('brands')->insert([
            'name' => 'DS',
            'yearofdeparture' => '2009',
            'country' => 'Francia' ]);
        DB::table('brands')->insert([
            'name' => 'Ferrari',
            'yearofdeparture' => '1947',
            'country' => 'Italia']);
        DB::table('brands')->insert([
            'name' => 'Fiat',
            'yearofdeparture' => '1899',
            'country' => 'Italia' ]);
        DB::table('brands')->insert([
            'name' => 'Ford',
            'yearofdeparture' => '1903',
            'country' => 'USA' ]);
        DB::table('brands')->insert([
            'name' => 'Hispano Suiza',
            'yearofdeparture' => '1904',
            'country' => 'España']);
        DB::table('brands')->insert([
            'name' => 'Honda',
            'yearofdeparture' => '1946',
            'country' => 'Japón' ]);
        DB::table('brands')->insert([
            'name' => 'Hyundai',
            'yearofdeparture' => '1967',
            'country' => 'Corea del Sur' ]);
        DB::table('brands')->insert([
            'name' => 'Infiniti',
            'yearofdeparture' => '1989',
            'country' => 'Japón']);
        DB::table('brands')->insert([
            'name' => 'Jaguar',
            'yearofdeparture' => '1922',
            'country' => 'Inglaterra' ]);
        DB::table('brands')->insert([
            'name' => 'Jeep',
            'yearofdeparture' => '1941',
            'country' => 'USA' ]);
        DB::table('brands')->insert([
            'name' => 'KIA',
            'yearofdeparture' => '1944',
            'country' => 'Corea del Sur']);
        DB::table('brands')->insert([
            'name' => 'Koenigsegg',
            'yearofdeparture' => '1994',
            'country' => 'Suecia' ]);
        DB::table('brands')->insert([
            'name' => 'Lamborghini',
            'yearofdeparture' => '1963',
            'country' => 'Italia' ]);
        DB::table('brands')->insert([
            'name' => 'Username',
            'yearofdeparture' => '1994',
            'country' => '']);
        DB::table('brands')->insert([
            'name' => 'Land Rover',
            'yearofdeparture' => '1949',
            'country' => 'Inglaterra' ]);
        DB::table('brands')->insert([
            'name' => 'Lexus',
            'yearofdeparture' => '1989',
            'country' => 'Japón' ]);
        DB::table('brands')->insert([
            'name' => 'Lotus',
            'yearofdeparture' => '1952',
            'country' => 'Inglaterra']);
        DB::table('brands')->insert([
            'name' => 'Maserati',
            'yearofdeparture' => '1914',
            'country' => 'Italia']);
        DB::table('brands')->insert([
            'name' => 'Mazda',
            'yearofdeparture' => '1920',
            'country' => 'Japón']);
        DB::table('brands')->insert([
            'name' => 'McLaren',
            'yearofdeparture' => '1963',
            'country' => 'Inglaterra']);
        DB::table('brands')->insert([
            'name' => 'Mercedes-Benz',
            'yearofdeparture' => '1885',
            'country' => 'Alemania']);
        DB::table('brands')->insert([
            'name' => 'MINI',
            'yearofdeparture' => '1969',
            'country' => 'Inglaterra']);
        DB::table('brands')->insert([
            'name' => 'Mitsubishi',
            'yearofdeparture' => '1917',
            'country' => 'Japón']);
        DB::table('brands')->insert([
            'name' => 'Nissan',
            'yearofdeparture' => '1932',
            'country' => 'Japón']);
        DB::table('brands')->insert([
            'name' => 'Opel',
            'yearofdeparture' => '1862',
            'country' => 'Alemania']);
        DB::table('brands')->insert([
            'name' => 'Pagani',
            'yearofdeparture' => '1992',
            'country' => 'Italia']);
        DB::table('brands')->insert([
            'name' => 'Peugeot',
            'yearofdeparture' => '1810',
            'country' => 'Francia']);
        DB::table('brands')->insert([
            'name' => 'Polestar',
            'yearofdeparture' => '2009',
            'country' => 'China']);
        DB::table('brands')->insert([
            'name' => 'Porsche',
            'yearofdeparture' => '1931',
            'country' => 'Alemania']);
        DB::table('brands')->insert([
            'name' => 'Renault',
            'yearofdeparture' => '1898',
            'country' => 'Francia']);
        DB::table('brands')->insert([
            'name' => 'Rivian',
            'yearofdeparture' => '2009',
            'country' => 'USA']);
        DB::table('brands')->insert([
            'name' => 'Rolls-Royce',
            'yearofdeparture' => '1904',
            'country' => 'Inglaterra']);
        DB::table('brands')->insert([
            'name' => 'SEAT',
            'yearofdeparture' => '1950',
            'country' => 'España']);
        DB::table('brands')->insert([
            'name' => 'Skoda',
            'yearofdeparture' => '1895',
            'country' => 'Republica Checa']);
        DB::table('brands')->insert([
           'name' => 'Smart',
            'yearofdeparture' => '1994',
            'country' => 'Alemania']);
        DB::table('brands')->insert([
            'name' => 'SsangYong',
            'yearofdeparture' => '1954',
            'country' => 'Corea del Sur']);
        DB::table('brands')->insert([
            'name' => 'Subaru',
            'yearofdeparture' => '1953',
               'country' => 'Japón']);
        DB::table('brands')->insert([
            'name' => 'Suzuki',
            'yearofdeparture' => '1909',
            'country' => 'Japón']);
        DB::table('brands')->insert([
            'name' => 'Tesla',
            'yearofdeparture' => '2003',
            'country' => 'USA']);
        DB::table('brands')->insert([
            'name' => 'Toyota',
            'yearofdeparture' => '1933',
            'country' => 'Japón']);
        DB::table('brands')->insert([
            'name' => 'Volkswagen',
            'yearofdeparture' => '1933',
            'country' => 'Alemania']);
        DB::table('brands')->insert([
            'name' => 'Volvo',
            'yearofdeparture' => '1927',
            'country' => 'Suecia']);
    }
}
