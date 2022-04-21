<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionResponseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_response', function (Blueprint $table) {
            $table->id('response_id');
            $table->unsignedBigInteger('category_id')->default(0);
            $table->unsignedBigInteger('subcategory_id')->default(0);
            $table->unsignedBigInteger('attribute_id')->default(0);
            $table->unsignedBigInteger('order_id')->default(0);
            $table->unsignedBigInteger('inspection_id')->default(0);
            $table->string('answer')->default(0);
            $table->foreign('subcategory_id')->references('subcategory_id')->on('subcategories')->onDelete('cascade')->default(0);
            $table->foreign('category_id')->references('id')->on('inspection_categories')->onDelete('cascade')->default(0);
            $table->foreign('attribute_id')->references('attribute_id')->on('attributes')->onDelete('cascade')->default(0);
            $table->foreign('order_id')->references('order_id')->on('orders')->onDelete('cascade')->default(0);
            $table->foreign('inspection_id')->references('inspection_id')->on('inspections')->onDelete('cascade')->default(0);
            
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
        Schema::dropIfExists('inspection_response');
    }
}
