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
        Schema::create('submit_files', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('form_spts_id')->nullable();
            $table->string("laporan_keuangan")->nullable();
            $table->string("bukti_potong")->nullable();
            $table->string("dokumen_lainnya")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('submit_files');
    }
};
