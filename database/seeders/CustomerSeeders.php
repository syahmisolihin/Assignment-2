<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Faker\Factory as Faker;

class CustomerSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 30; $i++) {
            DB::table('customers')->insert([
                'Name'        => $faker->name,
                'Email'       => $faker->email,
                'Address'     => $faker->country,
                'PhoneNumber' => $faker->phoneNumber,
                'Gender'      => $faker->randomElement(['M','F']),
                'Birthday'    => $faker->date('Y-m-d'),
            ]);
        }
    }

    public function create(Request $request){

        \App\Models\customers::create($request->all());
        return redirect('/form')->with('success','New data insert');
    }
}
