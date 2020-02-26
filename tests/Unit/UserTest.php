<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;
use App\Car;
use DB;
class UserTest extends TestCase
{
    
    public function testUsersCount(){
        $count = User::all()->count();
        $this->assertEquals($count, 10);
    }

    public function testUsersDataConstainData(){
        $this->assertDatabaseHas('users', ['email' => 'francisco@gmail.com']);
        $this->assertDatabaseHas('users', ['email' => 'carlos@gmail.com']);
        $this->assertDatabaseHas('users', ['email' => 'jose@gmail.com']);
        $this->assertDatabaseHas('users', ['email' => 'mario@gmail.com']);
        $this->assertDatabaseHas('users', ['email' => 'maria@gmail.com']);
        $this->assertDatabaseHas('users', ['email' => 'paula@gmail.com']);
        $this->assertDatabaseHas('users', ['email' => 'anaperez@gmail.com']);
        $this->assertDatabaseHas('users', ['email' => 'antonio@gmail.com']);
        $this->assertDatabaseHas('users', ['email' => 'javier@gmail.com']);
        $this->assertDatabaseHas('users', ['email' => 'tomas@gmail.com']);
    }

    public function testRentOK(){
        $id_user = User::where('email', 'paula@gmail.com')->first()->id;
        $id_car = Car::where('enrollment', '1543 KMS')->first()->id;
        $this->assertDatabaseHas('rents', ['user_id' => $id_user, 'car_id' => $id_car]);
    }

    public function testUserCar(){
        $user = User::where('email', 'paula@gmail.com')->first();
        $car_id = DB::table('rents')->where('user_id', $user->id)->value('car_id');
        $car = Car::where('id', $car_id)->first();
        $this->assertEquals($car->enrollment, '1543 KMS');
    }

}
