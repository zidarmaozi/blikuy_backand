<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // digunakan untuk mengakses database
use Illuminate\Support\Str; // digunakan untuk membuat slug

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Laptop Gaming Acer Predator Helios 16',
                'slug' => Str::slug('Laptop Gaming Acer Predator Helios 16'),
                'description' => 'Laptop gaming performa tinggi dengan prosesor Intel Core i7 Generasi 14, GPU RTX 4060, dan layar 16 inci WQXGA 165Hz.',
                'category_id' => 1, // Elektronik
                'price' => 28999000,
                'img' => 'https://images.unsplash.com/photo-1603302576837-37561b2e2302?auto=format&fit=crop&w=600&q=80',
                'stock' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sepatu Running Nike Air Zoom Pegasus 40',
                'slug' => Str::slug('Sepatu Running Nike Air Zoom Pegasus 40'),
                'description' => 'Sepatu lari yang responsif dan empuk dengan teknologi bantalan Zoom Air untuk performa lari maksimal sehari-hari.',
                'category_id' => 4, // Olahraga
                'price' => 2099000,
                'img' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=600&q=80',
                'stock' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jaket Denim Oversize Vintage Wash',
                'slug' => Str::slug('Jaket Denim Oversize Vintage Wash'),
                'description' => 'Jaket denim bergaya streetwear kasual berbahan katun 14oz premium yang kuat, tebal, dan nyaman dipakai.',
                'category_id' => 2, // Fashion
                'price' => 349000,
                'img' => 'https://images.unsplash.com/photo-1576995853123-5a10305d93c0?auto=format&fit=crop&w=600&q=80',
                'stock' => 35,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kopi Susu Gula Aren Artisan 1 Liter',
                'slug' => Str::slug('Kopi Susu Gula Aren Artisan 1 Liter'),
                'description' => 'Espresso arabika pilihan berpadu susu segar murni dan manisnya gula aren alami khas nusantara dalam kemasan botol 1 Liter.',
                'category_id' => 3, // Makanan & Minuman
                'price' => 75000,
                'img' => 'https://images.unsplash.com/photo-1517256064527-09c73fc73e38?auto=format&fit=crop&w=600&q=80',
                'stock' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sony WH-1000XM5 Wireless Headphones',
                'slug' => Str::slug('Sony WH-1000XM5 Wireless Headphones'),
                'description' => 'Headphone peredam kebisingan kelas industri terbaik dengan audio resolusi tinggi dan daya tahan baterai hingga 30 jam.',
                'category_id' => 1, // Elektronik
                'price' => 4999000,
                'img' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=600&q=80',
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->updateOrInsert(
                ['slug' => $product['slug']],
                $product
            );
        }
    }
}
