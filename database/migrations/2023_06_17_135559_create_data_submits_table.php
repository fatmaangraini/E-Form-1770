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
        Schema::create('data_submits', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('submit_id')->nullable();
            $table->foreign('submit_id')->references('id')->on('submit_files');
            $table->string("kode_map");
            $table->string("kode_setor");
            $table->string("tanggal_spp_pbk");
            $table->string("nilai_spp_pbk");
            $table->string("ntpn_pbk");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_submits');
    }
};
