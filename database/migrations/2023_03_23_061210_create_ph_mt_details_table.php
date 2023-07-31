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
        Schema::create('ph_mt_details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('PhMt_id')->nullable();
            $table->unsignedBigInteger('PhMt_point')->nullable();
            $table->foreign('PhMt_id')->references('id')->on('formulir_ph_mts');
            $table->foreign('PhMt_point')->references('id')->on('ph_mt_points');
            $table->string('rupiah_PengNeto1');
            $table->string('rupiah_PengNeto2');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ph_mt_details');
    }
};
