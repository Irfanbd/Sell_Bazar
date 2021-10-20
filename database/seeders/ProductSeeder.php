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
                'name'=>'Oppo Mobile',
                'price'=>'34000',
                'description'=>'A smartphone with 6gb ram and nice camera',
                'category'=>'Mobile',
                'gallery'=>'https://www.mobiledokan.com/wp-content/uploads/2020/06/Oppo-Reno3-Pro-Blue-new.jpg',
            ],
            [
                'name'=>'Apple Watch 7 series',
                'price'=>'60000',
                'description'=>'Smart Watch',
                'category'=>'Watch',
                'gallery'=>'https://www.apple.com/newsroom/images/product/watch/standard/Apple_watch-series7-availability_hero_10052021_big.jpg.large.jpg',
            ],
            [
                'name'=>'LG tv',
                'price'=>'104000',
                'description'=>'Smart Tv',
                'category'=>'Mobile',
                'gallery'=>'https://www.bdstall.com/asset/product-image/giant_126311.jpg',
            ],
            [
                'name'=>'Samsung Mobile',
                'price'=>'23000',
                'description'=>'A smartphone with 8gb ram and nice camera',
                'category'=>'Mobile',
                'gallery'=>'https://www.mobiledokan.com/wp-content/uploads/2021/09/Samsung-Galaxy-A52s-5G-image.jpg',
            ],
        ]
            );
    }
}
