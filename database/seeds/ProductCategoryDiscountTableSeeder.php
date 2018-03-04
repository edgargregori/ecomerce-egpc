<?php
//use App\Models\ProductCategoryDiscount\ProductCategoryDiscount;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ProductCategoryDiscountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        factory(App\Models\ProductCategoryDiscount\ProductCategoryDiscount::class, 4)->create();
        Model::reguard();

    }
}
