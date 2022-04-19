<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderinfos', function (Blueprint $table) {
            $table->id('order_info_id');
            $table->string('company_name')->nullable();
            $table->string('country',20);
            $table->string('street_add1',50);
            $table->string('street_add2',50)->nullable();
            $table->string('state',20);
            $table->string('zipcode',10);


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
        Schema::dropIfExists('orderinfos');
    }
}
