<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('product_category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category_name', 100);
            $table->unsignedInteger('max_reward_points_encash');
            $table->unsignedInteger('parent_category_id')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_category');
        //Schema::table('product_category', function (Blueprint $table) {
        //    //
        //});
    }
}
