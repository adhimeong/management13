<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenjadwalanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwalpel', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('guru_id')->nullable();
            //$table->foreign('guru_id')->references('id')->on('guru');
            $table->unsignedInteger('matpel_id')->nullable();
            //$table->foreign('jam_id')->references('id')->on('matpel');
            $table->unsignedInteger('jam_id')->nullable();
            //$table->foreign('jam_id')->references('id')->on('jampel');
            $table->unsignedInteger('kelas_id')->nullable();
            //$table->foreign('kelas_id')->references('id')->on('kelas');
            $table->string('hari');
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
        Schema::drop('jadwalpel');
    }
}
