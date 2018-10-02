<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRekening3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekening3', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bumd_id')->unsigned();
            $table->integer('rekening2_id')->unsigned();
            $table->string('kode');
            $table->string('nama');
            $table->timestamps();

            $table->foreign('bumd_id')->references('id')->on('bumd_id');
            $table->foreign('rekening2_id')->references('id')->on('rekening2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekening3');
    }
}
