<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRkapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rkap', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bumd_id')->unsigned();
            $table->string('judul');
            $table->date('tanggal');
            $table->boolean('status')->default(0);
            $table->timestamps();

            $table->foreign('bumd_id')->references('id')->on('bumd');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rkap');
    }
}
