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
        Schema::create('form_spts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->year('tahun');
            $table->string("status_spt");
            $table->string("pembetulan");
            $table->string("status")->nullable();
            $table->string("jumlah")->nullable();
            $table->string("catatan")->nullable();
            $table->string("media_pengiriman_token");
            $table->string("jenis_pelaporan")->nullable();
            $table->string("cek_pembetulan")->nullable();
            $table->boolean("cek_submit");
        });
    }
    /**
     * Reverse the migrations. 
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formspt');
    }
};
 