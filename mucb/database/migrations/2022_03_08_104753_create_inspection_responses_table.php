<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

class CreateInspectionResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_responses', function (Blueprint $table) {

            $table->unsignedBigInteger('inspection_id');
            $table->unsignedBigInteger('inspection_point_id');
            $table->integer('PriorDamange');
            $table->integer('Dings');
            $table->integer('DingSize');
            $table->integer('Scratches');
            $table->integer('ScratchSize');
            $table->integer('Chips');
            $table->integer('ShipSize');
            $table->integer('Dents');
            $table->integer('DentSize');
            $table->integer('Answer');
            $table->string('notes');
            $table->foreign('inspection_id')->references('inspection_id')->on('inspections');
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
        Schema::dropIfExists('inspection_responses');
    }
}
