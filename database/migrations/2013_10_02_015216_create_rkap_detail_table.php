<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRkapDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rkap_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rkap_id')->unsigned();
            $table->integer('rekening2_id')->unsigned();
            $table->integer('rekening3_id')->unsigned();
            $table->bigInteger('nilai');
            $table->timestamps();

            $table->foreign('rkap_id')->references('id')->on('rkap');
            $table->foreign('rekening2_id')->references('id')->on('rekening2');
            $table->foreign('rekening3_id')->references('id')->on('rekening3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rkap_detail');
    }
}
