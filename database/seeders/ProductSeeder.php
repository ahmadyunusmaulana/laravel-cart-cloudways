<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Str;

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
            'name' => 'Samsung book pro',
            'details' => 'Samsung, 16 GPU, 16 GB, 512 GB SSD',
            'description' => 'Samsung Pro yang paling andal kini hadir.',
            'brand' => 'Samsung',
            'price' => 1449,
            'shipping_cost' => 25,
            'image_path' => 'store/product2.png'
        ]);

    }
}
