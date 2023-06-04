<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvailableSlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('available_slots', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');
            $table->enum('status', ['available', 'booked'])->default('available');
            $table->unsignedBigInteger('booked_by')->nullable();
            $table->timestamps();

            $table->foreign('booked_by')->references('id')->on('users');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('available_slots');
    }
}
