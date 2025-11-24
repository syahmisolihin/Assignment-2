<?php

namespace Database\Seeders;

use DB;
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
        $faker=Faker::create();

        for($i=1;$i<=30; $i++){
            DB::table('customer')->insert([
                'name'=>$faker->name,
                'email'=>$faker->email,
                'address'=>$faker->address,
                'phoneNumber'=>$faker->phoneNumber(),
                'gender'=>$faker->randomElement(['M','F']),
                'birthday'=>$faker->date('Y-m-d'),
            ]);
        }
        //
    }
}
