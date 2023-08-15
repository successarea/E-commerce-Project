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
        //
        DB::table('products')->insert([[
            'name'=>'LG Mobile',
            'price'=>'200',
            'category'=>'mobile',
            'description'=>'A smart phone with 4gb ram and much more features',
            'gallery'=>'https://www.91-img.com/pictures/140182-v2-lg-wing-mobile-phone-large-1.jpg',
        ],
        [
            'name'=>'Oppo Mobile',
            'price'=>'300',
            'category'=>'mobile',
            'description'=>'A smart phone with 8gb ram and much more features',
            'gallery'=>'https://www.oppo.com/content/dam/oppo/product-asset-library/reno/reno8-series/global/reno8-in/v1/assets/images-design-gallery-2-meili-mo-1.jpg.webp',
        ],
        [
            'name'=>'LG Tv',
            'price'=>'800',
            'category'=>'tv',
            'description'=>'A smart tv with many features and can connect with other devices',
            'gallery'=>'https://www.lg.com/in/images/tvs/md07554865/gallery/55UQ9000PSD-MZ-02.jpg',
        ],
        [
            'name'=>'Sony Tv',
            'price'=>'1000',
            'category'=>'tv',
            'description'=>'A smart tv with many features and can connect with other devices',
            'gallery'=>'https://www.sonysmart.com.bd/public/uploads/all/BE5WERsz0N3x0I9pNBihwihNKP8vh76dUgLuFABa.jpg',
        ],
        [
            'name'=>'Samsaung Fridge',
            'price'=>'1000',
            'category'=>'fridge',
            'description'=>'A smart and strong fridge with many features',
            'gallery'=>'https://www.91-img.com/pictures/140182-v2-lg-wing-mobile-phone-large-1.jpg',
        ],]);
    }
}
