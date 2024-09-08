<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\ServiceLog;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Putra Wibawa',
            'email' => 'putrawibawa7@gmail.com',
            'password' => bcrypt('Wibawa123'),
        ]);

        User::create([
            'name' => 'Linda Damayanti',
            'email' => 'lindadamayanti7@gmail.com',
            'password' => bcrypt('Linda123'),
        ]);

        Car::create([
            'license_plate' => 'ABC123',
            'brand' => 'Toyota',
            'user_id' => User::first()->id,
        ]);

        Car::create([
            'license_plate' => 'ABC456',
            'brand' => 'Honda',
            'user_id' => User::find(2)->id,
        ]);

        ServiceLog::create([
            'status' => 'Delivery Order ',
            'description' => 'Delivery the car',
            'car_id' => Car::first()->id,
        ]);
        ServiceLog::create([
            'status' => 'Pre Delivery Inspection',
            'description' => 'Check the car',
            'car_id' => Car::first()->id,
        ]);
        ServiceLog::create([
            'status' => 'Washing',
            'description' => 'Washing the car',
            'car_id' => Car::first()->id,
        ]);
        ServiceLog::create([
            'status' => 'Delivery Order ',
            'description' => 'Delivery the car',
            'car_id' => Car::find(2)->id,
        ]);
        ServiceLog::create([
            'status' => 'Pre Delivery Inspection',
            'description' => 'Check the car',
            'car_id' => Car::find(2)->id,
        ]);
        ServiceLog::create([
            'status' => 'Washing',
            'description' => 'Washing the car',
            'car_id' => Car::find(2)->id,
        ]);
        ServiceLog::create([
            'status' => 'Return Delivery',
            'description' => 'Returning the car',
            'car_id' => Car::find(2)->id,
        ]);


    }
}
