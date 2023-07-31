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
        Schema::create('kode_setors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('akun_pajak_id')->nullable();
            $table->foreign('akun_pajak_id')->references('id')->on('kode_maps');
            $table->integer("jenis_setor");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kode_setors');
    }
};
