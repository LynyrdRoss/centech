<?php

use Illuminate\Database\Seeder;

use App\User;
use App\BillingInformation;

class BillingInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $users = User::all();

        foreach ($users as $user) {
        	BillingInformation::create([
        		'address' => $faker->address,
        		'region' => $faker->sentence(rand(2, 3)),
        		'postal_code' => rand(1000, 9999),
        		'user_id' => $user->id
        	]);
        }
    }
}
