<?php

//use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        factory(App\Models\Product\Product::class, 4)->create();
        Model::reguard();
       //
    }
}
