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
        Schema::create('booking_locations', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_booking_locations');
            $table->unsignedBigInteger('booking_id');
            $table->string('pin_location');
            $table->string('address');
            $table->string('longitutde');
            $table->string('latitude');
            $table->string('postalcode');
            $table->integer('is_active')->default('1');
            $table->integer('is_deleted')->default('0');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_locations');
    }
};
