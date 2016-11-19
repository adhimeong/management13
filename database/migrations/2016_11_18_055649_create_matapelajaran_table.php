<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatapelajaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matpel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pelajaran');
            $table->enum('jenis_pelajaran', ['Normatif', 'Adaptif', 'Produktif', 'Mulok']);
            $table->unsignedInteger('jurusan_id')->nullable();
            $table->foreign('jurusan_id')->references('id')->on('jurusan');
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
        Schema::drop('matpel');
    }
}
