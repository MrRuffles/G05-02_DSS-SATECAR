<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Brand;
use App\Car;
use DB;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BrandTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    /*public function testExample()
    {
        $this->assertTrue(true);
    }*/


    public function testbrandDataTable()
    {
        $count = Brand::all()->count();
        $this->assertEquals($count, 52);

        $this->assertDatabaseHas('brands', ['name' => 'Kia']);
        $this->assertDatabaseHas('brands', ['name' => 'DS']);
        $this->assertDatabaseHas('brands', ['name' => 'Audi']);
        $this->assertDatabaseHas('brands', ['name' => 'Ferrari']);
        $this->assertDatabaseHas('brands', ['name' => 'Hispano Suiza']);
    }

    public function testAssociationBrandCar()
    {
        DB::table('brands')->insert([
            'name' => 'Waymo',
            'yearofdeparture' => '2015',
            'country' => 'China',
            'range' => "Gama Media"
        ]);
        
        DB::table('cars')->insert([
            'enrollment' => '1234 GBX' ,
            'years' => '5',
            'km' => '24000',
            'tradeMark' => '4x4',
            'color' => 'blue',
            'fuelConsumption' => '5.6',
            'brand_id' =>  Brand::where('name', 'Waymo')->first()->id
        ]);
        
        $brand = Brand::where('name', 'Waymo')->first();
        $car = Car::where('brand_id', $brand->id)->first();
        $this->assertEquals($car->enrollment, '1234 GBX');
        
        DB::table('cars')->where('brand_id', Brand::where('name', 'Waymo')->first()->id)->delete();
        $brand->delete();
    }


}
