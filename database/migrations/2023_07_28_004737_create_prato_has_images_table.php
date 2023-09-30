<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePratoHasImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prato_has_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prato_id');
            $table->unsignedBigInteger('image_id');

            $table->foreign('prato_id')->references('id')->on('pratos');
            $table->foreign('image_id')->references('id')->on('images');
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
        Schema::dropIfExists('prato_has_images');
    }
}
