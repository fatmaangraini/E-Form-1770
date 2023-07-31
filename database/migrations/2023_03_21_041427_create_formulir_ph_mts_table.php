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
        Schema::create('formulir_ph_mts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('form_spts_id')->nullable();
            $table->string("status_PengNeto1")->nullable();
            $table->string("status_PengNeto2")->nullable();
            $table->string("pilihan_PTKP")->nullable();
            $table->string("tanggal_phmt")->nullable();
            $table->string("nama_PHMT")->nullable();
            $table->string("npwp_PHMT")->nullable();
            $table->string("ttd1")->nullable();
            $table->string("ttd2")->nullable();

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
        Schema::dropIfExists('formulir_ph_mts');
    }
};
