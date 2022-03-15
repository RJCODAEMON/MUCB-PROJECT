<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequiredPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('required_photos', function (Blueprint $table) {
            $table->id('required_photo_id');
            $table->unsignedBigInteger('inspection_category_id');
            $table->string('photo_name');
            $table->boolean('sortorder');
            $table->foreign('inspection_category_id')->references('id')->on('inspection_categories');
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
        Schema::dropIfExists('required_photos');
    }
}
