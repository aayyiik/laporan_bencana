<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelaporanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelaporan', function (Blueprint $table) {
            $table->bigIncrements('id_lapor');
            $table->unsignedBigInteger('id_warga');
            $table->foreign('id_warga')->references('id_user')->on('users');
            $table->unsignedBigInteger('id_bencana');
            $table->foreign('id_bencana')->references('id_bencana')->on('bencana');
            $table->unsignedBigInteger('id_kecamatan');
            $table->foreign('id_kecamatan')->references('id_kecamatan')->on('kecamatan');
            $table->dateTime('waktu');
            $table->integer('status')->default('0');
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
        Schema::dropIfExists('pelaporan');
    }
}
