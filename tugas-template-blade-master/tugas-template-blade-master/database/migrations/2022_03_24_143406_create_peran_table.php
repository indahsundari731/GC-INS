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
            $table->string('nama');
            
            $table->unsignedBigInteger('cast_id');
            $table->foreign('cast_id')->references('id')->on('cast')->onDelete('cascade');
            
            $table->unsignedBigInteger('film_id');
            $table->foreign('film_id')->references('id')->on('film')->onDelete('cascade');
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
        Schema::dropIfExists('peran');
    }
}
