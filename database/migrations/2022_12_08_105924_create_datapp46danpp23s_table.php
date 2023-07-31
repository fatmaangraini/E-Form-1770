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
        Schema::create('datapp46danpp23s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('pp46danpp23_id')->nullable();
            $table->foreign('pp46danpp23_id')->references('id')->on('pp46danpp23s');
            $table->string("npwp",20);
            $table->string("masa_pajak",20);
            $table->string("alamat",50);
            $table->string("peredaran_bruto",50);
            $table->string("jumlahPPhFinal_dibayar",50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datapp46danpp23s');
    }
};
