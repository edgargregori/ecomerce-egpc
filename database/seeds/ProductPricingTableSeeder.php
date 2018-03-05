<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductPricing\ProductPricing;

class ProductPricingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        factory(ProductPricing::class, 4)->create();
        Model::reguard();
    }
}
