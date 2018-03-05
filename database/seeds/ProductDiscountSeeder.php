<?php

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductDiscount\ProductDiscount;
use Illuminate\Database\Seeder;

class ProductDiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        factory(ProductDiscount::class, 4)->create();
        Model::reguard();
    }
}
