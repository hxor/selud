<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRekening2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekening2', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rekening1_id')->unsigned();
            $table->string('kode');
            $table->string('nama');
            $table->timestamps();

            $table->foreign('rekening1_id')->references('id')->on('rekening1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekening2');
    }
}
