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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patientid');
            $table->foreign('patientid')->references('id')->on('patients');
            $table->unsignedBigInteger('docid');
            $table->foreign('docid')->references('id')->on('users');
            $table->string('appointmentreason');
            $table->unsignedBigInteger('scheduleid');
            $table->foreign('scheduleid')->references('id')->on('schedules');
            $table->string('status');
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
        Schema::dropIfExists('appointment');
    }
};
