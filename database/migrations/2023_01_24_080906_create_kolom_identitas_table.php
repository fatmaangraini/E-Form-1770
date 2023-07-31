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
        Schema::create('kolom_identitas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('formulir1770_id');
            $table->foreign('formulir1770_id')->references('id')->on('formulir1770s');
            $table->string("npwp_wajibpajak", 20);
            $table->string("nama_wajibpajak", 250);
            $table->string("jenis_usaha", 250);
            $table->string("klu", 250);
            $table->string("no_telepon", 20);
            $table->string("fax", 250);
            $table->string("status_perpajakan", 20);
            $table->string("npwp_suamiisteri", 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kolom_identitas');
    }
};
