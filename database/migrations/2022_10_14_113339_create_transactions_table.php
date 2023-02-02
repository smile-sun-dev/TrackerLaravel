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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('booking_id');
            $table->integer('payment_transaction_id');
            $table->integer('total_amount');
            $table->integer('is_paid')->default('0');
            $table->integer('discount')->default('0');
            $table->string('payment_type');
            $table->text('response_data')->nullable();
            $table->string('last_four_digit')->default('0');
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
        Schema::dropIfExists('transactions');
    }
};
