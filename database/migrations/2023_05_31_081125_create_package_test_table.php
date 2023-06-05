<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_test', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('package_id');
            $table->unsignedBigInteger('test_id');
            
            $table->foreign('package_id')->references('id')->on('packages');
            $table->foreign('test_id')->references('id')->on('tests');
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
        Schema::dropIfExists('package_test');
    }
}
