<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRumahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rumahs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipe_rumah');
            $table->integer('harga_rumah');
            $table->string('luas_tunah');
            $table->string('deskripsi');
            $table->integer('jumlah_lantai');
            $table->string('kamar_tidur');
            $table->string('kamar_mandi');
            $table->string('agen_id');
            $table->string('foto')->nullable();
            $table->timestamps();

            // $table->foreign('agen_id')->references('id')->on('agens')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rumahs');
    }
}
