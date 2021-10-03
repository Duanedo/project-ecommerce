<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->integer('coupon_id');
            $table->integer('payment_id');
            $table->integer('user_id');
            $table->string('name',200);
            $table->string('address');
            $table->integer('phone');
            $table->tinyinteger('status');
            $table->float('shippingprice',15,3)->nullable();
            $table->float('totalprice',15,3);
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
        Schema::dropIfExists('order');
    }
}