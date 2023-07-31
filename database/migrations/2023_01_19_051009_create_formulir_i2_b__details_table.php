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
        Schema::create('formulir_i2_b__details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('formuliri2_id')->nullable();
            $table->unsignedBigInteger('formuliri2b_point')->nullable();
            $table->foreign('formuliri2_id')->references('id')->on('formulir_i2_s');
            $table->foreign('formuliri2b_point')->references('id')->on('formulir_i2_b__points');
            $table->string('rupiah_peredaran_usahaB');
            $table->string('norma');
            $table->string('rupiah_penghasilan_netoB');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formulir_i2_b__details');
    }
};
