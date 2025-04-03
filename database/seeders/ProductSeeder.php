<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\CartItem;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Crear 1000 productos
        Product::factory(1000)->create()->each(function ($product) {
            // Para algunos productos, crear items en carritos
            if (rand(0, 4) === 0) { // 20% de probabilidad
                CartItem::factory()->create([
                    'product_id' => $product->id
                ]);
            }
        });
    }
}