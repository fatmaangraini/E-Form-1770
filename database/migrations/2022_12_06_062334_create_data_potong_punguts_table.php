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
        Schema::create('data_potong_punguts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('formulirii_id')->nullable();
            $table->foreign('formulirii_id')->references('id')->on('formulir_i_i_s');
            $table->string("nama_pemotong",100);
            $table->string("npwp_pemotong",20);
            $table->string("nomor_bupot",20);
            $table->date("tgl_bupot");
            $table->string("jenis_pajak",20);
            $table->string("jumlahPPh_potong",30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_potong_punguts');
    }
};
