<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommetPengumumenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commet_pengumumen', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengumuman_id');
            $table->foreign('pengumuman_id')->references('id')->on('pengumumen')->onDelete('cascade');
            $table->string('name');
            $table->string('email');
            $table->text('content');
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
        Schema::dropIfExists('commet_pengumumen');
    }
}
