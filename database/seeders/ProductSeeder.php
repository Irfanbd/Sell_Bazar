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
        DB::table('products')->insert(
            [
                'name'=>'Oppo Mobile',
                'price'=>'14000',
                'description'=>'A smartphone with 4gb ram and nice camera',
                'category'=>'Mobile',
                'gallery'=>'https://www.mobiledokan.com/wp-content/uploads/2021/08/Oppo-A16-image.jpg',
            ]
            );
    }
}
