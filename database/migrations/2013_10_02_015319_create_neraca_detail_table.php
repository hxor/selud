<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNeracaDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('neraca_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('neraca_id')->unsigned();
            $table->string('rekening2_id');
            $table->string('rekening3_id');
            $table->bigInteger('nilai');
            $table->timestamps();

            $table->foreign('neraca_id')->references('id')->on('neraca');
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
        Schema::dropIfExists('neraca_detail');
    }
}
