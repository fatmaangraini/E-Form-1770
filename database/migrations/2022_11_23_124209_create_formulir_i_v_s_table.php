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
        Schema::create('formulir_i_v_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('form_spts_id')->nullable();
            $table->foreign('form_spts_id')->references('id')->on('form_spts');
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
        Schema::dropIfExists('formulir_i_v_s');
    }
};
