<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $caterogies = [
            ['name' => 'کالای دیجیتال', 'parent_id' => null, 'status' => 'show'],
            ['name' => 'موبایل', 'parent_id' => 1, 'status' => 'show'],
            ['name' => 'پوشاک', 'parent_id' => null, 'status' => 'show'],
            ['name' => 'کفش', 'parent_id' => 3, 'status' => 'show'],
            ['name' => 'لپتاپ', 'parent_id' => 1, 'status' => 'show'],
            ['name' => 'بلندگو', 'parent_id' => 1, 'status' => 'notShow'],
        ];

        Category::insert($caterogies);

        $products = [
            ['name' => 'موبایل سامسونگ', 'category_id' => 2, 'price' => '1000', 'available_quantity' => 50, 'total_sell_quantity' => 27, 'total_seen' => 512],
            ['name' => 'موبایل ال جی', 'category_id' => 2, 'price' => '2000', 'available_quantity' => 60, 'total_sell_quantity' => 37, 'total_seen' => 112],
            ['name' => 'لپتاپ سامسونگ', 'category_id' => 5, 'price' => '1500', 'available_quantity' => 27, 'total_sell_quantity' => 10, 'total_seen' => 212],
            ['name' => 'کفش نایک', 'category_id' => 4, 'price' => '3000', 'available_quantity' => 40, 'total_sell_quantity' => 30, 'total_seen' => 150],
        ];

        Product::insert($products);

        $orders = [
            ['user_id' => 2, 'product_id' => 4, 'count' => 3, 'total_price' => '9000'],
            ['user_id' => 3, 'product_id' => 3, 'count' => 9, 'total_price' => '13500'],
            ['user_id' => 2, 'product_id' => 1, 'count' => 2, 'total_price' => '2000'],
            ['user_id' => 1, 'product_id' => 2, 'count' => 10, 'total_price' => '20000'],
            ['user_id' => 2, 'product_id' => 3, 'count' => 1, 'total_price' => '1500'],
            ['user_id' => 2, 'product_id' => 1, 'count' => 3, 'total_price' => '3000'],
        ];

        Order::insert($orders);
    }
}
