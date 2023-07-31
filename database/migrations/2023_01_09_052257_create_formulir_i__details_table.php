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
        Schema::create('formulir_i__details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('formuliri_id')->nullable();
            $table->unsignedBigInteger('formuliri_point')->nullable();
            $table->foreign('formuliri_id')->references('id')->on('formulir_i_s');
            $table->foreign('formuliri_point')->references('id')->on('formulir_i__points');
            $table->string('rupiah_JenisPenghasilan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formulir_i__details');
    }
};
