<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cart;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'And The Mountains Echoed',
                'description' => 'BOOK',
                'image' => 'https://media.thuprai.com/front_covers/140885256X.01._SCLZZZZZZZ_SX500_.jpg',
                'price' => 1000
            ],
            [
                'name' => 'Among Us',
                'description' => 'GAME',
                'image' => 'https://play-lh.googleusercontent.com/8ddL1kuoNUB5vUvgDVjYY3_6HwQcrg1K2fd_R8soD-e2QYj8fT9cfhfh3G0hnSruLKec',
                'price' => 1200
            ],
            [
                'name' => 'Beloved',
                'description' => 'BOOK',
                'image' => 'https://everydaypower.com/wp-content/uploads/2021/08/beloved-quotes-from-toni-morrison.png',
                'price' => 400
            ],
            [
                'name' => 'Taylor Swift Red',
                'description' => 'Cd',
                'image' => 'https://media.newyorker.com/photos/60747954c920e996bd1e486d/master/pass/Battan-FearlessTaylorsVersion.jpg',
                'price' => 3200
            ]
        ];
   
        foreach ($products as $key => $value) {
            Cart::create($value);
        }
    }
    }
