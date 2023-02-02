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
        Schema::create('package_amount', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('package_id'); //index , foreign key
            $table->string('amount');
            $table->date('effective_date');
            $table->integer('is_active')->default('1');
            $table->integer('is_deleted')->default('0');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade'); // for relation
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('package_amount');
    }
};
