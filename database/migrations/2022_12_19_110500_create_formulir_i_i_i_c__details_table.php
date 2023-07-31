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
        Schema::create('formulir_i_i_i_c__details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('formulirIII_id')->nullable();
            $table->unsignedBigInteger('formulirIIIC_point')->nullable();
            $table->foreign('formulirIII_id')->references('id')->on('formulir_i_i_i_s');
            $table->foreign('formulirIIIC_point')->references('id')->on('formulir_i_i_i_c__points');
            $table->string('rupiah_dsrPengenaan_PajakC');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formulir_i_i_i_c__details');
    }
};
