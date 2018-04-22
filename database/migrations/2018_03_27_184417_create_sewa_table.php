<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSewaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sewa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_toko')->unsigned();
            $table->foreign('id_toko')->references('id')->on('toko');
            $table->integer('id_pembeli')->unsigned();
            $table->foreign('id_pembeli')->references('id')->on('users');
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
        Schema::dropIfExists('sewa');
    }
}
