<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\AssignOp\Pow;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(3)
                ->has(Product::factory()->count(20))
                ->create();

        // Category::factory()->count(3)->create();

        // Product::factory(1)->count(15)->create();
        // \App\Models\User::factory(10)->create();
    }
}
