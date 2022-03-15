<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_photos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('inspection_id');
            $table->unsignedBigInteger('required_photo_id');
            $table->unsignedBigInteger('inspection_point_id');
            $table->string('Name');
            $table->string('Url');
            $table->string('Filespec');
            $table->string('Thumbnail');
            $table->foreign('inspection_id')->references('inspection_id')->on('inspections');
            $table->foreign('required_photo_id')->references('required_photo_id')->on('required_photos');
            $table->foreign('inspection_point_id')->references('inspection_point_id')->on('inspection_points');
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
        Schema::dropIfExists('inspection_photos');
    }
}
