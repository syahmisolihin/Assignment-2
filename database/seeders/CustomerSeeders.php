<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class CustomerSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
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
