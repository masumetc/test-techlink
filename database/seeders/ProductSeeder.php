<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::created([
            'img' => 'https://m.media-amazon.com/images/I/71w+q9Zy7sL._AC_UL320_.jpg',
            'brand' => 'Apple',
            'title' => 'Apple iPhone 14 Pro Max (128GB) - Space Black',
            'rating' => 4.8,
            'reviews' => 1500,
            'sellPrice' => 1099.00,
            'orders' => '500+',
            'mrp' => 1199.00,
            'discount' => 8,
            'category' => 'Smartphones'
        ]);

        Product::created([
            'img' => 'https://m.media-amazon.com/images/I/71w+q9Zy7sL._AC_UL320_.jpg',
            'brand' => 'Apple',
            'title' => 'Apple iPhone 15 Pro Max (128GB) - Space Black',
            'rating' => 4.9,
            'reviews' => 1500,
            'sellPrice' => 1099.00,
            'orders' => '500+',
            'mrp' => 1199.00,
            'discount' => 8,
            'category' => 'Smartphones'
        ]);
    }
}
