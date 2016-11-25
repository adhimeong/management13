<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerijinanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perijinan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('guru_id');
            $table->foreign('guru_id')->references('id')->on('guru');
            $table->date('awal');
            $table->date('akhir');
            $table->string('surat_id')->nullable();
            $table->string('keterangan')->nullable();;
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
        Schema::drop('perijinan');
    }
}
