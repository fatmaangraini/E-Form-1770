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
        Schema::create('pp46danpp23s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('form_spts_id')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('formuliriii_id')->nullable();
            $table->foreign('formuliriii_id')->references('id')->on('formulir_i_i_i_s');
            $table->string('alamat_wajib_pajak', 50)->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pp46danpp23s');
    }
};
