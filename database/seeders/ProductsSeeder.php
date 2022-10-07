<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => 'Rakk Lam ang Mechanical Keyboard',
            'description' => 'Lite',
            'currency' => 'PHP',
            'price' => 2500.00,
            'brand' => 'Rakk',
            'category' => 'blue switches',
            'image' => 'https://ph-test-11.slatic.net/p/97759fbbf32f907453a469a72bf16956.jpg',
        ]);

        DB::table('products')->insert([
            'title' => 'Nike Air Force 1 Low Retro',
            'description' => 'White/Metallic Gold/Chocolate',
            'currency' => 'PHP',
            'price' => 7595.00,
            'brand' => 'Nike',
            'category' => 'Shoes',
            'image' => 'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/4bcd0306-2bb0-4fcc-b52b-ba7e14b7eab7/air-force-1-low-retro-shoes-j9C2WJ.png'
        ]);

        DB::table('products')->insert([
            'title' => 'Jordan Series Mid',
            'description' => 'Pilgrim/White/Sail/Light Olive',
            'currency' => 'PHP',
            'price' => 5095.00,
            'brand' => 'Nike Jordan',
            'category' => 'Shoes',
            'image' => 'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/ff60a6fe-da42-4227-9678-729851ab3fef/jordan-series-mid-shoes-xdNNBc.png'
        ]);
    }
}