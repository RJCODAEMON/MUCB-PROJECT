<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspectors', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('email', 50);
            $table->string('password');
            $table->string('phone', 50);
            $table->string('city', 50);
            $table->string('zip', 50);
            $table->string('Mechanical_Experience', 50);
            $table->string('Inspection_Experience', 50);
            $table->tinyInteger('Isactive');
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
        Schema::dropIfExists('inspectors');
    }
}
