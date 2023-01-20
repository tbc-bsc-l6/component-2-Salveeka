<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

    	foreach (range(1,500) as $index) {
            DB::table('cart')->insert([
                'name' => $faker->name,
                'description' => $faker->sentence,
                'image' => $faker->imageUrl($width=500, $height=500),
                'price' => $faker->randomNumber(3),
                'created_at' => $faker->date("Y-m-d H:i:s"),
                'updated_at' => $faker->date("Y-m-d H:i:s"),
            ]);

            DB::table('products')->insert([
                'category' => $faker->randomElement(['Books','CDs','Games']),
                'name' => $faker->name,
                'author' => $faker->name,
                'price' => $faker->randomNumber(3),
                'size' => $faker->randomNumber(3),
                'created_at' => $faker->date("Y-m-d H:i:s"),
                'updated_at' => $faker->date("Y-m-d H:i:s"),
            ]);
        }
    }
}
