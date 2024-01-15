<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilePengumumenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_pengumumen', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengumuman_id');
            $table->text('nama_file');
            $table->text('lokasi_file');
            $table->foreign('pengumuman_id')->references('id')->on('pengumumen')->onDelete('cascade');
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
        Schema::dropIfExists('file_pengumumen');
    }
}
