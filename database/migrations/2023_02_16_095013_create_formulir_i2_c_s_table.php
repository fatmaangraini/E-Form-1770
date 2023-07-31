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
        Schema::create('formulir_i2_c_s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('formuliri2_id')->nullable();
            $table->foreign('formuliri2_id')->references('id')->on('formulir_i2_s');
            $table->string("npwp_pemberi_kerja",20);
            $table->string("nama_pemberi_kerja",100);
            $table->string("penghasilan_bruto");
            $table->string("pengurangan_penghasilan_bruto");
            $table->string("penghasilan_neto");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formulir_i2_c_s');
    }
};
