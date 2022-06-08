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
        Schema::create('galeries', function (Blueprint $table) {
            $table->id();
            $table->String('galeriename');
            $table->timestamps();
            $table->unsignedBigInteger('photo_id');
            $table->unsignedBigInteger('galerie_id');
            $table->foreign('photo_id')->references('id')->on('photos');
            $table->foreign('galerie_id')->references('id')->on('galeries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galeries');
    }
};
