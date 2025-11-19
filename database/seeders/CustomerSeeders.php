<?php

namespace Database\Seeders;
use Faker\Factory as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker =Faker::create();

        for ($i=1; $i<=5;$i++){
DB::table('customers')->insert([
    'name'=>$faker->name,
    'email'=>$faker->email,
    'address'=>$faker->country,
    'phoneNumber'=>$faker->phoneNumber,
    'gender'=>$faker->randomElement(['M','F']),
    'birthday'=>$faker->date($format='y-m-d'),

]);

        }
    }
}
