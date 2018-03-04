<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('product_category_id');
            $table->foreign('product_category_id')->references('id')->on('product_category')->onDelete('cascade')->onUpdate('cascade');
            $table->string('product_name', 20);
            $table->string('product_description', 20);
            $table->unsignedInteger('units_in_stock');
            $table->unsignedInteger('reward_points_credit');

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
        Schema::dropIfExists('product');
    }
}
