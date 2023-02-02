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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('booking_type'); //index , foreign key
            $table->date('booking_date');
            $table->date('return_date')->null();
            $table->integer('no_of_hours')->default('0');
            $table->integer('no_of_passenger');
            $table->integer('no_of_vehicles');
            $table->integer('is_active')->default('1');
            $table->integer('is_deleted')->default('0');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('booking_type')->references('id')->on('booking_type')->onDelete('cascade'); // for relation
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
