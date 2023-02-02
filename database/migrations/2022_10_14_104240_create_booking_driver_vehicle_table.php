<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_driver_vehicle', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('driver_vehicle_id');
            $table->unsignedBigInteger('booking_id');
            $table->unsignedBigInteger('booking_locations_id');
            $table->integer('is_active')->default('1');
            $table->integer('is_deleted')->default('0');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('driver_vehicle_id')->references('id')->on('driver_vehicle')->onDelete('cascade');
            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
            $table->foreign('booking_locations_id')->references('id')->on('booking_locations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_driver_vehicle');
    }
};
