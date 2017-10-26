<?php

use Illuminate\Database\Seeder;

use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();
    	$count = 20;

    	for ($i = 1; $i <= $count; $i++)
    	{
    		$email = $faker->email;

    		User::create([
    			'name' => $faker->firstname($gender = null),
    			'last_name' => $faker->lastname,
    			'email' => $email,
    			'password' => password_hash($email, PASSWORD_DEFAULT)
    		]);

    		echo $i . " ";
    	}
    }
}
