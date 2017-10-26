<?php

use Illuminate\Database\Seeder;

use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();

    	$path = "css/images/catalog";

    	$count = 30;

    	for ($i = 1; $i <= $count; $i++)
    	{
    		Product::create([
    			'product_image' => "{$path}/0" . ($i % 6 + 1) . "-full.jpg",
    			'product_thumb' => "{$path}/0" . ($i % 6 + 1) . "-thumbnail.jpg",
    			'name' => $faker->lastname,
    			'description' => $faker->text,
    			'barcode' => str_random(8),
    			'price' => $faker->randomFloat(null, 1000, 999999)
    		]);

    	echo $i . " ";
    	}
    }
}
