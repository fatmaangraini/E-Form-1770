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
        Schema::create('formulir1770__details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('formulir1770_id')->nullable();
            $table->unsignedBigInteger('formulir1770_point')->nullable();
            $table->foreign('formulir1770_id')->references('id')->on('formulir1770s');
            $table->foreign('formulir1770_point')->references('id')->on('formulir1770__points');
            $table->string('rupiah_daftar_poin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formulir1770__details');
    }
};
