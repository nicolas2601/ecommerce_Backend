<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use App\Models\CartItem;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear usuarios para los cart items
        $users = User::factory(10)->create();

        // Crear categorías
        $categories = Category::factory(10)->create();

        // Crear 1000 productos
        $products = $categories->flatMap(function ($category) {
            return Product::factory(100)->create([
                'category_id' => $category->id
            ]);
        });

        // Crear cart items para los productos
        $products->each(function ($product) use ($users) {
            CartItem::factory(rand(1, 3))->create([
                'product_id' => $product->id,
                'user_id' => $users->random()->id
            ]);
        });
    }
}
