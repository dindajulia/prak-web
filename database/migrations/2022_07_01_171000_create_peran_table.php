<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('film_id');
            $table->foreign('film_id')->references('id')->on('film');

            // $table->unsignedBigInteger('casts_id');
            // $table->foreign('casts_id')->references('id')->on('casts');
            // $table->string('nama');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peran');
    }
}
