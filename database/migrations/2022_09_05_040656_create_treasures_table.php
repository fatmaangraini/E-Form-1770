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
        Schema::create('treasures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('form_id')->nullable();
            $table->foreign('form_id')->references('id')->on('forms');
            $table->string("choice",10);
            $table->string("name_treasure",30);
            $table->string("acquisition_year",30);
            $table->string("acquisition_cost",30);
            $table->string("description",30);
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
