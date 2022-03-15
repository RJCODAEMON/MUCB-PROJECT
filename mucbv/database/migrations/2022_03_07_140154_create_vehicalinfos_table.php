<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicalinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicalinfos', function (Blueprint $table) {
            $table->id('vehicalinfo_id');
            $table->string('dealership_name',20);
            $table->string('dealership_phno',20);
            $table->string('saleperson_name',20);
            $table->string('saleperson_phno',20);
            $table->string('vin',20);
            $table->string('stock',20);
            $table->string('year',4);
            $table->string('make',20);
            $table->string('model',20);
            $table->string('trim',20);
            $table->string('ext_color',20);
            $table->string('phy_add',50);
            $table->string('loc_city',20);
            $table->string('loc_zip',20);
            $table->string('more_info',100);
            $table->string('reference',20);
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
        Schema::dropIfExists('vehicalinfos');
    }
}
