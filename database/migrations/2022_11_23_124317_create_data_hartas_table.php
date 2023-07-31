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
        Schema::create('data_hartas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('formuliriv_id')->nullable();
            $table->foreign('formuliriv_id')->references('id')->on('formulir_i_v_s');
            $table->string("kode_harta",100);
            $table->string("nama_harta",30);
            $table->year('tahun_perolehan');
            $table->string("harta_perolehan",30);
            $table->string("keterangan",50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_hartas');
    }
};
