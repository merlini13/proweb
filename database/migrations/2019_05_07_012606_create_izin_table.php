<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIzinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('izin', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pemrakarsa');
            $table->string('no_ktp');
            $table->string('nama_usaha');
            $table->string('alamat_usaha');
            $table->string('jenis_usaha');
            $table->string('tahap');
            $table->string('sppl');
            $table->string('rencana');
            $table->string('fotocopyktp');
            $table->string('fotolokasi');
            $table->string('fotocopyimb');
            $table->string('fotocopysertifikattanah');
            $table->string('fotocopybuktipembayaranpbb');
            $table->string('gambarbangunan');
            $table->string('areaparkir');
            $table->string('denahlokasi');
            $table->string('greasetrap');
            $table->string('aktapendiriancv');
            $table->integer('status_publikasi');
            $table->string('status');
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('izin');
    }
}
