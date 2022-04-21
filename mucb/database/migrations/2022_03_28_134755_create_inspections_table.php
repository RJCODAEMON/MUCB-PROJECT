<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspections', function (Blueprint $table) {

            
            $table->id('inspection_id');
            $table->unsignedBigInteger('OrderId')->default(0);
            $table->foreign('OrderId')->references('order_id')->on('orders')->onDelete('cascade')->default(0);
            $table->dateTime('DateCreated')->default(0);
            $table->dateTime('DateModified')->default(0);
            $table->dateTime('DateAssigned')->default(0);
            $table->dateTime('DateScheduled')->default(0);
            $table->dateTime('DateCompleted')->default(0);
            $table->dateTime('DateReleased')->default(0);
            $table->dateTime('DateDownloaded')->default(0);
            $table->dateTime('AppointmentDate')->default(0);
            $table->integer('CreatedByUserId')->default(0);
            $table->integer('ModifiedByUserId')->default(0);
            $table->integer('AssignedToUserId')->default(0);
            $table->integer('ScheduledByUserId')->default(0);
            $table->integer('InspectionsStatusId')->default(0);
            $table->string('Notes')->default(0);
            $table->integer('InspectorsRating')->default(0);
            $table->string('CompanyName',20)->default(0);
            $table->string('CustomerFirstName',20)->default(0);
            $table->string('CustomerLastName',20)->default(0);
            $table->string('CustomerAddress1',20)->default(0);
            $table->string('CustomerAddress2',20)->default(0);
            $table->string('CustomerCity',20)->default(0);
            $table->string('CustomerState',20)->default(0);
            $table->string('CustomerZip',20)->default(0);
            $table->string('CustomerPhone',20)->default(0);
            $table->string('CustomerEmail',20)->default(0);
            $table->string('Seller',20)->default(0);
            $table->string('Buyer',20)->default(0);
            $table->string('DealershipName',20)->default(0);
            $table->string('DealershipPhone',20)->default(0);
            $table->string('SalesPerson',20)->default(0);
            $table->string('SalesPersonPhone',20)->default(0);
            $table->string('VehicleAddress1',20)->default(0);
            $table->string('VehicleAddress2',20)->default(0);
            $table->string('VehicleCity',20)->default(0);
            $table->string('VehicleState',20)->default(0);
            $table->string('VehicleZip',20)->default(0);
            $table->string('AdditionalInformation',30)->default(0);
            $table->string('Year',20)->default(0);
            $table->string('Make',20)->default(0);
            $table->string('Model',20)->default(0);
            $table->string('VIN',20)->default(0);
            $table->string('StockNumber',20)->default(0);
            $table->string('Mileage',20)->default(0);
            $table->string('ExteriorColor',20)->default(0);
            $table->string('InteriorColor',20)->default(0);
            $table->string('InteriorType',20)->default(0);
            $table->string('EngineSize',20)->default(0);
            $table->string('EngineCylinders',20)->default(0);
            $table->string('FuelType',20)->default(0);
            $table->string('DriveTrain',20)->default(0);
            $table->string('Roof',20)->default(0);

            $table->boolean('FrameDamage')->default(0);
            $table->boolean('Flood')->default(0);
            $table->boolean('Codes')->default(0);
            $table->boolean('Leaks')->default(0);
            $table->string('ACTemp')->default(0);
            $table->boolean('PriorRepair')->default(0);
            $table->string('CarFax',20)->default(0);
            $table->string('TireLFBrand',20)->default(0);
            $table->string('TireLFTread',20)->default(0);
            $table->string('TireLFWidth',20)->default(0);
            $table->string('TireLFHeight',20)->default(0);
            $table->string('TireLFRim',20)->default(0);

            $table->string('TireRFBrand',20)->default(0);
            $table->string('TireRFTread',20)->default(0);
            $table->string('TireRFWidth',20)->default(0);
            $table->string('TireRFHeight',20)->default(0);
            $table->string('TireRFRim',20)->default(0);

            $table->string('TireRRBrand',20)->default(0);
            $table->string('TireRRTread',20)->default(0);
            $table->string('TireRRWidth',20)->default(0);
            $table->string('TireRRHeight',20)->default(0);
            $table->string('TireRRRim',20)->default(0);

            $table->string('TireLRBrand',20)->default(0);
            $table->string('TireLRTread',20)->default(0);
            $table->string('TireLRWidth',20)->default(0);
            $table->string('TireLRHeight',20)->default(0);
            $table->string('TireLRRim',20)->default(0);

            $table->boolean('SpareTire')->default(0);
            $table->string('SpareBrand',20)->default(0);
            $table->string('SpareTread',20)->default(0);
            $table->string('SpareWidth',20)->default(0);
            $table->string('SpareHeight',20)->default(0);
            $table->string('SpareRim',20)->default(0);
            $table->string('SpareType',20)->default(0);
            $table->boolean('SpareDamage')->default(0);
            $table->boolean('WheelLocks')->default(0);
            $table->boolean('WheelLockKey')->default(0);
            $table->boolean('AirPump')->default(0);
            $table->string('WheelType',20)->default(0);
            $table->boolean('WheelDamage')->default(0);
            $table->integer('KeylessRemotes')->default(0);
            $table->boolean('KeylessRemotesDamaged')->default(0);
            $table->boolean('OwnerBooks')->default(0);
            $table->integer('FloorMatsWorn')->default(0);
            $table->integer('FloorMatsDamaged')->default(0);
            $table->integer('FloorMatsMissing')->default(0);
            $table->string('QboSalesRefld',20)->default(0);
            $table->tinyInteger('mailsent',20)->default(0);
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
        Schema::dropIfExists('inspections');
    }
}
