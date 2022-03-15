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
            $table->string('OrderId',20);
            $table->dateTime('DateCreated');
            $table->dateTime('DateModified');
            $table->dateTime('DateAssigned');
            $table->dateTime('DateScheduled');
            $table->dateTime('DateCompleted');
            $table->dateTime('DateReleased');
            $table->dateTime('DateDownloaded');
            $table->dateTime('AppointmentDate');
            $table->integer('CreatedByUserId');
            $table->integer('ModifiedByUserId');
            $table->integer('AssignedToUserId');
            $table->integer('ScheduledByUserId');
            $table->integer('InspectionsStatusId');
            $table->string('Notes');
            $table->integer('InspectorsRating');
            $table->string('CompanyName',20);
            $table->string('CustomerFirstName',20);
            $table->string('CustomerLastName',20);
            $table->string('CustomerAddress1',20);
            $table->string('CustomerAddress2',20);
            $table->string('CustomerCity',20);
            $table->string('CustomerState',20);
            $table->string('CustomerZip',20);
            $table->string('CustomerPhone',20);
            $table->string('CustomerEmail',20);
            $table->string('Seller',20);
            $table->string('Buyer',20);
            $table->string('DealershipName',20);
            $table->string('DealershipPhone',20);
            $table->string('SalesPerson',20);
            $table->string('SalesPersonPhone',20);
            $table->string('VehicleAddress1',20);
            $table->string('VehicleAddress2',20);
            $table->string('VehicleCity',20);
            $table->string('VehicleState',20);
            $table->string('VehicleZip',20);
            $table->string('AdditionalInformation',30);
            $table->string('Year',20);
            $table->string('Make',20);
            $table->string('Model',20);
            $table->string('VIN',20);
            $table->string('StockNumber',20);
            $table->string('Mileage',20);
            $table->string('ExteriorColor',20);
            $table->string('InteriorColor',20);
            $table->string('InteriorType',20);
            $table->string('EngineSize',20);
            $table->string('EngineCylinders',20);
            $table->string('FuelType',20);
            $table->string('DriveTrain',20);
            $table->string('Roof',20);

            $table->boolean('FrameDamage');
            $table->boolean('Flood');
            $table->boolean('Codes');
            $table->boolean('Leaks');
            $table->string('ACTemp');
            $table->boolean('PriorRepair');
            $table->string('CarFax',20);
            $table->string('TireLFBrand',20);
            $table->string('TireLFTread',20);
            $table->string('TireLFWidth',20);
            $table->string('TireLFHeight',20);
            $table->string('TireLFRim',20);

            $table->string('TireRFBrand',20);
            $table->string('TireRFTread',20);
            $table->string('TireRFWidth',20);
            $table->string('TireRFHeight',20);
            $table->string('TireRFRim',20);

            $table->string('TireRRBrand',20);
            $table->string('TireRRTread',20);
            $table->string('TireRRWidth',20);
            $table->string('TireRRHeight',20);
            $table->string('TireRRRim',20);

            $table->string('TireLRBrand',20);
            $table->string('TireLRTread',20);
            $table->string('TireLRWidth',20);
            $table->string('TireLRHeight',20);
            $table->string('TireLRRim',20);

            $table->boolean('SpareTire');
            $table->string('SpareBrand',20);
            $table->string('SpareTread',20);
            $table->string('SpareWidth',20);
            $table->string('SpareHeight',20);
            $table->string('SpareRim',20);
            $table->string('SpareType',20);
            $table->boolean('SpareDamage');
            $table->boolean('WheelLocks');
            $table->boolean('WheelLockKey');
            $table->boolean('AirPump');
            $table->string('WheelType',20);
            $table->boolean('WheelDamage');
            $table->integer('KeylessRemotes');
            $table->boolean('KeylessRemotesDamaged');
            $table->boolean('OwnerBooks');
            $table->integer('FloorMatsWorn');
            $table->integer('FloorMatsDamaged');
            $table->integer('FloorMatsMissing');
            $table->string('QboSalesRefld',20);
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
