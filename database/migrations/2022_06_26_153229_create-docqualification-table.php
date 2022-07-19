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
        Schema::create('docqualifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('docid');
            $table->foreign('docid')->references('id')->on('users');
            $table->unsignedBigInteger('qualificationid');
            $table->foreign('qualificationid')->references('id')->on('qualifications');
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
        Schema::dropIfExists('docqualification');
    }
};
