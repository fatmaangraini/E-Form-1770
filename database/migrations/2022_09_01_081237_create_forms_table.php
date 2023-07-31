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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string("name",30);
            $table->string("nik",30);
            $table->string("tempat_lahir",30);
            $table->string("tahun_lahir",12);
            $table->string("npwp",20);
            $table->string("tahun",4);
            $table->string("jenis_pelaporan",25);
            $table->string("pembetulan",4);
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
        Schema::dropIfExists('forms');
    }
};
