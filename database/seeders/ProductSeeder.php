<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * ProductSeeder
 *
 * Mengisi data produk bakery awal ke tabel `products`.
 * Ini memudahkan testing & demo aplikasi.
 */
class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // ⬇️ EDIT DI SINI untuk ubah produk bakery awal
        $products = [
            [
                'product_name' => 'Croissant Butter',
                'category' => 'Roti',
                'price' => 25000,
                'description' => 'Croissant renyah khas Prancis dengan mentega premium.',
                'image' => null, // belum ada gambar
            ],
            [
                'product_name' => 'Roti Tawar Gandum',
                'category' => 'Roti',
                'price' => 35000,
                'description' => 'Roti gandum utuh, cocok untuk sarapan sehat.',
                'image' => null,
            ],
            [
                'product_name' => 'Brownies Fudge',
                'category' => 'Kue',
                'price' => 75000,
                'description' => 'Brownies cokelat legit dengan tekstur fudge yang lembut.',
                'image' => null,
            ],
            [
                'product_name' => 'Cheese Cake Slice',
                'category' => 'Kue',
                'price' => 45000,
                'description' => 'Potongan kue keju premium dengan topping selai stroberi.',
                'image' => null,
            ],
            [
                'product_name' => 'Es Kopi Susu',
                'category' => 'Minuman',
                'price' => 20000,
                'description' => 'Kopi susu gula aren segar, cocok menemani kue.',
                'image' => null,
            ],
            [
                'product_name' => 'Matcha Latte',
                'category' => 'Minuman',
                'price' => 25000,
                'description' => 'Minuman matcha Jepang dengan susu segar.',
                'image' => null,
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->insert(array_merge($product, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
