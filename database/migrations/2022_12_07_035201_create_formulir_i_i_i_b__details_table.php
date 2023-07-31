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
        Schema::create('formulir_i_i_i_b__details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('formulirIII_id')->nullable();
            $table->unsignedBigInteger('formulirIIIB_point')->nullable();
            $table->foreign('formulirIII_id')->references('id')->on('formulir_i_i_i_s');
            $table->foreign('formulirIIIB_point')->references('id')->on('formulir_i_i_i_b__points');
            $table->string('rupiah_dsrPengenaan_PajakB');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formulir_i_i_i_b__details');
    }
};
