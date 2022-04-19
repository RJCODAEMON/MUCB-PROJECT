<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentFailuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_failures', function (Blueprint $table) {
            $table->id();
            $table->string("payment_id");
            $table->string("currency")->nullable();
            $table->string("status")->nullable();
            $table->string("method")->nullable();
            $table->string("captured")->nullable();
            $table->string("description")->nullable();
            $table->string("card_id")->nullable();
            $table->string("bank")->nullable();
            $table->string("wallet")->nullable();
            $table->string("vpa")->nullable();
            $table->string("email")->nullable();
            $table->string("contact")->nullable();
            $table->string("error_code")->nullable();
            $table->string("error_description")->nullable();
            $table->string("error_source")->nullable();
            $table->string("error_step")->nullable();
            $table->string("error_reason")->nullable();
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
        Schema::dropIfExists('payment_failures');
    }
}
