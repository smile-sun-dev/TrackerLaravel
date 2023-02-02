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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_class');
            $table->string('vehicle_type');
            $table->integer('no_of_passenger');
            $table->string('no_of_plate');
            $table->string('make');
            $table->string('model');
            $table->integer('year');
            $table->integer('no_of_luggage');

            $table->string('taxi_badge')->nullable();
            $table->string('insurance')->nullable();
            $table->string('vehicle_picture')->nullable();

            $table->integer('is_active')->default('1');
            $table->integer('is_deleted')->default('0');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
};
