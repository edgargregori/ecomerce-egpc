<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCategoryDiscount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_category_discount', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_category_id');
            $table->foreign('product_category_id')->references('id')->on('product_category')->onDelete('cascade')->onUpdate('cascade');
            $table->float('discount_value', 5, 2);
            $table->string('discount_unit', 20);
            $table->timestamp('date_created')->nullable();
            $table->timestamp('valid_until')->nullable();
            $table->string('coupon_code', 10);
            $table->unsignedInteger('minimum_order_value');
            $table->float('maximum_discount_amount', 5, 2);
            $table->char('is_redeem_allowed');
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
        Schema::dropIfExists('product_category_discount');
    }
}
