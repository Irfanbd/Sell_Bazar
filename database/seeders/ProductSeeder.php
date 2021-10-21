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
                'name'=>'Nikon D5600 DSLR Camera with 18-140mm Lens',
                'price'=>'87000',
                'description'=>'24.2MP DX-Format CMOS Sensor.EXPEED 4 Image Processor.Display 3.2" Touchscreen.FHD 1080p Video Recording at 60 fps',
                'category'=>'camera',
                'gallery'=>'https://www.startech.com.bd/image/cache/catalog/camera/dslr-camera/nikon/d5600/d5600-500x500.jpg',
            ],
            [
                'name'=>'Sony Alpha a7R III Mirrorless Digital Camera with 16-35mm Zoom Lens',
                'price'=>'10500',
                'description'=>'Model: Alpha a7R III 42MP.42MP Full-Frame Exmor R BSI CMOS Sensor.399-Point AF System.BIONZ X Image Processor.',
                'category'=>'camera',
                'gallery'=>'https://www.startech.com.bd/image/cache/catalog/camera/dslr-camera/sony/alpha-a7r-iii-42mp-with-16-35mm/alpha-a7r-iii-42mp-with-16-35mm-500x500.jpg',
            ],
            [
                'name'=>'Gamdias Hermes E1B Gaming Combo',
                'price'=>'4200',
                'description'=>'Adopting GAMDIAS certified mechanical switches; this keyboard provides at least 50 million keystrokes lifespan and a tactile feedback. Forged with aluminum bezel',
                'category'=>'keyboard',
                'gallery'=>'https://www.startech.com.bd/image/cache/catalog/keyboard/gamdias/hermes-e1b/hermes-e1b-500x500.jpg',
            ],
            [
                'name'=>'HP Pavilion Gaming 15-ec1104AX Ryzen 7 4800H GTX 1660Ti 6GB Graphics 15.6" FHD Laptop',
                'price'=>'121000',
                'description'=>'15.6"diagonal, FHD (1920 x 1080), IPS 144hz, micro-edge, anti-glare, 250 nits, 45% NTSC',
                'category'=>'laptop',
                'gallery'=>'https://www.mobiledokan.com/wp-content/uploads/2020/08/Google-Pixel-4a-new-black.jpg',
            ],
            [
                'name'=>'AMD Ryzen Threadripper 1950X Processor',
                'price'=>'121000',
                'description'=>'AMD Ryzen Threadripper 1950X Processor is designed for hi-quality powerful multi-processing.
                 It has 16 cores with 32 threads which supports AMD TR4 X399 Sockets.',
                'category'=>'processor',
                'gallery'=>'https://www.startech.com.bd/image/cache/catalog/Component/processor/Amd/amd-ryzen-threadripper-1950x-processor/amd-ryzen-threadripper-1950x-processor-500x500.jpg',
            ],[
                'name'=>'INTEL 10TH GEN CORE I9-10900K 10 CORE PROCESSOR',
                'price'=>'45000',
                'description'=>'Intel Core i9-10900K',
                'category'=>'processor',
                'gallery'=>'https://www.startech.com.bd/image/cache/catalog/processor/Intel/i9-10900ka/i9-10900ka-500x500.jpg',
            ],[
                'name'=>'A4Tech Bloody GC-330 Gaming Chair',
                'price'=>'20500',
                'description'=>'e A4Tech Bloody GC-330 Gaming Chair is one of the best gaming chairs available as it holds numerous world-class features',
                'category'=>'chair',
                'gallery'=>'https://www.startech.com.bd/image/cache/catalog/gaming-chair/a4tech/bloody-gc-330/bloody-gc-330-500x500.jpg',
            ],[
                'name'=>'Apple iPad Air 10.9 inch MYGW2ZP/A 4th Gen 64GB Wi-Fi & Cellular Space Grey',
                'price'=>'90000',
                'description'=>'10.9-inch Liquid Retina display featuring True Tone and P3 wide color.',
                'category'=>'tablet',
                'gallery'=>'https://www.startech.com.bd/image/cache/catalog/tablet/apple/ipad-air/myfm2zp-a/ipad-myfm2zp-a-500x500.jpg',
            ],

        ]
            );
    }
}
