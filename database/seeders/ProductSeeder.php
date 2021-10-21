<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'GALAX GeForce RTX 3090 HOF 24GB GDDR6X Graphics Card',
                'price'=>'84000',
                'description'=>'GALAX GeForce RTX 3090 HOF 24GB Graphics Card is loaded with brand new beastly 14+8+4 phase',
                'category'=>'GPU',
                'gallery'=>'https://www.startech.com.bd/image/cache/catalog/graphics-card/galax/rtx3090-hof/rtx3090-hof-box-500x500.jpg',
            ],
            [
                'name'=>'Apple MacBook Air 13.3-Inch',
                'price'=>'10500',
                'description'=>'Apple MacBook Air 13" Space Gray with Apple M1 MGN93',
                'category'=>'Laptop',
                'gallery'=>'https://www.startech.com.bd/image/cache/catalog/laptop/apple/macbook-air/macbook-air-13-inch-silver/macbook-air-13-3-inch-silver-1-500x500.jpg',
            ],
            [
                'name'=>'Google Pixel 5',
                'price'=>'62900',
                'description'=>'Dual pixel PDAF, LED flash, 107º ultrawide, f/1.7 & f/2.2, OIS, auto-HDR',
                'category'=>'Mobile',
                'gallery'=>'https://www.mobiledokan.com/wp-content/uploads/2020/10/Google-Pixel-5.jpg',
            ],
            [
                'name'=>'Google Pixel 4a',
                'price'=>'34000',
                'description'=>'Google Pixel 4a comes with 5.81 inches Full HD+ IPS LCD screen.
                 It has a left punch-hole design. The back camera is of high-quality 12.2 MP with PDAF',
                'category'=>'Mobile',
                'gallery'=>'https://www.mobiledokan.com/wp-content/uploads/2020/08/Google-Pixel-4a-new-black.jpg',
            ],


        ]
            );
    }
}
