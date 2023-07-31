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
        Schema::create('data_kels', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('formuliriv_id')->nullable();
            $table->foreign('formuliriv_id')->references('id')->on('formulir_i_v_s');
            $table->string("nama_anggota_kel",50);
            $table->string("nik",16);
            $table->string("hubungan",20);
            $table->string("pekerjaan",30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_kels');
    }
};
