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
        Schema::create('vehicle_rates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vehicle_id'); //index , foreign key
            $table->string('starting_amount');
            $table->string('range_start')->nullable();
            $table->string('range_end')->nullable();
            $table->date('effective_date');
            $table->integer('is_active')->default('0');
            $table->integer('is_deleted')->default('0');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade'); // for relation
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle_rates');
    }
};
