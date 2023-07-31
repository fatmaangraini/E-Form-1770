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
        Schema::create('data_utangs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('formuliriv_id')->nullable();
            $table->foreign('formuliriv_id')->references('id')->on('formulir_i_v_s');
            $table->string("kode_utang",100);
            $table->string("nama_pemberi_pinjaman",100);
            $table->string("alamat_pemberi_pinjaman",100);
            $table->year("tahun_pinjaman");
            $table->string("jumlah_pinjaman",100);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_utangs');
    }
};
