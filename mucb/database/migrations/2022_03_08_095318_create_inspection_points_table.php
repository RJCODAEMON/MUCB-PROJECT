<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_points', function (Blueprint $table) {
            $table->id('inspection_point_id');
            $table->unsignedBigInteger('inspection_category_id');
            $table->string('inspection_name_id');
            $table->tinyInteger('prior_damage');
            $table->tinyInteger('ding');
            $table->tinyInteger('scratch');
            $table->tinyInteger('chip');
            $table->tinyInteger('dent');
            $table->tinyInteger('yesno');
            $table->tinyInteger('passfail');
            $table->tinyInteger('allownotes');
            $table->tinyInteger('allowimages');
            $table->tinyInteger('sortorder');
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
        Schema::dropIfExists('inspection_points');
    }
}
