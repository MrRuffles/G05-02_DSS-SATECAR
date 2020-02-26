<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Car;
use App\Brand;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CarTest extends TestCase
{
    /**
     * Probes if can create a car and some cars of the BBDD
     *
     * @return void
     */
    public function testCarsCount()
    {
        $count = Car::all()->count();
        $this->assertEquals($count, 5); //Comprueba si hay 5 coche
    }

    public function testCarsData(){
        $this->assertDatabaseHas('cars', ['enrollment' => '6699 GYM']);
        $this->assertDatabaseHas('cars', ['enrollment' => '1543 KMS']);
        $this->assertDatabaseHas('cars', ['enrollment' => '3000 KLK']);
        $this->assertDatabaseHas('cars', ['enrollment' => '2543 SXX']);
        $this->assertDatabaseHas('cars', ['enrollment' => '3000 BBC']);
    }

    public function testHaveOK()
    {
        $brand = Car::Where('enrollment', '6699 GYM')->first()->brand_id;
        $brand2 = Car::Where('enrollment', '2543 SXX')->first()->brand_id;
        $this->assertDatabaseHas('brands', ['id' => $brand]);
        $this->assertDatabaseHas('brands', ['id' => $brand2]);
    }
    
    public function testBrandInCars(){
        $id_brand = Brand::Where('name', 'Bugatti')->first()->id;
        $id_brand2 = Brand::Where('name', 'Abarth')->first()->id;
        $this->assertDatabaseHas('cars', ['brand_id' => $id_brand]);
        $this->assertDatabaseHas('cars', ['brand_id' => $id_brand2]);
    }

    public function testBrandCar(){
        $brand = Car::Where('enrollment', '6699 GYM')->first()->brand_id;
        $brand2 = Car::Where('enrollment', '2543 SXX')->first()->brand_id;
        $this->assertDatabaseHas('brands', ['id' => $brand]);
        $this->assertDatabaseHas('brands', ['id' => $brand2]);

    }
    public function testCarBrand(){
        $brand_id = Car::Where('enrollment', '6699 GYM')->first()->brand_id;
        $brand = Brand::where('id', $brand_id)->first();
        $this->assertEquals($brand->name, 'Bugatti');
        $brand_id = Car::Where('enrollment', '2543 SXX')->first()->brand_id;
        $brand = Brand::where('id', $brand_id)->first();
        $this->assertEquals($brand->name, 'Abarth');
    }

}
