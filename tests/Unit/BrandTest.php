<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Brand;
use App\Car;

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


    public function testCarsByBrands()
    {

        $brand = Brand::where('name', 'Abarth')->first()->id;
        //$cars = Car::where('id', $brand);
        //$this->assertEquals($brand->->count(), 2);
        //$this->assertTrue($brand->cars->contains('enrollment', '1543 KMS'));
    }


}
