<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id');
            $table->unsignedBigInteger('package_id');
            $table->unsignedBigInteger('user_id');
            $table->float('price');
            $table->unsignedBigInteger('orderinfo_id');
            $table->unsignedBigInteger('vehicalinfo_id');
            $table->unsignedBigInteger('status')->default('1');
            $table->unsignedBigInteger('payment_details');
            $table->foreign('package_id')->references('package_id')->on('packages')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('orderinfo_id')->references('order_info_id')->on('orderinfos')->onDelete('cascade');
            $table->foreign('vehicalinfo_id')->references('vehicalinfo_id')->on('vehicalinfos')->onDelete('cascade');
            $table->foreign('status')->references('inspection_status_id')->on('inspection_statuses')->onDelete('cascade');
            $table->foreign('payment_details')->references('id')->on('payment_details')->onDelete('cascade');
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
        Schema::dropIfExists('orders');
    }
}
