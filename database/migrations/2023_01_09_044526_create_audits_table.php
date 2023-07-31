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
        Schema::create('audits', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('formuliri_id');
            $table->foreign('formuliri_id')->references('id')->on('formulir_i_s');
            $table->string("opini_akuntan", 50);
            $table->string("nama_AKpublik", 250);
            $table->string("npwp_AKpublik", 20);
            $table->string("nama_kantor_AKpublik", 250);
            $table->string("npwp_kantor_AKpublik", 20);
            $table->string("nama_Kpajak", 250);
            $table->string("npwp_Kpajak", 20);
            $table->string("nama_kantor_Kpajak", 250);
            $table->string("npwp_kantor_Kpajak", 20);
        });
    }
  
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('audits');
    }
};
