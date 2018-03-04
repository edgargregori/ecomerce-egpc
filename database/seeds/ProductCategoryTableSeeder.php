<?php

use Illuminate\Database\Seeder;

class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product_category = [
           ['category_name' => 'name1', 'max_reward_points_encash' => 100],
           ['category_name' => 'name1', 'max_reward_points_encash' => 100],
           ['category_name' => 'name1', 'max_reward_points_encash' => 100]
        ];
        foreach ( $product_category as $value  ) {
            App\Models\ProductCategory\ProductCategory::create($value);
        }
    }
}
