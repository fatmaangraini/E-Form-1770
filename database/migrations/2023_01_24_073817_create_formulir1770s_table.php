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
        Schema::create('formulir1770s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('form_spts_id')->nullable();
            $table->string("jenis_PTKP")->nullable();
            $table->string("jenis_KreditPajak")->nullable();
            $table->string("jenis_PPhKurang_LebihBayar")->nullable();
            $table->string("permohonan_PPhLebihBayar")->nullable();
            $table->string("angsuran_PPh25")->nullable();
            $table->boolean("perhitungan_sendiri")->nullable();
            $table->date("tanggal_lunas")->nullable();
            $table->date("tanggal_lampiran")->nullable();
            $table->string("tanda_tangan")->nullable();
            $table->string("pelapor_pajak")->nullable();
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
        Schema::dropIfExists('formulir1770s');
    }
};
